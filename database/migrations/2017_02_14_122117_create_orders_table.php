<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('orderNumber');
            $table->date("orderDate");
            $table->date("requiredDate");
            $table->date("shippedDate");
            $table->integer("status");
            $table->text("comments");
            $table->integer("customerNumber")->unsigned()->nullable();
            $table->foreign("customerNumber")->references("customerNumber")->on("customers");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
