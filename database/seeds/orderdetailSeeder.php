<?php

use Illuminate\Database\Seeder;
use App\Product as Product;
use App\Order as Order;

class orderdetailSeeder extends Seeder
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
        $customer = Product::get()->pluck('productCode')->toArray();
        $order = Order::get()->pluck('orderNumber')->toArray();
        for ($i=0; $i<$limit; $i++){
            DB::table('orderdetails')->insert(
                ['orderNumber'      => $faker->randomElement($order),
                 'productCode'      => $faker->randomElement($customer),
                 'quantityOrdered'  => $faker->randomDigitNotNull,
                 'priceEach'        => $faker->numberBetween($min = 10000, $max = 900000),
                 'orderLineNumber'  => $faker->randomDigitNotNull,
                 'created_at'       => $faker->dateTime,
                 'updated_at'       => $faker->dateTime,
                 ]
            );
        }
    }
}
