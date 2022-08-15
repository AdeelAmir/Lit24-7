<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirebaseVipUsersGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firebase_vip_users_guests', function (Blueprint $table) {
            $table->id();
            $table->integer('firebase_vip_user_id');
            $table->string('isSelected')->nullable();
            $table->string('name')->nullable();
            $table->string('unique_id')->nullable();
            $table->string('isBlock')->nullable();
            $table->string('isModerator')->nullable();
            $table->string('sessions')->nullable();
            $table->text('pic')->nullable();
            $table->string('tickets')->nullable();
            $table->string('isPaid')->nullable();
            $table->string('token')->nullable();
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
        Schema::dropIfExists('firebase_vip_users_guests');
    }
}