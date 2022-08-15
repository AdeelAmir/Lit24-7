<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirebaseUserTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firebase_user_tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('firebase_user_id');
            $table->string('name');
            $table->string('is_paid');
            $table->string('isSelected');
            $table->string('isScanned');
            $table->text('path');
            $table->string('firebase_created_at');
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
        Schema::dropIfExists('firebase_user_tickets');
    }
}