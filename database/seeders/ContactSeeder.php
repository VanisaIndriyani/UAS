<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use App\Models\User; // Sesuaikan jika diperlukan

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh menggunakan User ID statis
        $user = User::first(); // Ganti dengan cara mendapatkan user yang sesuai

        Contact::create([
            'user_id' => 1,
            'name' => 'vanisa',
            'email' => 'vanisa@gmail.com',
            'phone_number' => '123456789',
            'message' => 'Hallo ini vanisa ',
        ]);

        // Tambahkan lebih banyak data jika diperlukan
    }
}
