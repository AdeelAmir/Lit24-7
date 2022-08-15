<?php

namespace App\Http\Controllers;

use App\Models\FirebaseUsers;
use App\Models\FirebaseUserTickets;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirebaseUsersController extends Controller
{
    function index()
    {
        $user_data = app('firebase.firestore')->database()->collection('users')->orderBy('username');
        $snapshot = $user_data->documents();
        return view('users', compact('snapshot'));
    }

    function store(){
        $user_data = app('firebase.firestore')->database()->collection('users')->orderBy('username');
        $snapshot = $user_data->documents();
        DB::table('firebase_users')->truncate();
        DB::table('firebase_user_tickets')->truncate();
        foreach ($snapshot as $item) {
            $Affected = FirebaseUsers::create([
                'unique_id' => $item['id'],
                'username' => $item['username'],
                'displayName' => $item['displayName'],
                'gender' => $item['gender'],
                'cityValue' => $item['cityValue'],
                'countryValue' => $item['countryValue'],
                'location' => $item['location'],
                'myLatitude' => $item['myLatitude'],
                'myLongitude' => $item['myLongitude'],
                'photoUrl' => $item['photoUrl'],
                'stateValue' => $item['stateValue'],
                'token' => $item['token'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            if(isset($item['tickets'])){
                foreach ($item['tickets'] as $index1 => $ticket){
                    FirebaseUserTickets::create([
                        'firebase_user_id' => $Affected->id,
                        'name' => $ticket['name'],
                        'is_paid' => $ticket['isPaid'],
                        'isSelected' => $ticket['isSelected'],
                        'isScanned' => $ticket['isScanned'],
                        'path' => $ticket['path'],
                        'firebase_created_at' => $ticket['created_at'],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
                }
            }
        }
        return redirect()->route('firebase.firestore.users')->with('success', 'Data successfully imported');
    }

    function index1(){
        $user_data = app('firebase.firestore')->database()->collection('users')->orderBy('username');
        $snapshot = $user_data->documents();
        foreach ($snapshot as $index => $value){
            if(isset($value['tickets'])){
                echo '<pre>';
                echo print_r($value['tickets']);
                echo '</pre>';
                echo '<br><br>';
            }
        }
    }

    function UpdateUserData()
    {
        $user_data = app('firebase.firestore')->database()->collection('users')->orderBy('username');
        $snapshot = $user_data->documents();
        DB::beginTransaction();
        foreach ($snapshot as $index => $value){
            $FirebaseUser = DB::table('firebase_users')
                ->where('unique_id', '=', $value['id'])
                ->get();
            if(sizeof($FirebaseUser) > 0){
                /* Update */
                $Affected = DB::table('firebase_users')
                    ->where('id', '=', $FirebaseUser[0]->id)
                    ->update([
                        'username' => $value['username'],
                        'displayName' => $value['displayName'],
                        'gender' => $value['gender'],
                        'cityValue' => $value['cityValue'],
                        'countryValue' => $value['countryValue'],
                        'location' => $value['location'],
                        'myLatitude' => $value['myLatitude'],
                        'myLongitude' => $value['myLongitude'],
                        'photoUrl' => $value['photoUrl'],
                        'stateValue' => $value['stateValue'],
                        'token' => $value['token'],
                        'updated_at' => Carbon::now()
                    ]);
                DB::table('firebase_user_tickets')
                    ->where('firebase_user_id', '=', $FirebaseUser[0]->id)
                    ->delete();
                if(isset($value['tickets'])){
                    foreach ($value['tickets'] as $index1 => $ticket){
                        FirebaseUserTickets::create([
                            'firebase_user_id' => $FirebaseUser[0]->id,
                            'name' => $ticket['name'],
                            'is_paid' => $ticket['isPaid'],
                            'isSelected' => $ticket['isSelected'],
                            'isScanned' => $ticket['isScanned'],
                            'path' => $ticket['path'],
                            'firebase_created_at' => $ticket['created_at'],
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()
                        ]);
                    }
                }
            } else {
                /* Insert */
                $Affected = FirebaseUsers::create([
                    'unique_id' => $value['id'],
                    'username' => $value['username'],
                    'displayName' => $value['displayName'],
                    'gender' => $value['gender'],
                    'cityValue' => $value['cityValue'],
                    'countryValue' => $value['countryValue'],
                    'location' => $value['location'],
                    'myLatitude' => $value['myLatitude'],
                    'myLongitude' => $value['myLongitude'],
                    'photoUrl' => $value['photoUrl'],
                    'stateValue' => $value['stateValue'],
                    'token' => $value['token'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

                if(isset($value['tickets'])){
                    foreach ($value['tickets'] as $index1 => $ticket){
                        FirebaseUserTickets::create([
                            'firebase_user_id' => $Affected->id,
                            'name' => $ticket['name'],
                            'is_paid' => $ticket['isPaid'],
                            'isSelected' => $ticket['isSelected'],
                            'isScanned' => $ticket['isScanned'],
                            'path' => $ticket['path'],
                            'firebase_created_at' => $ticket['created_at'],
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()
                        ]);
                    }
                }
            }
        }
        DB::commit();
        return true;
    }
}