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
            $table->dateTime("orderDate");
            $table->dateTime("requiredDate");
            $table->dateTime("shippedDate");
            $table->enum("status",['waiting', 'confirmed', 'shipped']);
            $table->text("comments");
            $table->integer("customerNumber")->unsigned()->nullable();
            $table->foreign("customerNumber")->references("customerNumber")->on("customers");
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
        Schema::table("orders", function (Blueprint $table){
            $table->dropForeign(["customerNumber"]);
        });
        Schema::dropIfExists('orders');
    }
}
