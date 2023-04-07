<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('title');
            $table->longText('description');
            $table->longText('about_instructor');
            $table->double('discount_price',10,2);
            $table->double('actual_price',10,2);
            $table->string('playlist_url');
            $table->integer('view_count');
            $table->integer('subscriber_count');
            $table->integer('status')->default(0); // live:1 , not live =0 
            $table->string('photo')->nullable;
            $table->softDeletes();// delete_at

            $table->timestamps(); // created_at modified_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}