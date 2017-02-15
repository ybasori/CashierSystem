<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $primaryKey = 'employeeNumber';
    protected $guarded = ['created_at'];

    public function office(){

        return $this->belongsTo('App\Office','employeeNumber');
    }

    public function customer(){

        return $this->hasMany('App\Customers','employeeNumber');
    }
}
