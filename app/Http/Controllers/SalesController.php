<?php

namespace App\Http\Controllers;

use App\DealerInfo;
use App\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        error_log("reached  here");

        error_log($request->input("dealer_info_id"));
        error_log($request->input("date"));
        error_log($request->input("brick_type"));
        error_log($request->input("quantity"));
        error_log($request->input("rate"));
        error_log($request->input("cash_type"));
        error_log($request->input("delivery_type"));
        error_log($request->input("vehicle_no"));
        error_log($request->input("driver_no"));
        error_log($request->input("delivery_place"));
        error_log($request->input("consumer_name"));
        error_log($request->input("amount"));
        error_log($request->input("reward_rate"));

        $data = request()->validate([
            'dealer_info_id' => 'required',
            'date' => 'required',
            'brick_type' => 'required',
            'quantity' => 'required',
            'rate' => 'required',
            'cash_type' => 'required',
            'delivery_type' => 'required',
            'vehicle_no'=>'required',
            'driver_no'=>'required',
            'delivery_place'=>'required',
            'consumer_name'=>'required',
            'amount'=>'required',
            'reward_rate'=>'required',
        ]);

        $data['company_id'] = Auth::user()->company_id;
        Sales::create($data);
        return redirect()->route('dealer.index')->with('success_msg','Sales added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
