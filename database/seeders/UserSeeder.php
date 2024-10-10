<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>"Admin user",
            'email'=>"admin@gmail.com",
            'password'=>Hash::make('password'),
            'role'=>"admin",

        ]);


        // for user
        User::create([
            'name'=>"user",
            'email'=>"user@gmail.com",
            'password'=>Hash::make('password'),
            'role'=>"user",

        ]);
    }
}
