<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::whereNull('assistant_id')->paginate(10);
        return view('orders.index')->withOrders($orders);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show')->withOrder($order);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order->assistant_id = auth()->user()->id;
        $order->status = 2;
        $order->save();
        
        Session::flash('alert-success', 'Успешно направихте заявка!');

        return redirect()->route('orders.show', $order->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }


    public function pending() 
    {
        $orders = Order::where('assistant_id', auth()->user()->id)->where('status', 2)->paginate(10);
        return view('orders.pending')->withOrders($orders);
    }
}
