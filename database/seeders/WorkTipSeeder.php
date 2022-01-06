<?php

namespace Database\Seeders;

use App\Models\Work_tip;
use Faker\Factory;
use Illuminate\Database\Seeder;

class WorkTipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Photo'],
            ['name' => 'Video'],
            ['name' => 'Music'],
            ['name' => 'Design'],
        ];
        foreach ($data as $datum)
        Work_tip::query()->create($datum);
    }
}
