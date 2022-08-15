<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Sale;
use App\Models\Saler;
use App\Models\Token;
use App\Models\LitPoint;
use App\Models\Newuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Stripe;
use Config;

class PaymentController extends Controller
{
    private $stripe;
    
    public function __construct()
    {
        // dd(Config::get('services.stripe.secret'));
        $stripe = new \Stripe\StripeClient(Config::get('services.stripe.secret'));
        // dd($stripe);
    }
    public function purchasePoint(Request $request)
    {
        // dd($request->token_id);
        $stripe = new \Stripe\StripeClient(Config::get('services.stripe.secret'));
        $v  = Validator::make($request->all(),[
            'user_id' => 'required',
            // 'price' => 'required',
            'token_id' => 'required',
            'number' => 'required',
            'exp_month' => 'required',
            'exp_year' => 'required',
            'cvc' => 'required',
        ]);
        
        if($v->fails())
        {
            // dd($request->all());
            return response()->json([
                'status' => false,
                'errors' => $v->errors()
            ]);
        }
        
        // dd($tokenId->price);
        // $stripe = new \Stripe\StripeClient();
        // dd($stripe);
        try{ 
            $tokenId = Token::Where('id',$request->token_id)->first();
        $token = $stripe->tokens->create([
            'card' => [
                'number' => $request->number,
                'exp_month' => $request->exp_month,
                'exp_year' => $request->exp_year,
                'cvc' => $request->cvc,
            ],
        ]);
        //  dd($token);
         $c =$stripe->charges->create([
             "amount" => $tokenId->price * 100,
             "currency" => "usd",
             "source" => $token['id'],
             "description" => "Making test payment."
         ]);
        //  dd($c);
        $totalToken = LitPoint::where('user_id', $request->user_id)->max('total_token');
        if(!$totalToken){
            $totalToken = 0;
        }
        // dd($request->token_id);
         $l = LitPoint::create([
            'user_id' => $request->user_id,
            'token_id' =>$request->token_id,
            'price' => $tokenId->price,
            'token' => $tokenId->tokens,
            'stripe_token' => $token['id'],
            'total_token' => $tokenId->tokens + $totalToken,
         ]);
         return response()->json(['status' => true,'message' => 'Payment has been processed successfully.', 'Lit Points'=>$l]);
        
        } 
        catch(\Exception $e)
        {
            return response()->json(['status' => false,'errors' => $e->getMessage()]);
         }

    }
    
    
    
    //all list token 
    public function tokenList(Request $request){
        // $totalToken = Newuser::where('id', $request->user_id)->first();
        // dd($totalToken);
        $totalToken = LitPoint::where('user_id', $request->user_id)->max('total_token');
        if(!$totalToken){
            $totalToken = 0;
        }
        $lists = Token::all();
        if(isset($lists)){
            $list = [];
            foreach($lists as $l)
            {
                $data = [
                        'id' => $l->id,
                        'price' => $l->price.' $',
                        'token' => $l->tokens.' Lit Points',
                    ];
                    
                $list[] = $data;
            }
                return response()->json(['status' => true,'message' => 'list Show successfully !', 'users'=>$list,'Total Token'=>$totalToken.' Lit Points']);
        }else{
            return response()->json(['status' => false,'message' => 'List empty!']);
        }
        
    //   return response()->json(['status' => true,'message' => 'Price and token List', 'List' => $list]);
    }

    public function userTokenCount(Request $request){
        $UserId = $request->post('user_id');
        $TotalTokens = DB::table('lit_points')
            ->where('user_id', '=', $UserId)
            ->get();
        $lists = Token::all();
        $list = array();
        if(isset($lists)){
            foreach($lists as $l)
            {
                $data = [
                    'id' => $l->id,
                    'price' => $l->price.' $',
                    'token' => $l->tokens.' Lit Points',
                ];
                $list[] = $data;
            }
        }
        if(sizeof($TotalTokens) == 0){
            return response()->json(['status' => false, 'message' => 'No record found for this user!', 'totalToken' => 0, 'user_id' => $UserId, 'tokens' => $list]);
        } else {
            return response()->json(['status' => true, 'message' => 'Record successfully generated!', 'totalToken' => $TotalTokens[0]->total_token, 'user_id' => $UserId, 'tokens' => $list]);
        }
    }
    
    public function signup(Request $request)
    {
        $v  = Validator::make($request->all(),[
            'name' => 'required',
            'user_name' => 'required',
            'location' => 'required',
            'gender' => 'required',
            'image' => 'required',
        ]);
        // dd($v);
        if($v->fails())
        {
            return response()->json(['status' => false,'message' => $v->errors()->first()]);
        }
        
        $input = $request->all();
        $userName = Newuser::where('user_name',$request->user_name)->first();
        // dd($userName);
        if(!$userName){
        $user = Newuser::create($input);
        return response()->json(['status' => true,'message' =>  'User registered successfully!', 'user' =>$user]);
        }else{
            return response()->json(['status' => false,'message' =>  'User already registered']);
        }
    }
    
}