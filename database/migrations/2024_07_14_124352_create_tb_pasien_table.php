<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_pasien', function (Blueprint $table) {
            $table->id('id_pasien');
            $table->string('no_kartu', 100);
            $table->string('nama', 100);
            $table->string('jk', 20);
            $table->integer('umur');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_pasien');
    }
};
