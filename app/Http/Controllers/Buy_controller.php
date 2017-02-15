<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order as order;
use App\Product as product;

class Buy_controller extends Controller
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
        $productNumber      = $request->productCode;
        $quantityOrdered    = $request->quantity;
        $priceEach          = $request->totalPrice;
        $orderNumber        = $request->orderNumber;
        $orderLineNumber    = rand(1, 10);

        $order = Order::find($orderNumber);
        // $order->product()->detach($productNumber);
        $order->product()->syncWithoutDetaching([$productNumber=>['quantityOrdered'=>$quantityOrdered,
                                                     'priceEach'=>$priceEach,
                                                     'orderLineNumber'=>$orderLineNumber]]);
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
