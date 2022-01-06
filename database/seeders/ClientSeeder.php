<?php

namespace Database\Seeders;

use App\Models\Client;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
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
                'logo' => Factory::create()->imageUrl,
                'name' => Factory::create()->company,
            ],
            [
                'logo' => Factory::create()->imageUrl,
                'name' => Factory::create()->company,
            ],
            [
                'logo' => Factory::create()->imageUrl,
                'name' => Factory::create()->company,
            ],
            [
                'logo' => Factory::create()->imageUrl,
                'name' => Factory::create()->company,
            ],
        ];
        foreach ($data as $datum)
        Client::query()->create($datum);
    }
}
