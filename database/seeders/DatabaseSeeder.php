<?php

namespace Database\Seeders;

use App\Models\SkillCategory;
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
        $this->call(BlogTipSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SocialSeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(PriceItemSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(FactSeeder::class);
        $this->call(TestemonialSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(WorkTipSeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(SkillCategorySeeder::class);
        $this->call(SkillCategoryItemSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(FeedbackSeeder::class);
    }
}
