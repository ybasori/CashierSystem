<?php

use Illuminate\Database\Seeder;
use App\Product as Product;
use App\Productline as Productline;

class ProductSeeder extends Seeder
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
        $productline = Productline::get()->pluck('productLine')->toArray();
        for ($i=0; $i<$limit; $i++){
            $products = new Product;
            $products->productName = $faker->name;
            $products->productLine = $faker->randomElement($productline);
            $products->productScale = $faker->numberBetween($min = 1, $max = 10);
            $products->productVendor = $faker->company;
            $products->productDescription = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $products->quantityInStock = $faker->randomDigit;
            $products->buyPrice = $faker->numberBetween($min = 10000, $max = 900000);
            $products->MSRP = $faker->numberBetween($min = 10000, $max = 900000);
            $products->created_at = $faker->dateTime();
            $products->updated_at = $faker->dateTime();
            $products->save();
        }
    }
}
