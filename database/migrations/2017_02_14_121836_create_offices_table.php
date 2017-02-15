<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('officeCode');
            $table->string('city',50);
            $table->string('phone',15);
            $table->string('addressLine1',100);
            $table->string('addressLine2',100);
            $table->string('state',100);
            $table->string('country',100);
            $table->string('postalCode',20);
            $table->string('territory',130);
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
        Schema::dropIfExists('offices');
    }
}
