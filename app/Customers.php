<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //

    public function payment(){

        return $this->hasOne('payments');
    }
}
