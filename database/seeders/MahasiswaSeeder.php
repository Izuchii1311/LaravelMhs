<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeder Database Mahasiswa
        DB::table('mahasiswas')->insert([
            'nama'          => 'Luthfi Nur Ramadhan',
            'npm'           => '2142430',
            'jurusan'       => 'Teknik Informatika',
            'jeniskelamin'  => 'Laki - Laki',
            'telp'          => '85722584409'
        ]);
    }
}
