<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            Train::create([
                'agency' => $faker->company(),
                'start_station' => $faker->city(),
                'end_station' => $faker->city(),
                'start_time' => $faker->date(),
                'end_time' => $faker->date(),
                'code' => rand(1, 300),
                'n_cab' => rand(1, 100),
                'in_time' => $faker->boolean(),
                'deleted' => $faker->boolean(),
            ]);
        }
    }
}
