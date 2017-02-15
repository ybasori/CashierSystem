<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $primaryKey = 'productCode';
    protected $guarded = ['created_at'];

    public function order()
    {

        return $this->belongsToMany('App\Order','orderdetails','productCode','orderNumber');
    }

    public function productline()
    {

        return $this->belongsTo('App\Productline', 'productCode');
    }
}
