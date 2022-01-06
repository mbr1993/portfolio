<?php

namespace Database\Seeders;

use App\Models\SkillCategory;
use App\Models\SkillCategoryItem;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkillCategoryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = SkillCategory::all();
        foreach ($skills as $skill) {
            SkillCategoryItem::query()->create([
                'skill_category_id' => $skill->id,
                'name' => Factory::create()->jobTitle,
            ]);
        }
    }
}
