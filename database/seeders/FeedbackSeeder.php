<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'full_name' => Factory::create()->userName,
            'email' => Factory::create()->email,
            'message' => Factory::create()->text,
            'status' => 1,
        ];
        Feedback::query()->create($data);
    }
}
