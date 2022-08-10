<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
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
        $admin=User::create([
            'username' => 'Faisal',
            'nama' => 'Faisal',
            'jenis_kelamin' => 'Laki-laki',
            'password' => bcrypt('12345678'),
            'role_id' => 1,
        ]);
        // $admin->assignRole('admin');
    }
}
