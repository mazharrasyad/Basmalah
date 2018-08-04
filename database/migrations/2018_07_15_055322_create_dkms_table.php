<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatedkmsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dkms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap', 100);
            $table->text('alamat');
            $table->string('no_handphone', 15);
            $table->string('email', 40);
            $table->string('nama_masjid', 50);
            $table->text('alamat_masjid');
            $table->string('jabatan_di_masjid', 50);
            $table->string('no_rekening_masjid', 100);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dkms');
    }
}
