<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_rekam_medis', function (Blueprint $table) {
            $table->id('id_rekam');
            $table->unsignedBigInteger('id_pasien');
            $table->text('keluhan');
            $table->text('diagnosa')->nullable();
            $table->date('tanggal');
            $table->unsignedBigInteger('id_dokter');
            $table->enum('status', ['pendaftaran', 'pemeriksaan', 'selesai']);
            $table->timestamps();

            $table->foreign('id_pasien')->references('id_pasien')->on('tb_pasien')->onDelete('cascade');
            $table->foreign('id_dokter')->references('id_dokter')->on('tb_dokter')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_rekam_medis');
    }
};
