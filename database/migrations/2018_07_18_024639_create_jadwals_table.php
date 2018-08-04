<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatejadwalsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pengangguran_id')->unsigned();
            $table->integer('belajar_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('pengangguran_id')->references('id')->on('penganggurans');
            $table->foreign('belajar_id')->references('id')->on('belajars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jadwals');
    }
}
