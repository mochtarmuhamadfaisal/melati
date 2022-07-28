<?php

namespace Database\Seeders;

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
        DB::table('dosens')->insert([
            'nama' => 'Mochtar Muhammad Faisal',
            'nip' => '9079687564565879',
            'jeniskelamin' => 'Laki-laki',
        ]);
    }
}
