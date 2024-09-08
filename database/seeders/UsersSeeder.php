<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('senha123'),
        ]);

        User::Factory(5)->create();
    }
}
