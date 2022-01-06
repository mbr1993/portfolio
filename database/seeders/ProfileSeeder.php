<?php

namespace Database\Seeders;

use App\Models\Profile;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
//            'user_id' => null,
            'job' => Factory::create()->jobTitle,
            'about_user' => Factory::create()->realText(),
            'age' => rand(18, 35),
            'residence' => Factory::create()->country,
            'is_available' => true,
            'address' => Factory::create()->address,
            'email' => Factory::create()->safeEmail,
            'phone' => Factory::create()->e164PhoneNumber,
            'avatar' => Factory::create()->imageUrl,
        ];

//        DB::table('profiles')->insert($data);
        Profile::query()->create($data);
    }
}
