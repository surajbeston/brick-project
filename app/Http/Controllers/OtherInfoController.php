<?php

namespace App\Http\Controllers;

use App\OtherInfo;
use App\Company;
use App\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OtherInfoController extends Controller
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
        /*$others = OtherInfo::paginate(50);
        return view('other.index', compact('others'));*/

        $others = OtherInfo::all();

        $phones = [9845423432, 234234233, 234234232, 234234234, 567546453, 5674321, 9845635345, 9823563434, 984354545];
        $trucks = [1234, 5634, 2342, 2342, 5464, 2346, 3452, 8983, 9743, 2354, 4832, 2972, 2345, 3465, 9999];
        $places = ["Itahari", "Dharan", "Damak", "Dhankuta", "Kathmandu", "Pokhara", "Inaruwa", "Narayanghat", "Dhangadhi", "Bhaktapur", "Lalitpur"];



        return view('other.index', ["others" => $others, "phones" => $phones, "trucks" => $trucks, "places" => $places ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('other.create');
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
            'other_code' => 'required|unique:other_infos',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|min:5|max:10',
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
        OtherInfo::create($data);
        return redirect('other')->with('success_msg','Other successfully added.');

    }


    public function show(Request $request)
    {
        $other = OtherInfo::findorFail($request['other_id']);
        $sales = $other->sales()->paginate(20);
        return view('other.show',compact('other','sales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OtherInfo  $otherInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(OtherInfo $otherInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OtherInfo  $otherInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OtherInfo $otherInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OtherInfo  $otherInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(OtherInfo $otherInfo)
    {
        //
    }
}
