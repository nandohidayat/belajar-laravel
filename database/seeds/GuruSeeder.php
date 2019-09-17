<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i <= 10; $i++) {
            DB::table('guru')->insert([
                'nama' => $faker->name,
                'umur' => $faker->numberBetween($min = 17, $max = 35)
            ]);
        }
    }
}
