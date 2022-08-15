<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\LitPoint;
use App\Models\Payment;
use App\Models\Sale;
use App\Models\Saler;
use App\Models\VipEvents;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Stripe;

class CommonController extends Controller
{
    private $stripe;

    public function __construct()
    {
        // dd(Config::get('services.stripe.secret'));
        $stripe = new Stripe\StripeClient(\Illuminate\Support\Facades\Config::get('services.stripe.secret'));
        /*$stripe = new \Cartalyst\Stripe\Stripe(\Illuminate\Support\Facades\Config::get('services.stripe.secret'));*/
        // dd($stripe);
    }

    public function purchaseTicket(Request $request)
    {
        $stripe = new Stripe\StripeClient(\Illuminate\Support\Facades\Config::get('services.stripe.secret'));
        $v = Validator::make($request->all(), [
            'user_id' => 'required',
            'token_id' => 'required',
            'ticket_owner_id' => 'required',
            'token_price' => 'required',
            'card_number' => 'required',
            'card_expiration_month' => 'required',
            'card_expiration_year' => 'required',
            'card_cvc' => 'required',
        ]);

        if ($v->fails()) {
            // dd($request->all());
            return response()->json([
                'status' => false,
                'errors' => $v->errors()
            ]);
        }

        // $stripe = new \Stripe\StripeClient();
        // dd($stripe);
        try {
            $token = $stripe->tokens->create([
                'card' => [
                    'number' => $request->post('card_number'),
                    'exp_month' => $request->post('card_expiration_month'),
                    'exp_year' => $request->post('card_expiration_year'),
                    'cvc' => $request->post('card_cvc'),
                ],
            ]);
            //  dd($token);
            $c = $stripe->charges->create([
                "amount" => $request->post('token_price') * 100,
                "currency" => "usd",
                "source" => $token['id'],
                "description" => "Making test payment."
            ]);
            $UserCheck = DB::table('firebase_users')
                ->where('unique_id', '=', $request->post('user_id'))
                ->get();
            if(sizeof($UserCheck) == 0){
                return response()->json(['status' => false, 'errors' => "User not exists!"]);
            }
            $Token = DB::table('tokens')
                ->where('id', '=', $request->post('token_id'))
                ->get();
            if(sizeof($Token) == 0){
                return response()->json(['status' => false, 'errors' => "Token not exists!"]);
            }
            $LitPoints = DB::table('lit_points')
                ->where('user_id', '=', $request->post('user_id'))
                ->get();
            if(sizeof($LitPoints) > 0){
                /*Update*/
                DB::table('lit_points')
                    ->where('user_id', '=', $request->post('user_id'))
                    ->update([
                        'total_token' => floatval($LitPoints[0]->total_token) + floatval($Token[0]->tokens),
                        'updated_at' => Carbon::now()
                    ]);
            } else {
                /*Insert*/
                LitPoint::create([
                    'user_id' => $request->post('user_id'),
                    'total_token' => $Token[0]->tokens,
                    'stripe_token' => $token['id']
                ]);
            }

            //  dd($c);
            $s = Sale::create([
                'transaction_id' => '#TID_' . str_replace(".", "", microtime(true)) . rand(000, 999),
                'purchaser_id' => $request->post('user_id'),
                'ticket_id' => $request->post('token_id'),
                'ticket_owner_id' => $request->post('ticket_owner_id'),
                'ticket_price' => $request->post('token_price'),
            ]);
            $saler = Saler::where('ticket_owner_id', $s->ticket_owner_id)->first();
            if ($saler) {
                $saler->update(['total_sales' => $saler->total_sales + $s->ticket_price]);
                return response()->json(['status' => true, 'message' => 'Payment has been processed successfully.', 'Total Token' => $saler->total_sales]);
            } else {
                Saler::create(['ticket_owner_id' => $s->ticket_owner_id, 'total_sales' => $s->ticket_price]);
                return response()->json(['status' => true, 'message' => 'Payment has been processed successfully.']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'errors' => $e->getMessage()]);
        }
    }

    public function withdraw(Request $request)
    {
        $v = Validator::make($request->all(), [
            'user_id' => 'required',
            'account_number' => 'required',
            'routing_number' => 'required',
            'full_name' => 'required',
            'amount' => 'required',
        ]);
        if ($v->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $v->errors()
            ]);
        }
        $s = Saler::where('ticket_owner_id', $request->user_id)->first();
        if ($s) {
            if ($s->total_sales < $request->amount)
                return response()->json([
                    'status' => false,
                    'message' => 'Withdrawal Amount must be less than equal to ' . $s->total_sales,
                ]);
        } else
            return response()->json([
                'status' => false,
                'message' => 'Invalid User',
            ]);
        $stripe = new \Stripe\StripeClient('sk_test_51JlBYiJ1g0lG5fMWJe9fvdp7PAmFe5tI3Wy8QLYxYOB8YKyephNQX4H4sTdpztjp8yyoxAIhCc3F4bn2hfCjpdNT00CEnoI0JP');
        try {
            $token = $stripe->tokens->create([
                'bank_account' => [
                    'country' => 'US',
                    'currency' => 'usd',
                    'account_holder_name' => $request->full_name,
                    'routing_number' => $request->routing_number,
                    'account_number' => $request->account_number,
                ],
            ]);
            \Stripe\Stripe::setApiKey('sk_test_51JlBYiJ1g0lG5fMWJe9fvdp7PAmFe5tI3Wy8QLYxYOB8YKyephNQX4H4sTdpztjp8yyoxAIhCc3F4bn2hfCjpdNT00CEnoI0JP');

            $external_account = \Stripe\Account::createExternalAccount(
                'ac_KnvuGY7BRYSMYtIC8ze5kIP1SnwaM0t3',
                [
                    'external_account' => $token['bank_account']['id'],
                ]
            );

            $stripe->payouts->create([
                'amount' => $request->amount,
                'currency' => 'usd',
                'destination' => $token['bank_account']['id'],
            ]);
            $s = Payment::create([
                'transaction_id' => '#TID_' . str_replace(".", "", microtime(true)) . rand(000, 999),
                'user_id' => $request->user_id,
                'amount' => $request->amount,
                'account_number' => $request->account_number,
                'routing_number' => $request->routing_number,
                'full_name' => $request->full_name,
            ]);
            $s->update(['total_sales' => $s->total_sales - $s->ticket_price]);
            return response()->json(['status' => true, 'message' => 'Payment has been processed successfully.']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'errors' => $e->getMessage()]);
        }

    }

    public function totalSales(Request $request)
    {
        $v = Validator::make($request->all(), [
            'ticket_owner_id' => 'required',]);
        if ($v->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $v->errors()
            ]);
        }
        $sales = Saler::where('ticket_owner_id', $request->ticket_owner_id)->first();
        if ($sales)
            return response()->json(['status' => true, 'total_sales' => $sales->total_sales]);
        return response()->json(['status' => false, 'error' => 'No Sales Available']);
    }

    public function salesSummary(Request $request)
    {
        $v = Validator::make($request->all(), [
            'ticket_owner_id' => 'required',]);
        if ($v->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $v->errors()
            ]);
        }
        $sales = Sale::where('ticket_owner_id', $request->ticket_owner_id)->get();
        if ($sales)
            return response()->json(['status' => true, 'sales' => $sales]);
        return response()->json(['status' => false, 'error' => 'No Sales Available']);
    }

    public function connect(Request $request)
    {
        $stripe = new \Stripe\StripeClient();
        $t = $stripe->accounts->create(['type' => 'standard']);
        // dd($t);
        $stripe->accountLinks->create(
            [
                'account' => $t['id'],
                'refresh_url' => 'https://connect.stripe.com/oauth/authorize?response_type=code&client_id=ca_KnkO68kc1omslinAvxFBbBXG8ze8gU8r&scope=read_write',
                'return_url' => 'https://lit24-7.jobforu.fr/public/api/withdraw/url',
                'type' => 'account_onboarding',
            ]
        );
        return redirect('https://connect.stripe.com/oauth/authorize?response_type=code&client_id=ca_KnkO68kc1omslinAvxFBbBXG8ze8gU8r&scope=read_write');
    }

    function vipEventCreate(Request $request)
    {
        $UserId = $request->post('user_id');
        $EventName = $request->post('event_name');
        /*User Check*/
        $UserCheck = DB::table('firebase_users')
            ->where('unique_id', '=', $UserId)
            ->get();
        if(sizeof($UserCheck) == 0){
            return response()->json(['status' => false, 'errors' => "User not exists!"]);
        }
        $TokensCountCheck = DB::table('lit_points')
            ->where('user_id', '=', $UserId)
            ->where('total_token', '>=', 10)
            ->get();
        if(sizeof($TokensCountCheck) == 0){
            return response()->json(['status' => false, 'errors' => "Insufficient number of tokens!"]);
        }
        $Affected = VipEvents::create([
            'user_id' => $UserId,
            'event_name' => $EventName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('lit_points')
            ->where('user_id', '=', $UserId)
            ->update([
                'total_token' => floatval($TokensCountCheck[0]->total_token) - 10
            ]);
        return response()->json(['status' => true, 'message' => "success", 'user_id' => $UserId, 'totalTokens' => floatval($TokensCountCheck[0]->total_token) - 10]);
    }
}