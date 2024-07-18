<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Cek apakah username 'vanisa' sudah ada
        $existingUser = DB::table('users')->where('username', 'vanisa')->first();

        // Jika tidak ada, baru masukkan data
        if (!$existingUser) {
            DB::table('users')->insert([
                'username' => 'vanisa',
                'name' => 'indri',
                'email' => 'izsaa@gmail.com',
                'password' => Hash::make('12345678')
            ]);
        }
    }
}
