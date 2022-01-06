<?php

namespace Database\Seeders;

use App\Models\Fact;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'icon' => Factory::create()->image,
            'title' => Factory::create()->text(15),
        ];
        Fact::query()->create($data);
    }
}
