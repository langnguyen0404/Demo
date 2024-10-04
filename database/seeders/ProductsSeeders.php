<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductsModels;
use Faker\Factory as Faker;
class ProductsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            //
            $faker=Faker::create();
            for ($i=0; $i < 10 ; $i++) { 
                ProductsModels::create(
                    [
                        'name'=>$faker->word(),
                        'price' =>$faker->numberBetween(1000,10000),
                        'sold'=>$faker->numberBetween(10,100),              ]
                );
            }
            //
    }
}