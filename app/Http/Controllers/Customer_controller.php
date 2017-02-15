<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Customers;
use App\Order;

class Customer_controller extends Controller
{
    //
    public function create()
    {
    	$data["employee"]=Employee::all();
    	$data["title"]="New Customer";
    	return view("page.newcustomer",$data);
    }
    public function store(Request $request){
    	// $cust= new Customers;
    	// $cust->customerName=$request->fname." ".$request->lname;
    	// $cust->firstName=$request->fname;
    	// $cust->lastName=$request->lname;
    	// $cust->phone
    	// $cust->addressLine1
    	// $cust->addressLine2
    	// $cust->city
    	// $cust->state
    	// $cust->postalCode
    	// $cust->country
    	// $cust->salesRepEmployeeNumber
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
