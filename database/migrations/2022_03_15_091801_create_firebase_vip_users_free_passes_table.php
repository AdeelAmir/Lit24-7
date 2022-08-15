<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirebaseVipUsersFreePassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firebase_vip_users_free_passes', function (Blueprint $table) {
            $table->id();
            $table->integer('firebase_vip_user_id');
            $table->string('eventID')->nullable();
            $table->string('email')->nullable();
            $table->string('passport')->nullable();
            $table->string('sessions')->nullable();
            $table->text('path')->nullable();
            $table->text('eventPic')->nullable();
            $table->string('isScanned')->nullable();
            $table->string('createdTicket')->nullable();
            $table->string('phone')->nullable();
            $table->string('isPaid')->nullable();
            $table->string('ticketName')->nullable();
            $table->string('isSelected')->nullable();
            $table->string('validUntil')->nullable();
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
        Schema::dropIfExists('firebase_vip_users_free_passes');
    }
}