<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('employeeNumber');
            $table->string('lastName',40);
            $table->string('firstName',40);
            $table->string('extention',40);
            $table->string('email',50);
            $table->integer('officeCode')->unsigned()->nullable();
            $table->foreign('officeCode')->references('officeCode')->on('offices');
            $table->integer('reportsTo')->unsigned()->nullable();
            $table->foreign('reportsTo')->references('employeeNumber')->on('employees');
            $table->string('jobTitle');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table){
            $table->dropForeign(['reportsTo']);
            $table->dropForeign(['officeCode']);
        });
        Schema::dropIfExists('employees');
    }
}
