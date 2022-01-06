<?php

namespace Database\Seeders;

use App\Models\SkillCategory;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SkillCategorySeeder extends Seeder
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
                'name' => 'Design',
                'icon' => Factory::create()->imageUrl,
                'type' => 'line'
            ],
            [
                'name' => 'Languages',
                'icon' => Factory::create()->imageUrl,
                'type' => 'dot'
            ],
            [
                'name' => 'Coding',
                'icon' => Factory::create()->imageUrl,
                'type' => 'pie'

            ],
            [
                'name' => 'Knowledge',
                'icon' => Factory::create()->imageUrl,
                'type' => 'list'
            ],
        ];
        foreach ($data as $datum)
            SkillCategory::query()->create($datum);
    }
}
