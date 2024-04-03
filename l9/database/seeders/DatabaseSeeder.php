<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        User::factory()->create([
            'username' => 'volkanico',
            'name' => 'volkanico',
            'email' => 'volkan@g.com',
            'password' => 'volkanico',
            'is_admin' => false

        ]);

        User::factory()->create([
            'username' => 'volkanic',
            'name' => 'volkanic',
            'email' => 'v@g.com',
            'password' => 'volkanico',
            'is_admin' => true

        ]);
       /* Post::factory(5)->create([
            'user_id'=>$user->id
        ]);*/

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);
/*
        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title'=>'My happy family post',
            'slug'=>'my-family-post',
            'excerpt'=>'<p>Lorem ipsum dolar sit amete</p>',
            'body'=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi viverra vehicula nisl eget blandit. Mauris hendrerit accumsan</p>'

        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title'=>'My happy work post',
            'slug'=>'my-work-post',
            'excerpt'=>'<p>Lorem ipsum dolar sit amete</p>',
            'body'=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi viverra vehicula nisl eget blandit. Mauris hendrerit accumsan</p>'

        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title'=>'My happy personal post',
            'slug'=>'my-personal-post',
            'excerpt'=>'<p>Lorem ipsum dolar sit amete</p>',
            'body'=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi viverra vehicula nisl eget blandit. Mauris hendrerit accumsan</p>'

        ]);
*/


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
