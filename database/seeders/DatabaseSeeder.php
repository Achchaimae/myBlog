<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blogs;
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
        // \App\Models\User::factory(2)->create();

        Blogs::factory(5)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Blogs::create(
        //     [
        //         'title' => 'Test Blog',
        //         'content' => 'Test Content efhamrhgahga',
        //         'tags' => 'Test Tags',
        //         'category' => 'Test Category',
        //         'comments' => 'Test Comments',
        //     ]);
        // Blogs::create(
        //     [
        //         'title' => 'Test Blog 2',
        //         'content' => 'Test Content 2',
        //         'tags' => 'Test Tags 2',
        //         'category' => 'Test Category 2',
        //         'comments' => 'Test Comments 2'
        //     ]
        
        // );
        // Blogs::create(
        //     [
        //         'title' => 'Test Blog 3',
        //         'content' => 'Test Content 3',
        //         'tags' => 'Test Tags 3',
        //         'category' => 'Test Category 3',
        //         'comments' => 'Test Comments 3'
        //     ]
        
        // );
        // Blogs::create(
        //     [
        //         'title' => 'Test Blog 4',
        //         'content' => 'Test Content 4',
        //         'tags' => 'Test Tags 4',
        //         'category' => 'Test Category 4',
        //         'comments' => 'Test Comments 4'
        //     ]
        
        // );
        // Blogs::create(
        //     [
        //         'title' => 'Test Blog 5',
        //         'content' => 'Test Content 5',
        //         'tags' => 'Test Tags 5',
        //         'category' => 'Test Category 5',
        //         'comments' => 'Test Comments 5'
        //     ]
        
        // );
    }
}
