<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator Perpustakaan',
            'email' => 'admin.perpustakaan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
            'is_admin' => 1,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Deuwi Satriya Irawan',
            'email' => 'satriai418@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel08'),
            'is_admin' => 0,
            'remember_token' => Str::random(10),
        ]);

        User::factory(4)->create();
    }
}
