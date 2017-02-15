<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productline extends Model
{
    //
    protected $primaryKey = 'productLine';
    protected $guarded = ['created_at'];

    public function product()
    {

        return $this->hasMany('App\Product', 'productLine');
    }
}
