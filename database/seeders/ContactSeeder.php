<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => 'Vanisa',
            'user_id' => 1,
            'email' => 'Vanisaindri@gmail.com',
            'phonenumber' => '085809134960',
        ]);
    }
}
