<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pasien;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::create([
            'nama' => 'Budi',
            'umur' => 25,
            'jenis_kelamin' => 'man',
            'pekerjaan' => 'Civil servants',
            'alamat' => 'Jl. Jendral Sudirman No. 1',
            'status' => 'Single',
            'pendidikan' => 'Bachelor',
            
        ]);
    }
}
