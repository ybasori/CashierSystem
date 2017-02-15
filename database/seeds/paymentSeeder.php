<?php

use Illuminate\Database\Seeder;
use App\Customers as Customers;
use App\Payment as Payment;

class paymentSeeder extends Seeder
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
            $payment = new Payment;
            $payment->customerNumber = $faker->randomElement($customer);
            $payment->paymentDate = $faker->dateTime;
            $payment->amount = $faker->numberBetween($min = 1000000, $max = 90000000);
            $payment->created_at = $faker->dateTime();
            $payment->updated_at = $faker->dateTime();
            $payment->save();
            
        }
    }
}
