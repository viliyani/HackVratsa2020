<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Order;

class QuarantinedController extends Controller
{
    public function makeRequestForm()
    {
        $user = Auth::user();
        return view("quarantined.make_request", compact('user'));
    }

    public function makeRequestPost(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
        ]);

        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->category_id = $request->category_id;
        $order->status = 1;
        $order->description = $request->description;
        $order->save();

        return redirect()->route('quarantined.my_requests')->with('alert-success', 'Успешно създадохте заявка!');
    }

    public function myRequests()
    {
        $orders = Order::where('user_id', Auth::user()->id)->OrderBy('created_at', 'desc')->paginate(10);
        return view('quarantined.my_requests', compact('orders'));
    }

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
