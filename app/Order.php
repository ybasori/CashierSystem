<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $primaryKey = 'orderNumber';
    protected $guarded = ['created_at'];

    public function product(){
        return $this->belongsToMany('App\product','orderdetails','orderNumber','productCode');
    }
}
