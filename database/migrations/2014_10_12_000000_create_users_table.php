<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('cell_id')->unsigned()->index();
            $table->foreign('cell_id')->references('id')->on('cells')->onDelete('CASCADE');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email', 200);
            $table->string('phone_number', 20);
            $table->string('user_type', 20)->default('citizen');
            $table->string('password');
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
