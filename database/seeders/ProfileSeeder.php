<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            'title' => 'Segita Premium',
            'category_id' => '2',
            'user_id' => '1',
            'slug' => 'Segita-Premium',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
            'biografi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure animi illo sunt, corporis natus, nesciunt corrupti facere laborum dolorum aperiam ducimus a quisquam impedit! Illum facere ullam tempora dicta necessitatibus maxime earum perspiciatis iure veritatis id quis dignissimos</p> 
                           <p> architecto unde tenetur aliquam blanditiis minima nisi libero molestiae expedita quas est sint. Error sequi tempora iusto quidem hic! Non tempore, ea quis ipsam deserunt libero provident consectetur inventore temporibus, aliquid eveniet. Rem, possimus! Soluta sed ipsam architecto sint dolore, minus nostrum corporis fugiat ea! Officia fugit ut assumenda soluta vero repudiandae quae mollitia. Possimus deserunt odit accusantium, alias at commodi id.</p>'
        ]);
        DB::table('profiles')->insert([
            'title' => 'PASMINAH CRINKLE',
            'category_id' => '2',
            'user_id' => '1',
            'slug' => 'PASMINAH-CRINKLE',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
            'biografi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure animi illo sunt, corporis natus, nesciunt corrupti facere laborum dolorum aperiam ducimus a quisquam impedit! Illum facere ullam tempora dicta necessitatibus maxime earum perspiciatis iure veritatis id quis dignissimos</p> 
                           <p> architecto unde tenetur aliquam blanditiis minima nisi libero molestiae expedita quas est sint. Error sequi tempora iusto quidem hic! Non tempore, ea quis ipsam deserunt libero provident consectetur inventore temporibus, aliquid eveniet. Rem, possimus! Soluta sed ipsam architecto sint dolore, minus nostrum corporis fugiat ea! Officia fugit ut assumenda soluta vero repudiandae quae mollitia. Possimus deserunt odit accusantium, alias at commodi id.</p>'
        ]);
        DB::table('profiles')->insert([
            'title' => 'Jilbab segi empat',
            'category_id' => '1',
            'user_id' => '1',
            'slug' => 'jilbab-segi-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
            'biografi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure animi illo sunt, corporis natus, nesciunt corrupti facere laborum dolorum aperiam ducimus a quisquam impedit! Illum facere ullam tempora dicta necessitatibus maxime earum perspiciatis iure veritatis id quis dignissimos</p> 
                           <p> architecto unde tenetur aliquam blanditiis minima nisi libero molestiae expedita quas est sint. Error sequi tempora iusto quidem hic! Non tempore, ea quis ipsam deserunt libero provident consectetur inventore temporibus, aliquid eveniet. Rem, possimus! Soluta sed ipsam architecto sint dolore, minus nostrum corporis fugiat ea! Officia fugit ut assumenda soluta vero repudiandae quae mollitia. Possimus deserunt odit accusantium, alias at commodi id.</p>'
        ]);
        DB::table('profiles')->insert([
            'title' => 'jilbab pasminah',
            'category_id' => '3',
            'user_id' => '1',
            'slug' => 'Jilbab-Pasminah',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
            'biografi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure animi illo sunt, corporis natus, nesciunt corrupti facere laborum dolorum aperiam ducimus a quisquam impedit! Illum facere ullam tempora dicta necessitatibus maxime earum perspiciatis iure veritatis id quis dignissimos</p> 
                           <p> architecto unde tenetur aliquam blanditiis minima nisi libero molestiae expedita quas est sint. Error sequi tempora iusto quidem hic! Non tempore, ea quis ipsam deserunt libero provident consectetur inventore temporibus, aliquid eveniet. Rem, possimus! Soluta sed ipsam architecto sint dolore, minus nostrum corporis fugiat ea! Officia fugit ut assumenda soluta vero repudiandae quae mollitia. Possimus deserunt odit accusantium, alias at commodi id.</p>'
        ]);
    }
}
