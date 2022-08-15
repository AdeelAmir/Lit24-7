<?php

namespace App\Http\Controllers;

use App\Models\FirebaseVipUsers;
use App\Models\FirebaseVipUsersFreePass;
use App\Models\FirebaseVipUsersGuests;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirebaseVipUsersController extends Controller
{
    function index()
    {
        $user_data = app('firebase.firestore')->database()->collection('vip_functions');
        $snapshot = $user_data->documents();
        DB::table('firebase_vip_users')->truncate();
        DB::table('firebase_vip_users_free_passes')->truncate();
        DB::table('firebase_vip_users_guests')->truncate();
        foreach ($snapshot as $index => $value){
            $Affected = FirebaseVipUsers::create([
                'unique_id' => $value['id'],
                'username' => $value['username'],
                'name' => $value['name'],
                'ownerId' => $value['ownerId'],
                'category' => $value['category'],
                'subcategory' => $value['subcategory'],
                'type' => $value['type'],
                'price' => $value['price'],
                'description' => $value['description'],
                'thumb' => $value['thumb'],
                'limit' => $value['limit'],
                'longitude' => $value['longitude'],
                'location' => $value['location'],
                'latitude' => $value['latitude'],
                'photoUrl' => $value['photoUrl'],
                'mediaUrl' => $value['mediaUrl'],
                'time' => $value['time'],
                'created' => $value['created'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            if(isset($value['free_pass'])){
                foreach ($value['free_pass'] as $index1 => $free_pass){
                    FirebaseVipUsersFreePass::create([
                        'firebase_vip_user_id' => $Affected->id,
                        'eventID' => $free_pass['eventID'],
                        'email' => $free_pass['email'],
                        'passport' => $free_pass['passport'],
                        'sessions' => $free_pass['sessions'],
                        'path' => $free_pass['path'],
                        'eventPic' => $free_pass['eventPic'],
                        'isScanned' => $free_pass['isScanned'],
                        'createdTicket' => $free_pass['createdTicket'],
                        'phone' => $free_pass['phone'],
                        'isPaid' => $free_pass['isPaid'],
                        'ticketName' => $free_pass['ticketName'],
                        'isSelected' => $free_pass['isSelected'],
                        'validUntil' => $free_pass['validUntil'],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
                }
            }

            if(isset($value['guests'])){
                foreach ($value['guests'] as $index1 => $guest){
                    FirebaseVipUsersGuests::create([
                        'firebase_vip_user_id' => $Affected->id,
                        'isSelected' => $guest['isSelected'],
                        'name' => $guest['name'],
                        'unique_id' => $guest['id'],
                        'isBlock' => $guest['isBlock'],
                        'isModerator' => $guest['isModerator'],
                        'sessions' => $guest['sessions'],
                        'pic' => $guest['pic'],
                        'tickets' => $guest['tickets'],
                        'isPaid' => $guest['isPaid'],
                        'token' => $guest['token'],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
                }
            }

            echo '<pre>';
            echo print_r($value);
            echo '</pre>';
            echo '<br><br>';
        }
        echo 'Data Inserted Successfully';
        exit();
    }

    function UpdateVipUserData()
    {
        $user_data = app('firebase.firestore')->database()->collection('vip_functions');
        $snapshot = $user_data->documents();
        DB::beginTransaction();
        foreach ($snapshot as $index => $value){
            $FirebaseVipUser = DB::table('firebase_vip_users')
                ->where('unique_id', '=', $value['id'])
                ->get();
            if(sizeof($FirebaseVipUser) > 0){
                /* Update */
                $Affected = DB::table('firebase_vip_users')
                    ->where('id', '=', $FirebaseVipUser[0]->id)
                    ->update([
                        'username' => $value['username'],
                        'name' => $value['name'],
                        'ownerId' => $value['ownerId'],
                        'category' => $value['category'],
                        'subcategory' => $value['subcategory'],
                        'type' => $value['type'],
                        'price' => $value['price'],
                        'description' => $value['description'],
                        'thumb' => $value['thumb'],
                        'limit' => $value['limit'],
                        'longitude' => $value['longitude'],
                        'location' => $value['location'],
                        'latitude' => $value['latitude'],
                        'photoUrl' => $value['photoUrl'],
                        'mediaUrl' => $value['mediaUrl'],
                        'time' => $value['time'],
                        'created' => $value['created'],
                        'updated_at' => Carbon::now()
                    ]);
                DB::table('firebase_vip_users_free_passes')
                    ->where('firebase_vip_user_id', '=', $FirebaseVipUser[0]->id)
                    ->delete();
                if(isset($value['free_pass'])){
                    foreach ($value['free_pass'] as $index1 => $free_pass){
                        FirebaseVipUsersFreePass::create([
                            'firebase_vip_user_id' => $FirebaseVipUser[0]->id,
                            'eventID' => $free_pass['eventID'],
                            'email' => $free_pass['email'],
                            'passport' => $free_pass['passport'],
                            'sessions' => $free_pass['sessions'],
                            'path' => $free_pass['path'],
                            'eventPic' => $free_pass['eventPic'],
                            'isScanned' => $free_pass['isScanned'],
                            'createdTicket' => $free_pass['createdTicket'],
                            'phone' => $free_pass['phone'],
                            'isPaid' => $free_pass['isPaid'],
                            'ticketName' => $free_pass['ticketName'],
                            'isSelected' => $free_pass['isSelected'],
                            'validUntil' => $free_pass['validUntil'],
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()
                        ]);
                    }
                }

                DB::table('firebase_vip_users_guests')
                    ->where('firebase_vip_user_id', '=', $FirebaseVipUser[0]->id)
                    ->delete();
                if(isset($value['guests'])){
                    foreach ($value['guests'] as $index1 => $guest){
                        FirebaseVipUsersGuests::create([
                            'firebase_vip_user_id' => $FirebaseVipUser[0]->id,
                            'isSelected' => $guest['isSelected'],
                            'name' => $guest['name'],
                            'unique_id' => $guest['id'],
                            'isBlock' => $guest['isBlock'],
                            'isModerator' => $guest['isModerator'],
                            'sessions' => $guest['sessions'],
                            'pic' => $guest['pic'],
                            'tickets' => $guest['tickets'],
                            'isPaid' => $guest['isPaid'],
                            'token' => $guest['token'],
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()
                        ]);
                    }
                }
            } else {
                /* Insert */
                $Affected = FirebaseVipUsers::create([
                    'unique_id' => $value['id'],
                    'username' => $value['username'],
                    'name' => $value['name'],
                    'ownerId' => $value['ownerId'],
                    'category' => $value['category'],
                    'subcategory' => $value['subcategory'],
                    'type' => $value['type'],
                    'price' => $value['price'],
                    'description' => $value['description'],
                    'thumb' => $value['thumb'],
                    'limit' => $value['limit'],
                    'longitude' => $value['longitude'],
                    'location' => $value['location'],
                    'latitude' => $value['latitude'],
                    'photoUrl' => $value['photoUrl'],
                    'mediaUrl' => $value['mediaUrl'],
                    'time' => $value['time'],
                    'created' => $value['created'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

                if(isset($value['free_pass'])){
                    foreach ($value['free_pass'] as $index1 => $free_pass){
                        FirebaseVipUsersFreePass::create([
                            'firebase_vip_user_id' => $Affected->id,
                            'eventID' => $free_pass['eventID'],
                            'email' => $free_pass['email'],
                            'passport' => $free_pass['passport'],
                            'sessions' => $free_pass['sessions'],
                            'path' => $free_pass['path'],
                            'eventPic' => $free_pass['eventPic'],
                            'isScanned' => $free_pass['isScanned'],
                            'createdTicket' => $free_pass['createdTicket'],
                            'phone' => $free_pass['phone'],
                            'isPaid' => $free_pass['isPaid'],
                            'ticketName' => $free_pass['ticketName'],
                            'isSelected' => $free_pass['isSelected'],
                            'validUntil' => $free_pass['validUntil'],
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()
                        ]);
                    }
                }

                if(isset($value['guests'])){
                    foreach ($value['guests'] as $index1 => $guest){
                        FirebaseVipUsersGuests::create([
                            'firebase_vip_user_id' => $Affected->id,
                            'isSelected' => $guest['isSelected'],
                            'name' => $guest['name'],
                            'unique_id' => $guest['id'],
                            'isBlock' => $guest['isBlock'],
                            'isModerator' => $guest['isModerator'],
                            'sessions' => $guest['sessions'],
                            'pic' => $guest['pic'],
                            'tickets' => $guest['tickets'],
                            'isPaid' => $guest['isPaid'],
                            'token' => $guest['token'],
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