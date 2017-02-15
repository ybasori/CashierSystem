<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(productlineSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(officeSeeder::class);
        $this->call(employeeSeeder::class);
        $this->call(customerSeeder::class);
        $this->call(paymentSeeder::class);
        $this->call(orderSeeder::class);
        $this->call(orderdetailSeeder::class);
    }
}
