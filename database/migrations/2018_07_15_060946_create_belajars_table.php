<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatebelajarsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belajars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pengangguran_id')->unsigned();
            $table->integer('pengajar_id')->unsigned();
            $table->text('alamat_tempat_belajar');
            $table->string('hari', 25);
            $table->string('pukul', 25);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('pengangguran_id')->references('id')->on('penganggurans');
            $table->foreign('pengajar_id')->references('id')->on('pengajars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('belajars');
    }
}
