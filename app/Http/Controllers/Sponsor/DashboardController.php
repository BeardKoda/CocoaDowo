<?php

namespace App\Http\Controllers\Sponsor;

use Illuminate\Http\Request;
use Auth;
use App\investment;
use App\Type;
use App\Sponsor;
use App\UserProfile;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(investment $investment, Type $type){
        $type = $type->all();
        $products =$investment->where('user_id', Auth::user()->id)->latest()->first();
        $response = [
            "types" => $type,
            'product' =>$products
        ];
        // dd($response);
      return view('Sponsor.pages.dashboard', $response);
    }

    public function investments(){
      return view('Sponsor.pages.investments');
    }

    public function payments(){
      return view('Sponsor.pages.payments');
    }

    public function locations(){
      return view('Sponsor.pages.location');
      // dd(config('app.GOOGLE_MAPS_API_KEY'));
    }

    public function settings(){
      return view('Sponsor.pages.settings');
    }

    public function saveProfile(Request $request){
      $valid = $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'Country' => 'required|string|max:255',
      ]);
      // dd(Auth::user()->profile());
      if($valid){
        $profile = UserProfile::where('sponsor_id', Auth::user()->id)->first();
        if(is_null($profile)){
          $saved = UserProfile::create([
            'sponsor_id' => Auth::user()->id,
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'Country' => $request->input('Country'),
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
}
