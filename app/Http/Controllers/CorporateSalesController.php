<?php

namespace App\Http\Controllers;

use App\DealerInfo;
use App\CorporateSales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CorporateSalesController extends Controller
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
        error_log("here hae");

        error_log($request->input("corporate_info_id"));
        error_log($request->input("consumer_name"));
        error_log($request->input("discount_rate"));

        $data = request()->validate([
            'corporate_info_id' => 'required',
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
            'discount_rate'=>'required',
        ]);

        $data['company_id'] = Auth::user()->company_id;
        CorporateSales::create($data);
        return redirect()->route('corporate.index')->with('success_msg','Corporate Sales added successfully.');
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
