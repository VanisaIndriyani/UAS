<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homees')->insert([
            'name' => 'Vanisa',
            'description' => 'Description of Get online and grow fast',
        ]);
    }
}
