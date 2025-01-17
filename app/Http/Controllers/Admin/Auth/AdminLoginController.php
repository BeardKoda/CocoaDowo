<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except'=>['logout']]);
    }
    
    public function showLoginForm()
    {
        return view('Admin.auth.login');
    }

    public function login(Request $request)
    {
       //validate the form data 
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|min:6',
        ]);
        //    attempt to log the user in 
        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password' =>$request->password], $request->remeber)){
        //    if successfull redirect to the intended location 
            return redirect()->intended(route('admin.dashboard'));
        }
        //    if unsuccessfull redirect to the login form 
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

}
