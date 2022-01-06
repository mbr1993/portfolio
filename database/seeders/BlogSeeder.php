<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogTip;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        ================================================
        $tips = BlogTip::all();
        foreach ($tips as $tip) {
            Blog::query()->create([
                'blog_tip_id' => $tip->id,
                'date' => date('Y-m-d'),
                'photo' => Factory::create()->imageUrl(),
                'title' => Factory::create()->text(150),
                'content' => Factory::create()->realText()
            ]);
        }
//        ================================================
        for ($i = 0; $i < rand(4, 6); $i++) {
            $tip = BlogTip::query()->inRandomOrder()->first();
            Blog::query()->create([
                'blog_tip_id' => $tip->id,
                'date' => Factory::create()->date(),
                'photo' => Factory::create()->imageUrl(),
                'title' => Factory::create()->text(100),
                'content' => Factory::create()->realText()
            ]);
        }
    }
}
