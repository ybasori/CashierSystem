<?php

use Illuminate\Database\Seeder;
Use App\Customers as Customers;
Use App\Employee as Employee;

class customerSeeder extends Seeder
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
       
        $employee = Employee::get()->pluck('employeeNumber')->toArray();
        for ($i=0; $i<$limit; $i++){
            $customers = New Customers;
            $customers->customerName = $faker->name;
            $customers->contactLastName = $faker->lastName;
            $customers->contactFirstName = $faker->firstName;
            $customers->phone = $faker->e164PhoneNumber;
            $customers->addressLine1 = $faker->address;
            $customers->addressLine2 = $faker->address;
            $customers->city = $faker->city;
            $customers->state = $faker->state;
            $customers->postalCode = $faker->postcode;
            $customers->country = $faker->country;
            $customers->salesRepEmployeeNumber = $faker->randomElement($employee);
            $customers->creditLimit = $faker->numberBetween($min = 1000000, $max = 90000000);
            $customers->created_at = $faker->dateTime;
            $customers->deleted_at = $faker->dateTime;
            $customers->save();
        }
    }
}
