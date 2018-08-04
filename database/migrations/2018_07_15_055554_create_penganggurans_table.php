<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatepengangguransTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penganggurans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap', 100);
            $table->string('agama', 25);
            $table->string('jenis_kelamin', 6);
            $table->text('alamat');
            $table->string('pendidikan_terakhir', 50);
            $table->string('peminatan', 50);
            $table->string('lama_menganggur', 25);
            $table->string('jumlah_orang_tanggungan', 3);
            $table->string('status', 50);
            $table->integer('dkm_id')->unsigned();
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
        Schema::drop('penganggurans');
    }
}
