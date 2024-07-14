<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_user', function (Blueprint $table) {
            $table->string('username', 100)->primary();
            $table->string('password', 100);
            $table->string('level', 15);
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->unsignedBigInteger('id_dokter')->nullable();
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('tb_admin')->onDelete('set null');
            $table->foreign('id_dokter')->references('id_dokter')->on('tb_dokter')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_user');
    }
};
