<?php

namespace Database\Seeders;

use App\Models\Service;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'title' => Factory::create()->jobTitle,
            'description' => Factory::create()->text,
            'logo' => Factory::create()->imageUrl,
        ];
        Service::query()->create($data);
    }
}
