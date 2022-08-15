<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirebaseVipUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firebase_vip_users', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->nullable();
            $table->string('username')->nullable();
            $table->string('name')->nullable();
            $table->string('ownerId')->nullable();
            $table->string('category')->nullable();
            $table->text('subcategory')->nullable();
            $table->string('type')->nullable();
            $table->string('price')->nullable();
            $table->text('description')->nullable();
            $table->string('thumb')->nullable();
            $table->string('limit')->nullable();
            $table->string('longitude')->nullable();
            $table->string('location')->nullable();
            $table->string('latitude')->nullable();
            $table->text('photoUrl')->nullable();
            $table->text('mediaUrl')->nullable();
            $table->string('time')->nullable();
            $table->string('created')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firebase_vip_users');
    }
}