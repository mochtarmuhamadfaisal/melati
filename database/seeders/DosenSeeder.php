<?php

namespace Database\Seeders;

use App\Models\Dosen;
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
        $dosen3=Dosen::create([
            'nama' => 'Mochtar Muhammad Faisal',
            'nip' => '9079687564565879',
            'jeniskelamin' => 'Laki-laki',
            'password' => bcrypt('1'),
        ]);
        $dosen3->assignRole('dosen');

        $dosen2=Dosen::create([
            'nama' => 'Faisal',
            'nip' => '1',
            'jeniskelamin' => 'Laki-laki',
            'password' => bcrypt('1'),
        ]);
        $dosen2->assignRole('dosen');
    }
}
