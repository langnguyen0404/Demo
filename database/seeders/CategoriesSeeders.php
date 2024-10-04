<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CategoriesModels;
use Faker\Factory as Faker;

class CategoriesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker=Faker::create();
        for ($i=0; $i < 5 ; $i++) { 
            CategoriesModels::create(
                ['name'=>$faker->word()]
            );
        }
        // 
        
    }
}