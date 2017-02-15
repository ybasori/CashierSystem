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
            $table->string('customerName',140);
            $table->string('contactLastName',140);
            $table->string('contactFirstName',140);
            $table->string('phone',20);
            $table->string('addressLine1');
            $table->string('addressLine2');
            $table->string('city',130);
            $table->string('state',130);
            $table->string('postalCode',130);
            $table->string('country',130);
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
