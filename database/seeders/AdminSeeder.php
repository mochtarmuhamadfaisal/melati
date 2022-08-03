<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=Admin::create([
            'nama' => 'bayu',
            'nip' => '1111111111',
            'jeniskelamin' => 'Laki-laki',
            'password' => bcrypt('1'),
        ]);
        $admin->assignRole('admin');
    }
}
