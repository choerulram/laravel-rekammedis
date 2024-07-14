<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_dokter', function (Blueprint $table) {
            $table->id('id_dokter');
            $table->string('nama', 100);
            $table->string('jk', 20);
            $table->string('spesialis', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_dokter');
    }
};
