<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin=User::create([
            'name'=>'Petugas',
            'level'=>'petugas',
            'email'=>'petugas@gmail.com',
            'password'=>bcrypt('12345678'),
            'remember_token'=>Str::random(60),
           ]);
    }
}
