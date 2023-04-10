<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Post 1',
            'slug' => 'post-1',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel ultricies lacinia, nisl nisl alique',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel ultricies lacinia, nisl nisl aliquam nunc, nec aliquam ma',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Post 2',
            'slug' => 'post-2',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel ultricies lacinia, nisl nisl alique',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel ultricies lacinia, nisl nisl aliquam nunc, nec aliquam ma',
            'category_id' => 2 ,
            'user_id' => 1,
        ]);

         Category::create([
            'name' => 'Category 1',
            'slug' => 'category-1',
         ]);


         Category::create([
            'name' => 'Category 2',
            'slug' => 'category-2',
         ]);

            User::create([
                'name' => 'User 1',
                'email' => 'asdnas@gmail.com',
                'password' => bcrypt('password'),
            ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
