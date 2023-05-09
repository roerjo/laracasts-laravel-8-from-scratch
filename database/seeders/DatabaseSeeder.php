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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

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

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My First Personal',
            'slug' => 'my-first-personal',
            'excerpt' => 'Lorum ipsum sit met.',
            'body' => 'Lorum ipsum sit met. Lorum ipsum sit met.Lorum ipsum sit met.',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My First Work',
            'slug' => 'my-first-work',
            'excerpt' => 'Lorum ipsum sit met.',
            'body' => 'Lorum ipsum sit met. Lorum ipsum sit met.Lorum ipsum sit met.',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My First Family',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorum ipsum sit met.',
            'body' => 'Lorum ipsum sit met. Lorum ipsum sit met.Lorum ipsum sit met.',
        ]);
    }
}
