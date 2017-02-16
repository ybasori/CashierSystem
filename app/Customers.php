<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //
    protected $primaryKey = 'customerNumber';
    protected $guarded = ['created_at'];

    public function payment(){

        return $this->hasMany('App\Payment','customerNumber');
    }

    public function order(){

        return $this->hasMany('App\Order','customerNumber');
    }

    public function employee(){

        return $this->belongsTo('App\Employee','salesRepEmployeeNumber');
    }
}
