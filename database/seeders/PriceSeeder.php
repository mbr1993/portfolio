<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\Social;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
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
                'name' => 'Basic',
                'price' => 22,
            ],
            [
                'name' => 'Pro',
                'price' => 48,
            ],
        ];
        foreach ($data as $datum)
            Price::query()->create($datum);
    }
}
