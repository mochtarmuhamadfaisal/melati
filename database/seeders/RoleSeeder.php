<?php

namespace Database\Seeders;

use App\Models\RoleApp;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleApp::create([
            'name' => 'admin'
        ]);

        RoleApp::create([
            'name' => 'dosen'
        ]);

        RoleApp::create([
            'name' => 'mahasiswa'
        ]);
    }
}
