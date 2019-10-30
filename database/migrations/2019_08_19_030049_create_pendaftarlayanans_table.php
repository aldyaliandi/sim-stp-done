<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftarlayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarlayanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pendaftar',100);
            $table->string('nip',100);
            $table->string('nohp',100);
            $table->string('pekerjaan',100);
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
        Schema::dropIfExists('pendaftarlayanans');
    }
}
