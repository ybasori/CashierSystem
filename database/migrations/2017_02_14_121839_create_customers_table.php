<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customerNumber');
            $table->string('customerName',40);
            $table->string('contactLastName',40);
            $table->string('contactFirstName',40);
            $table->string('phone',20);
            $table->string('addressLine1');
            $table->string('addressLine2');
            $table->string('city',30);
            $table->string('state',30);
            $table->string('postalCode',30);
            $table->string('country',30);
            $table->integer('salesRepEmployeeNumber')->unsigned()->nullable();
            $table->foreign('salesRepEmployeeNumber')->references('employeeNumber')->on('employees');
            $table->decimal('creditLimit',10,2);
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
        Schema::table('customers', function (Blueprint $table){
            $table->dropForeign(['salesRepEmployeeNumber']);
        });
        Schema::dropIfExists('customers');
    }
}
