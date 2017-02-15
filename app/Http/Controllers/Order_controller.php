<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Customers as Customer;
use App\Product;

class Order_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $order=new Order;
        $order->orderDate= date("Y-m-d H:i:s");
        $order->requiredDate= date("Y-m-d H:i:s");
        $order->shippedDate= date("Y-m-d H:i:s");
        $order->comments= "";
        $order->status= "waiting";
        $order->customerNumber=$request->customerNumber;
        $order->save();
        return redirect("/customer/".$request->customerNumber);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data["title"]="Order";
        $order=Order::find($id);
        $data["order"]=$order;
        $data["customer"]=$order->customer;
        $data["myproducts"]=$order->product;
        $data["products"]=Product::all();
        return view("page.showOrder", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //'waiting','confirmed', 'shipped'
        $status = $request->status;
        $comment = $request->comment;
        Order::find($id)->update(
            [
                'status'=>$status,
                'comments'=>$comment, 
            ]
            );
        return redirect("/order/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
