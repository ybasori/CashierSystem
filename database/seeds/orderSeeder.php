<?php

use Illuminate\Database\Seeder;
use App\Order as Order;
use App\Customers as Customers;

class orderSeeder extends Seeder
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
        $customer = Customers::get()->pluck('customerNumber')->toArray();
        for ($i=0; $i<$limit; $i++){
            $orders = new Order;
            $orders->orderDate = $faker->date($format = 'Y-m-d', $max = 'now');
            $orders->requiredDate = $faker->date($format = 'Y-m-d', $max = 'now');
            $orders->shippedDate = $faker->date($format = 'Y-m-d', $max = 'now');
            $orders->status = $faker->randomElement($array = array ('waiting', 'cancel', 'shipped'));
            $orders->comments = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $orders->customerNumber = $faker->randomElement($customer);
            $orders->created_at = $faker->dateTime;
            $orders->deleted_at = $faker->dateTime;
            $orders->save();
        }

        
    }
}
