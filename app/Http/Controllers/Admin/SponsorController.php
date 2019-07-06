<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Sponsor;

class SponsorController extends Controller
{

    public function __construct(){
      $this->middleware('auth:admin');
    }

    public function getSponsors(){
      $Sponsors = Sponsor::paginate(10);
      // dd($Sponsors);
      $response = [
        'page' =>[
          'title' => 'All Sponsors',
          'breadcrumb' => 'Home'
        ],
        'sponsors' => $Sponsors,
      ];
      return view('admin.pages.sponsors.index', $response);
    }
    
    public function getPremiumSponsors(){
      $Sponsors = Sponsor::paginate(10);
      // dd($Sponsors);
      $response = [
        'page' =>[
          'title' => 'All Premium Sponsors',
          'breadcrumb' => 'Home'
        ],
        'Sponsors' => $Sponsors,
      ];
      return view('admin.pages.sponsors.index', $response);
    }

    public function getSuspendedSponsors(){
        $Sponsors = Sponsor::where('status', '!=', 'active')->paginate(10);
        // dd($Sponsors);
        $response = [
            'page' =>[
            'title' => 'All Suspended Sponsors',
            'breadcrumb' => 'Home'
            ],
            'Sponsors' => $Sponsors,
        ];
        return view('admin.pages.sponsors.index', $response);
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
                'title' => 'Admin',
                'breadcrumb' => 'New'
            ]
        ];
        return view('admin.pages.sponsors.create', $response);
    }
    
    public function edit($id, Sponsor $Sponsor){
        $Sponsors = $Sponsor->where('id', $id)->first();
        if($Sponsors){
            $response = [
                'page' =>[
                    'title' => 'Admin',
                    'breadcrumb' => 'Edit'.$Sponsors->name
                ],
                'Sponsor' => $Sponsors
            ];
            return view('admin.pages.Sponsors.edit', $response);
        }else{
            return back()->with('warning', 'Sponsor not existing');
        }
    }

    public function update(Request $request, $id, Sponsor $Sponsor){
        $valid = $Sponsor->verifyU($request);
        if($valid){
            $Sponsors = $Sponsor->where('id', $id)->first();
            if($Sponsors){
                $saved =  $Sponsor->where('id', $id)
                  ->update([
                      'name' => $request->name,
                      'email' => $request->email,
                      'premium' => $request->role,
                    //   'status' => 'active',
                      'password' => Hash::make($request->password)
                  ]);
                if($saved){
                    return redirect(route('admin-Sponsors'))->with('success', 'Sponsor Updated Successfully');
                }
            }
        }
    }
    
    public function store(Request $request, Sponsor $Sponsor){
        $valid = $Sponsor->verify($request);
        if($valid){
            $saved =  $Sponsor->add($request);
            if($saved){
                return redirect(route('admin-Sponsors'))->with('success', 'Admin Created Successfully');
            }
        } 

    }

    public function Deactivate($id, Sponsor $Sponsor){
        $Sponsors = $Sponsor->where('id', $id)->first();
        if($Sponsors){
            $Sponsors->status = "unactive";
            if($Sponsors->save()){
                return back()->with('success', 'Sponsor successfully Deactivated');
            }
            return back()->with('warning', 'Something Happened');
        }else{
            return back()->with('warning', 'Sponsor not existing');
        }
    }
    
    public function Activate($id, Sponsor $Sponsor){
        $Sponsors = $Sponsor->where('id', $id)->first();
        if($Sponsors){
            $Sponsors->status = "active";
            if($Sponsors->save()){
                return back()->with('success', 'Sponsor successfully Activated ');
            }
            return back()->with('warning', 'Something Happened');
        }else{
            return back()->with('warning', 'Sponsor not existing');
        }
    }

    public function delete($id, Sponsor $Sponsor){
        $Sponsors = $Sponsor->where('id', $id)->first();
        if($Sponsors){
            $Sponsors->is_deleted = 1;
            if($Sponsors->save()){
                return back()->with('success', 'Sponsor successfully Deleted');
            }
            return back()->with('warning', 'Something Happened');
        }else{
            return back()->with('warning', 'Sponsor not existing');
        }
    }

}
