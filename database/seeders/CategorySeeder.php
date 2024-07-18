<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Pashmina',
            'description' => 'Jilbab pashmina dengan bahan lembut dan nyaman.',
            'image_url' => 'url/to/image1.jpg',
            'slug' => 'pashmina',
            'user_id'=>1,
            
        ]);

        Category::create([
            'name' => 'Segi Empat',
            'description' => 'Jilbab segi empat yang stylish dan modern.',
            'image_url' => 'url/to/image2.jpg',
            'slug' => 'segi empat',
            'user_id'=>2,
        ]);

        Category::create([
            'name' => 'Instan',
            'description' => 'Jilbab instan yang praktis dan mudah digunakan.',
            'image_url' => 'url/to/image3.jpg',
            'slug' => 'instan',
            'user_id'=>3,
        ]);
        Category::factory()->count(5)->create(['user_id' => 1]);
    }
}
