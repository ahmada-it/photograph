<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     DB::table('galeris')->insert(
    //         [
    //             'nama' => "10R",
    //             'Ukuran' => "10x20 inch",
    //         ]
    //     );
    // }

    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 2; $i <= 50; $i++) {


            DB::table('galeris')->insert(
                [
                    'nama' => $faker->name,
                    'Ukuran' => $faker->numberBetween(1, 25),
                ]
            );
        }
    }
}