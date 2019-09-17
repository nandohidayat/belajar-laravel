<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnggotaHadiahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 20; $i++) {
            DB::table('anggota_hadiah')->insert([
                'anggota_id' => $faker->numberBetween($min = 1, $max = 10),
                'hadiah_id' => $faker->numberBetween($min = 1, $max = 10)
            ]);
        }
    }
}
