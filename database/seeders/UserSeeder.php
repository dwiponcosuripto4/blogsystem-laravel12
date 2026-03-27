<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Dwiponco Suripto',
            'username' => 'dwiponco',
            'email' => 'dwiponco@example.com',
            'password' => Hash::make('password123'),
        ]);
        User::factory(5)->create();
    }
}
