<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Customers;
use App\Office;

class Employee_controller extends Controller
{
    public function index(){
    	$data["employees"]=Employee::all();
        $data["offices"]=Office::all();
    	$data["title"]="Choose Employee";
    	return view("page.employee",$data);
    }
    public function show($id){
    	$employee=Employee::find($id);
    	$data["employee"]=$employee;
    	$data["customer"]=$employee->customer;
    	$data["title"]="Employee";
    	return view("page.showEmp",$data);
    }
}
