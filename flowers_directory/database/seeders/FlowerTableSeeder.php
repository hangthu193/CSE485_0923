<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Flower;

class FlowerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for( $i = 0; $i < 30; $i++ ) {
            Flower::create([
                'name' => $faker->name(),
                'description' => $faker->paragraph(),
                'image'=> $faker->imageUrl(150, 200),
                'origin'=> $faker->country(),
            ]);
        }
    }
}
