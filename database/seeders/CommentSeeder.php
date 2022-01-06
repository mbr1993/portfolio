<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Comment;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = Blog::all();
        foreach ($comments as $comment) {
            Comment::query()->create([
                'blog_id' => $comment->id,
                'full_name' => Factory::create()->userName,
                'description' => Factory::create()->text,
                'logo' => Factory::create()->imageUrl
            ]);

        }

    }
}
