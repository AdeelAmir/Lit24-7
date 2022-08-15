<?php

namespace App\Http\Controllers;


class FirebaseController extends Controller
{
    protected $database;

    public function __construct()
    {
        $this->database = app('firebase.auth');
    }

    public function getallusers()
    {
      $allusers = array();
        $users =  $this->database->listUsers();
        foreach ($users as $user) {
          $allusers[] = $user->providerData;
      }
      return $allusers;
    }


}

