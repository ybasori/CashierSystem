<?php

use Illuminate\Database\Seeder;
use App\Productline as Productline;

class productlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        $limit = 10;
        
        for ($i=0; $i<$limit; $i++){
            $productslines = new Productline;
            $productslines->textDescription = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $productslines->htmlDescription = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $productslines->image = $faker->imageUrl($width = 150, $height = 150, 'food', true, 'Faker');
            $productslines->created_at = $faker->dateTime();
            $productslines->updated_at = $faker->dateTime();
            $productslines->save();
        }
        
    }
}
