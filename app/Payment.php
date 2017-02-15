<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $primaryKey = 'checkNumber';
    protected $guarded = ['created_at'];

    public function customer(){

        return $this->belongsTo('customers','checkNumber');
    }
}
