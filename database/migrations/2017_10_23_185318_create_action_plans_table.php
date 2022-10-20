<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cell_id')->unsigned()->index();
            $table->foreign('cell_id')->references('id')->on('cells')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('plan_url');
            $table->string('year', 10)->default(date("Y"));
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
        Schema::dropIfExists('action_plans');
    }
}
