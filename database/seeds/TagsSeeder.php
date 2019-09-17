<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 40; $i++) {
            DB::table('tags')->insert([
                'tag' => $faker->word,
                'article_id' => $faker->numberBetween($min = 1, $max = 10)
            ]);
        }
    }
}
