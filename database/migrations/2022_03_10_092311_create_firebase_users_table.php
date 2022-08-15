<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirebaseUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firebase_users', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->nullable();
            $table->string('username')->nullable();
            $table->string('displayName')->nullable();
            $table->string('gender')->nullable();
            $table->string('cityValue')->nullable();
            $table->string('countryValue')->nullable();
            $table->text('location')->nullable();
            $table->string('myLatitude')->nullable();
            $table->string('myLongitude')->nullable();
            $table->text('photoUrl')->nullable();
            $table->string('stateValue')->nullable();
            $table->text('token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firebase_users');
    }
}