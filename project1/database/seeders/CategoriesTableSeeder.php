<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Faker::create();
        for($i=0; $i<20; $i++){
            DB::table('categories')->insert([
                'name' => $fake->word,
                'description'=> $fake->sentence
            ]);
        }
    }

}
