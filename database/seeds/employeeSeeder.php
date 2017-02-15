<?php

use Illuminate\Database\Seeder;
use App\Employee as Employee;
use App\Office as Office;

class employeeSeeder extends Seeder
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
        $office = Office::get()->pluck('officeCode')->toArray();
        for ($i=0; $i<$limit; $i++){
            $employee = new Employee;
            $employee->lastName = $faker->firstName;
            $employee->firstName = $faker->lastName;
            $employee->extension = $faker->randomNumber(4);
            $employee->email = $faker->safeEmail;
            $employee->officeCode = $faker->randomElement($office);
            $employee->jobTitle = $faker->jobTitle;
            $employee->created_at = $faker->dateTime();
            $employee->updated_at = $faker->dateTime();
            $employee->save();
        }

        $employee_id = Employee::get()->pluck('employeeNumber')->toArray();
        for ($i=0; $i<=$limit; $i++){
            DB::table('employees')->where('employeeNumber',$i)->update(["reportsTo"=>$faker->randomElement($employee_id)]);
        }
    }
}
