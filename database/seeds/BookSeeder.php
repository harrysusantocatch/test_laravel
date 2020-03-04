<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 20; $i++){
            DB::table('books')->insert([
                'title' => $faker->title,
                'publisher' => $faker->userName,
                'image' => $faker->url
            ]);
        }
    }
}
