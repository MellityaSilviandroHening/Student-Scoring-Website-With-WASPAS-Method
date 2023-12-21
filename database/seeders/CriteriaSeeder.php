<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Criteria;

class CriteriaSeeder extends Seeder
{
    public function run()
    {
        $criteriaData = [
            [

                'code' => 'C1',
                'name' => 'Umur_Tahun',
                'category' => 'Benefit',
                'weight' => 0.1,
            ],
            [
                'code' => 'C2',
                'name' => 'Afirmasi_Perpindahan_Orang_Tua',
                'category' => 'Benefit',
                'weight' => 0.1,
            ],
            [
                'code' => 'C3',
                'name' => 'Potensi_Kecerdasan',
                'category' => 'Benefit',
                'weight' => 0.15,
            ],
            [
                'code' => 'C4',
                'name' => 'Penghasilan_Orang_Tua_Rupiah',
                'category' => 'Benefit',
                'weight' => 0.1,
            ],
            [
                'code' => 'C5',
                'name' => 'Kemampuan_Komunikasi',
                'category' => 'Benefit',
                'weight' => 0.1,
            ],
            [
                'code' => 'C6',
                'name' => 'Ketaatan_Beragama',
                'category' => 'Benefit',
                'weight' => 0.05,
            ],
            [
                'code' => 'C7',
                'name' => 'Prestasi',
                'category' => 'Benefit',
                'weight' => 0.1,
            ],
            [
                'code' => 'C8',
                'name' => 'Kedisiplinan',
                'category' => 'Benefit',
                'weight' => 0.05,
            ],
            [
                'code' => 'C9',
                'name' => 'Kepedulian',
                'category' => 'Benefit',
                'weight' => 0.05,
            ],
            [
                'code' => 'C10',
                'name' => 'Jarak',
                'category' => 'Cost',
                'weight' => 0.2,
            ],
        ];

        // Masukkan data ke dalam tabel menggunakan metode create dari Eloquent
        foreach ($criteriaData as $data) {
            Criteria::create($data);
        }
    }
}
