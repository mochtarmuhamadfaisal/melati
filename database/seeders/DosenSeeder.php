<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosen3=User::create([
            'nama' => 'Mochtar Muhammad Faisal',
            'username' => '9079687564565879',
            'jenis_kelamin' => 'Laki-laki',
            'password' => bcrypt('12345678'),
            'role_id' => 2,
        ]);

        // $dosen2=Dosen::create([
        //     'nama' => 'Faisal',
        //     'nip' => '1',
        //     'jeniskelamin' => 'Laki-laki',
        //     'password' => bcrypt('1'),
        // ]);
        // $dosen2->assignRole('dosen');
    }
}
