<?php

namespace Database\Seeders;

use App\Models\Work;
use App\Models\Work_tip;
use Faker\Factory;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $works = Work_tip::all();
        foreach ($works as $work) {
            Work::query()->create([
                'work_tip_id' => $work->id,
                'name' => Factory::create()->text(15),
                'image' => Factory::create()->imageUrl
            ]);
        }
    }
}
