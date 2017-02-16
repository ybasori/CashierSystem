<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Customers;
use App\Order;

class Customer_controller extends Controller
{
    //
    public function index()
    {
        $data["customers"]=Customers::all();
        $data["title"]="Customers";
        return view("page.customer", $data);
    }
    public function create()
    {
    	$data["employee"]=Employee::all();
    	$data["title"]="New Customer";
    	return view("page.newcustomer",$data);
    }
    public function store(Request $request){
    	$cust= new Customers;
    	$cust->customerName=$request->fname." ".$request->lname;
    	$cust->contactFirstName=$request->fname;
    	$cust->contactLastName=$request->lname;
    	$cust->phone=$request->phone;
    	$cust->addressLine1=$request->address1;
    	$cust->addressLine2=empty($request->address2)?"":$request->address2;
    	$cust->city=$request->city;
    	$cust->state=$request->state;
    	$cust->postalCode=$request->pos;
    	$cust->country=$request->country;
    	$cust->salesRepEmployeeNumber=$request->employeeNumber;
        $cust->creditLimit=0;
        $cust->save();
        return redirect("/employee/".$request->employeeNumber);
    }
    public function show($id){
    	$data["title"]="Customer";
    	$customer=Customers::find($id);
		$data["employee"]=Employee::find($customer->salesRepEmployeeNumber);
    	$data["customer"]=$customer;
    	$data["myorders"]=$customer->order;
    	return view("page.showCustomer", $data);
    }
}
