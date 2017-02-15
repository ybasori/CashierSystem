<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $primaryKey = 'orderNumber';
    protected $guarded = ['created_at'];

    public function product(){
        //jangan lupa kasih pivot biar bisa ngakses table composite ya..OK..Oce
        return $this->belongsToMany('App\Product','orderdetails','orderNumber','productCode')->withPivot('quantityOrdered', 'priceEach');
    }
    public function customer()
    {

        return $this->belongsTo('App\Customers', 'customerNumber');
    }
}
