<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(){
            $user = Auth::user();
            return view('auth.edit_profile',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'numeric'],
        ]);



        if($request->password != NULL && $request->old_password != NULL) {

            $data = request()->validate([
                'password' => ['nullable', 'string', 'min:5', 'confirmed'],
                'old_password' => ['nullable', 'string','min:5']
            ]);

            $hashedpassword = Auth::user()->password;
            $id = Auth::id();

            if (Hash::check($request->old_password, $hashedpassword)) {
                $data['password'] = Hash::make($request->password);
            } else {
                return redirect()->back()->with('error_msg', 'Invalid current password');
            }
        }

        $user->update($data);

        return redirect('edit-profile')->with('success_msg','Profile changed Successfully');
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
