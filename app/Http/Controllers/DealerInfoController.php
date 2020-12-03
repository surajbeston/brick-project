<?php

namespace App\Http\Controllers;

use App\DealerInfo;
use App\Company;
use App\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DealerInfoController extends Controller
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

    public function index()
    {
        /*$dealers = DealerInfo::paginate(50);
        return view('dealer.index', compact('dealers'));*/

        $dealers = DealerInfo::all();
        return view('dealer.index', compact('dealers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dealer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $data = request()->validate([
            'dealer_code' => 'required|unique:dealer_infos',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|min:5|max:10',
            'reward'=>'numeric|nullable',
            'paid'=>'numeric|nullable',
            'due'=>'numeric|nullable',
            'amount'=>'nullable',
        ]);

        if ($request->hasFile('photo')) {
            //  Let's do everything here
            if ($request->file('photo')->isValid()) {
                //
                $validated = $request->validate([
                    'photo' => 'mimes:jpeg,png|max:1014',
                ]);
                $extension = $request->photo->extension();
                $request->photo->storeAs('/public', $data['name'].".".$extension);
                $url = Storage::url($data['name'].".".$extension);

                $data['photo'] = $url;
            }
        }

        $data['company_id'] = Auth::user()->company_id;
        DealerInfo::create($data);
        return redirect('dealer')->with('success_msg','Dealer successfully added.');

    }


    public function show(Request $request)
    {

        $dealer = DealerInfo::findorFail($request['dealer_id']);
        $sales = $dealer->sales()->paginate(20);
        return view('dealer.show',compact('dealer','sales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DealerInfo  $dealerInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(DealerInfo $dealerInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DealerInfo  $dealerInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DealerInfo $dealerInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DealerInfo  $dealerInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(DealerInfo $dealerInfo)
    {
        //
    }
}
