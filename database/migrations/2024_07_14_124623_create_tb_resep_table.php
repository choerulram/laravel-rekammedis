<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_resep', function (Blueprint $table) {
            $table->id('id_resep');
            $table->unsignedBigInteger('id_rekam');
            $table->unsignedBigInteger('id_obat');
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('id_rekam')->references('id_rekam')->on('tb_rekam_medis')->onDelete('cascade');
            $table->foreign('id_obat')->references('id_obat')->on('tb_obat')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_resep');
    }
};
