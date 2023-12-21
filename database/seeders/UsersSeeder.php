<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mellitya Silviandro Hening',
            'email' => 'tya@admin.com',
            'alamat' => 'Jl Bunga Pinang Merah',
            'no_telp' => '1081230917607',
            'password' => Hash::make('bismillah'),
            'role' => 'admin',
            'tanggal_daftar' => Carbon::now(),
        ]);
        // Tambahkan data dummy lainnya sesuai kebutuhan
    }
}

