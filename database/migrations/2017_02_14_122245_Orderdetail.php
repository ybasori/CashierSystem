<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orderdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->integer("orderNumber")->unsigned()->nullable();
            $table->foreign("orderNumber")->references("orderNumber")->on("orders");
            $table->integer("productCode")->unsigned()->nullable();
            $table->foreign("productCode")->references("productCode")->on("products");
            $table->integer("quantityOrdered");
            $table->integer("priceEach");
            $table->integer("orderLineNumber");
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
        //
        Schema::table("orderdetails", function (Blueprint $table){
            $table->dropForeign(["orderNumber"]);
            $table->dropForeign(["productCode"]);
        });
        Schema::dropIfExists('orderdetails');
    }
}
