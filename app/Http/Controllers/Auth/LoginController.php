<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Company;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function login(Request $request){
        $email = $request->input("email");
        $password = $request->input("password");
        $company_id = $request->input("company");

        if (Auth::attempt(["email" => $email, "password" => $password, "company_id" => $company_id])){
            return redirect()->intended('dashboard');
        }
        else{
            return redirect()->intended('login')->with(["error_msg" => "Provided credentials were invalid."]);
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->intended('login');
    }

    public function showLoginForm(Request $request){
        $companies = Company::all();
        return view('auth.login', compact("companies"));
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
