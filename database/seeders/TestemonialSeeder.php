<?php

namespace Database\Seeders;

use App\Models\Testemonial;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TestemonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'full-name' => Factory::create()->userName,
            'job_title' => Factory::create()->jobTitle,
            'logo' => Factory::create()->imageUrl,
            'quote'=> Factory::create()->text(300),
           ];
        Testemonial::query()->create($data);
    }
}
