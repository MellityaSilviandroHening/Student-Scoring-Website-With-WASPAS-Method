<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'code', 'NISN', 'name', 'gender', 'birthplace and date', 'Umur (Tahun)',
        'Afirmasi (Perpindahan Orang Tua)', 'Potensi Kecerdasan',
        'Penghasilan Orang Tua (Rupiah)', 'Kemampuan Komunikasi',
        'Ketaatan Beragama', 'Prestasi', 'Kedisiplinan', 'Kepedulian', 'Jarak',

    ];
}
