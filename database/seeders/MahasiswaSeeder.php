<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
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
        $mahasiswa = User::create([
            'nama' => 'Mochtar Muhammad Faisal',
            'username' => '3201916018',
            'jenis_kelamin' => 'Laki-laki',
            'password' => bcrypt('12345678'),
            'role_id' => 3,
        ]);

        // $mahasiswa->assignRole('mahasiswa');

    }
}
