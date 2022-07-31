<?php

namespace Database\Seeders;

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
        DB::table('mahasiswas')->insert([
            'nama' => 'Mochtar Muhammad Faisal',
            'nim' => '9079687564565879',
            'jeniskelamin' => 'Laki-laki',
        ]);
    }
}
