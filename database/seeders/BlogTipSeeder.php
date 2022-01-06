<?php

namespace Database\Seeders;

use App\Models\BlogTip;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Coding'],
            ['name' => 'Design'],
            ['name' => 'Travel'],
        ];


        foreach ($data as $datum) {
            BlogTip::query()->create($datum);
        }

//        DB::table('blog_tips')->insert($data);

    }
}
