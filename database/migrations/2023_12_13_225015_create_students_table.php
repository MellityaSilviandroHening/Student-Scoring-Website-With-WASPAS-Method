<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('NISN');
            $table->string('name');
            $table->string('gender');
            $table->string('birthplace_and_date');
            $table->integer('Umur_Tahun');
            $table->integer('Afirmasi_Perpindahan_Orang_Tua');
            $table->integer('Potensi_Kecerdasan');
            $table->integer('Penghasilan_Orang_Tua_Rupiah');
            $table->integer('Kemampuan_Komunikasi');
            $table->integer('Ketaatan_Beragama');
            $table->integer('Prestasi');
            $table->integer('Kedisiplinan');
            $table->integer('Kepedulian');
            $table->integer('Jarak');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
};
