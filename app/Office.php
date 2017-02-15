<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    //
    protected $primaryKey = 'officeCode';
    protected $guarded = ['created_at'];

    public function employee(){

        return $this->hasMany('App\Employee','officeCode');
    }
}
