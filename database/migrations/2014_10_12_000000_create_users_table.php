<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Email')->unique();
            $table->string('First_Name')->nullable();
            $table->string('Last_Name')->nullable();
            $table->string('Gender')->nullable()->default('mail');
            $table->string('Date-Of-Birth')->nullable();
            $table->tinyinteger('Is-Subscribed')->nullable()->default(0);
            $table->timestamp('Email_verified_at')->nullable();   
            $table->string('Password');
            $table->integer('view_count')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}