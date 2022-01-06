<?php

namespace Database\Seeders;

use App\Models\Education;
use Faker\Factory;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'from' => Factory::create()->year,
            'to' => Factory::create()->year,
            'name' => Factory::create()->jobTitle,
            'country' => Factory::create()->country,
            'about' => Factory::create()->text(),
        ];
        Education::query()->create($data);
    }
}
