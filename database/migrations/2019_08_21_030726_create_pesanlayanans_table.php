<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesanlayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanlayanans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_layanan');
            $table->string('nama_alat');
            $table->string('nama_pesanan');
            //$table->unsignedString('nama_pendaftar_pesanan');
            //$table->foreign('nama_pendaftar_pesanan')->references('nama_pendaftar')->on('pendaftarlayanans')->onDelete('cascade');
            $table->string('ongkir')
            $table->string('model_warna');
            $table->string('bahan');
            $table->string('ukuran');
            $table->string('gram');
            $table->string('cast');
            $table->string('biaya');
            $table->string('tanggal_mulai');
            $table->string('tanggal_selesai');
            $table->string('upload_gambar');
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
        Schema::dropIfExists('pesanlayanans');
        $table->dropForeign(['nama_pendaftar_pesanan']);
    }
}
