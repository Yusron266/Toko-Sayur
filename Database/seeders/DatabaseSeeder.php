<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create([
          'password' => bcrypt('1234567')
        ]);
        
        User::create([
          'name' => 'Moch Yusron',
          'username' => 'yusron',
          'email' => 'yusron@gmail.com',
         'password' => bcrypt('12345')
         ]);
          
//User::create([
          //'name' => 'Dody irawan',
         // 'email' => 'dody@gmail.com',
          //'password' => bcrypt('12345')
         // ]);
          
         Category::create([
          'name' => 'Sayur Daun',
          'slug' => 'sayur-daun'
          ]);
          
         Category::create([
          'name' => 'Sayur Batang',
          'slug' => 'sayur-batang'
          ]);
          
          Category::create([
            'name' => 'Sayur Bunga',
            'slug' => 'sayur-bunga'
            ]);
            
            Post::factory(4)->create();
            
          //  Post::create([
        //  'title' => 'Judul Pertama',
          //   'slug' => 'judul-pertama',
          //   'excerpt' => 'Di baca ya bestie',
             // 'body' => '<p>Halo dunia</p><p>Halo juga kamu yang di sana</p>',
              
             // 'category_id' => 1,
         // 'user_id' => 1
              
             // ]);
              

    }
}
