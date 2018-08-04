<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatedonasisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_handphone', 15);
            $table->string('email', 40);
            $table->integer('dkm_id')->unsigned();
            $table->string('nominal', 50);
            $table->text('pesan');
            $table->string('transfer_bank', 40);
            $table->string('status', 50);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('dkm_id')->references('id')->on('dkms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('donasis');
    }
}
