<?php

namespace Database\Seeders;

use App\Models\Social;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'name' => 'GitHub',
                'link' => 'github.com',
                'icon' => Factory::create()->imageUrl,
            ],
            [
                'name' => 'YouTube',
                'link' => 'youtube.com',
                'icon' => Factory::create()->imageUrl,
            ],
            [
                'name' => 'Facebook',
                'link' => 'facebook.com',
                'icon' => Factory::create()->imageUrl,
            ],
            [
                'name' => 'Twitter',
                'link' => 'twitter.com',
                'icon' => Factory::create()->imageUrl,
            ],
        ];
        foreach ($data as $datum)
            Social::query()->create($datum);
    }
}
