<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use App\Models\users;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // users::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $resultUsers = new users();
        $resultUsers->CreateUsers([
            'username' => 'vevisurati',
            'password' => bcrypt('vevi'),
        ]);


        $resultGuru = new Guru();
        $resultGuru->CreateGuru([
            'nama' => 'Vevi Surati',
            'nip' => '210402129',
            'bidang_studi' => 'Matematika',
            'users_id' => 1
        ]);
    }
}