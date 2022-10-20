<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConclusionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conclusions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id')->unsigned()->index();
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('CASCADE');
            $table->text('conclusion_text');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->softDeletes();
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
        Schema::dropIfExists('conclusions');
    }
}
