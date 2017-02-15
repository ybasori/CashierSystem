<?php

use Illuminate\Database\Seeder;
use App\Office as Office;

class officeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;
        for ($i=0; $i<$limit; $i++){
            $office = new Office;
            $office->city = $faker->city;
            $office->phone = $faker->e164PhoneNumber;
            $office->addressLine1 = $faker->address;
            $office->addressLine2 = $faker->address;
            $office->state = $faker->state;
            $office->country = $faker->country;
            $office->postalCode = $faker->postcode;
            $office->territory = $faker->country;
            $office->created_at = $faker->dateTime;
            $office->deleted_at = $faker->dateTime;
            $office->save();
        }
    }
}
