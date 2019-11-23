<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Farmer;
use Auth;
use App\Http\Requests\Farmer\StoreRequest;
use Hash;

class FarmerController extends Controller
{
        public function __construct(){
            $this->middleware('auth:admin');
        }
  
      public function getFarmers(){
        $Sponsors = Farmer::paginate(10);
        // dd($Sponsors);
        $response = [
          'page' =>[
            'title' => 'All Farmers',
            'breadcrumb' => 'Home'
          ],
          'sponsors' => $Sponsors,
        ];
        return view('admin.pages.farmer.index', $response);
      }
      
      public function getPremiumFarmers(){
        $Sponsors = Farmer::paginate(10);
        // dd($Sponsors);
        $response = [
          'page' =>[
            'title' => 'All Premium Farmers',
            'breadcrumb' => 'Home'
          ],
          'Sponsors' => $Sponsors,
        ];
        return view('admin.pages.farmer.index', $response);
      }
  
      public function getSuspendedFarmers(){
          $Sponsors = Farmer::where('status', '!=', 'active')->paginate(10);
          // dd($Sponsors);
          $response = [
              'page' =>[
              'title' => 'All Suspended Farmers',
              'breadcrumb' => 'Home'
              ],
              'Sponsors' => $Sponsors,
          ];
          return view('admin.pages.farmer.index', $response);
      }
      
      // public function getDeletedSponsors(){
      //     $Sponsors = Sponsor::where('is_deleted', 1)->paginate(10);
      //     // dd($Sponsors);
      //     $response = [
      //         'page' =>[
      //         'title' => 'All Deleted Sponsors',
      //         'breadcrumb' => 'Home'
      //         ],
      //         'Sponsors' => $Sponsors,
      //     ];
      //     return view('admin.pages.Sponsors.index', $response);
      // }
  
      public function add(){
          $response = [
              'page' =>[
                  'title' => 'Add new Farmer',
                  'breadcrumb' => 'New'
              ]
          ];
          return view('admin.pages.farmer.create', $response);
      }
      
      public function edit($id, Sponsor $Sponsor){
          $Sponsors = $Sponsor->where('id', $id)->first();
          if($Sponsors){
              $response = [
                  'page' =>[
                      'title' => 'edit farmer',
                      'breadcrumb' => 'Edit'.$Sponsors->name
                  ],
                  'Sponsor' => $Sponsors
              ];
              return view('admin.pages.farmer.edit', $response);
          }else{
              return back()->with('warning', 'Farmer not existing');
          }
      }
  
      public function update(UpdateRequest $request, $id, Farmer $Sponsor){
          $valid = $request->validated();
          if($valid){
              $Sponsors = $Sponsor->where('id', $id)->first();
              if($Sponsors){
                  $saved =  $Sponsor->where('id', $id)
                    ->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'premium' => $request->role,
                      //   'status' => 'active',
                        'password' => Hash::make($request->password)?? Hash::make('123456')
                    ]);
                  if($saved){
                      return redirect(route('admin-Farmers'))->with('success', 'Farmer Updated Successfully');
                  }
              }
          }
      }
      
      public function store(StoreRequest $request, Farmer $Sponsor){
        //   $valid = $Sponsor->verify($request);
        $valid = $request->validated();
        //   dd($request->all());
        // dd($valid);
          if($valid){
            //   $saved =  $Sponsor->add($request);
              $saved = $Sponsor->create([
                'name' => $request->name,
                'email' => $request->email,
                'premium' => $request->role,
                'password' => Hash::make($request->password)?? Hash::make('123456')
            ]);
            // dd($saved);
              if($saved){
                  return redirect(route('admin-farmers'))->with('success', 'Farmer Created Successfully');
              }
          } 
  
      }
  
      public function Deactivate($id, Farmer $Sponsor){
          $Sponsors = $Sponsor->where('id', $id)->first();
          if($Sponsors){
              $Sponsors->status = "unactive";
              if($Sponsors->save()){
                  return back()->with('success', 'Farmer successfully Deactivated');
              }
              return back()->with('warning', 'Something Happened');
          }else{
              return back()->with('warning', 'Farmer not existing');
          }
      }
      
      public function Activate($id, Farmer $Sponsor){
          $Sponsors = $Sponsor->where('id', $id)->first();
          if($Sponsors){
              $Sponsors->status = "active";
              if($Sponsors->save()){
                  return back()->with('success', 'Farmer successfully Activated ');
              }
              return back()->with('warning', 'Something Happened');
          }else{
              return back()->with('warning', 'Farmer not existing');
          }
      }
  
      public function delete($id, Farmer $Sponsor){
          $Sponsors = $Sponsor->where('id', $id)->first();
          if($Sponsors){
              $Sponsors->is_deleted = 1;
              if($Sponsors->save()){
                  return back()->with('success', 'Farmer successfully Deleted');
              }
              return back()->with('warning', 'Something Happened');
          }else{
              return back()->with('warning', 'Farmer not existing');
          }
      }
  
}
