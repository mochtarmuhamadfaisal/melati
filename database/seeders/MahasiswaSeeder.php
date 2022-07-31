<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
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
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Mochtar Muhammad Faisal',
            'nip' => '3201916018',
            'jeniskelamin' => 'Laki-laki',
            'password' => bcrypt('1'),
        ]);

        $mahasiswa->assignRole('mahasiswa');
    }
}
