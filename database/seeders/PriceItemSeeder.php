<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\PriceItem;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PriceItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = Price::query()->get();
        foreach ($prices as $price) {
            for ($i = 0; $i < rand(4, 6); $i++) {
                PriceItem::query()->create([
                    'price_id' => $price->id,
                    'name' => Factory::create()->jobTitle,
                    'is_include' => true,
                ]);
            }
        }

    }
}
