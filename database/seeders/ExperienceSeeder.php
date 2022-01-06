<?php

namespace Database\Seeders;

use App\Models\Experience;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'from' => Factory::create()->year(),
            'to' => Factory::create()->year,
            'job_title' => Factory::create()->jobTitle,
            'company_name' => Factory::create()->company,
            'about' => Factory::create()->text()
        ];
        Experience::query()->create($data);
    }
}
