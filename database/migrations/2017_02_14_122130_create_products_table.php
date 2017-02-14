<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('productCode');
            $table->text('productName');
            $table->integer("productLine")->unsigned()->nullable();
            $table->foreign("productLine")->references("productLine")->on("productLines");
            $table->integer('productScale');
            $table->string('productVendor',15);
            $table->text('productDescription');
            $table->integer('quantityInStock');
            $table->integer('buyPrice');
            $table->integer("MSRP");
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
        Schema::table("products", function (Blueprint $table){
            $table->dropForeign(["productLine"]);
        });
        Schema::dropIfExists('products');
    }
}
