<?php

namespace App\Http\Controllers\Sponsor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Sponsor;
use App\UserProfile;
use Auth;
use Activate;
use Mail;
use App\Mail\EmailVerification;
use App\Mail\EmailVerified;

class AuthController extends Controller
{
    public function __construct(){
      $this->middleware('guest', ['except' => 'logout']);
    }
    //
    public function showLoginForm(){
      return view('Sponsor.auth.login');
    }

    public function showRegisterForm(){
      return view('Sponsor.auth.register');
    }

    public function Login(Request $request){
      // dd($request->all());
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
      // Attempt to log the user in
      if (Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
          return redirect()->intended(route('dashboard'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        return back()->with('error','Wrong Credientials!, Please Check Your Credentials');
    }

    public function Register(Request $request){
      $valid = $request->validate([
          'name' => 'required|string|max:255',
          'phone_number' => 'required|numeric|min:11',
          'email' => 'required|string|email|max:255',
          'password' => 'required|string|min:6|confirmed',
      ]);
      if($valid){
        $saved = Sponsor::create([
          'name' => $request->input('name'),
          'phone_number' => $request->input('phone_number'),
          'email' => $request->input('email'),
          'password' => bcrypt($request->input('password')),
          'email_token' => str_random(40),
        ]);
        if($saved){
          $this->sendVerify($saved);
          $this->login($request);
          return redirect()->intended(route('dashboard'))->with('info', 'Account Created!! Please Verify your Account');
        }
        return back()->with('error','Wrong Credientials!, Please Check Your Credentials');
      }
    }

    public function logout(){
          Auth::logout();
          return redirect()->route('login');
    }

    public function verify($token){
        $verifyUser = Sponsor::where('email_token', $token)->first();
          // dd($token, $verifyUser);
        if(isset($verifyUser) ){
            $user = $verifyUser;
            if(!$user->verified) {
                $user->verified = 1;
                if($user->save()){
                    $this->sendVerified($user);
                    $status = "Your e-mail is verified. You can now login.";
                    return redirect()->intended(route('login'))->with('success', $status);
                }
            }else{
                $status = "Your e-mail is already verified. You can now login.";
                return redirect()->intended(route('login'))->with('success', $status);
            }
        }else{
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }

        return redirect('/login')->with('status', $status);

    }

    public function sendVerify($saved){
      try {
          Mail::to($saved->email)->send(new EmailVerification($saved));
      } catch (Exception $ex) {
          dd($ex);
      }
    }

    public function sendVerified($saved){
      try {
        Mail::to($saved->email)->send(new EmailVerified($saved));
      } catch (Exception $ex) {
        dd($ex);
      }
    }

    
    public function saveProfile(Request $request){
        $profile = UserProfile::where('sponsor_id', Auth::user()->id)->first();
        if(is_null($profile)){
          $saved = UserProfile::create([
            'sponsor_id' => Auth::user()->id,
            'firstname' => " - ",
            'lastname' => " - ",
            'address' => " - ",
            'city' => " - ",
            'state' => " - ",
            'Country' => " - ",
            'updated' => 0
          ]);
          if($saved){
          return back()->with('success', 'profile Succefully Updated');
          }
        }else{
          // dd($profile);
          $profile->firstname = $request->input('firstname');
          $profile->lastname = $request->input('lastname');
          $profile->address = $request->input('address');
          $profile->city = $request->input('city');
          $profile->state = $request->input('state');
          $profile->Country = $request->input('Country');
          if($profile->save()){
            return back()->with('success', 'profile Succefully Updated');
          }
        }
    }
}
