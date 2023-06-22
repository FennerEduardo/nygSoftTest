<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Fenner Eduardo',
            'email' => 'admin@fennereduardo.com',
            'password' => Hash::make('TestNyGSoft2023*'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::factory()->count(5)->create();
    }
}
