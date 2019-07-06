<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getAdmins(){
        $users = Admin::where('is_deleted', 0)->paginate(10);
        // dd($users);
        $response = [
            'page' =>[
                'title' => 'All Admins-Users',
                'breadcrumb' => 'Home'
            ],
            'users' => $users,
        ];
        return view('admin.pages.admins.index', $response);
    }
    
    public function getSuspendedAdmins(){
        $users = Admin::where('status', '!=', 'active')->paginate(10);
        // dd($users);
        $response = [
            'page' =>[
            'title' => 'All Suspended Admin',
            'breadcrumb' => 'Home'
            ],
            'users' => $users,
        ];
        return view('admin.pages.admins.index', $response);
    }
    
    public function getDeletedAdmins(){
        $users = Admin::where('is_deleted', 1)->paginate(10);
        // dd($users);
        $response = [
            'page' =>[
            'title' => 'All Deleted Admin',
            'breadcrumb' => 'Home'
            ],
            'users' => $users,
        ];
        return view('admin.pages.admins.index', $response);
    }

    public function add(){
        $response = [
            'page' =>[
                'title' => 'Admin',
                'breadcrumb' => 'New'
            ]
        ];
        return view('admin.pages.admins.create', $response);
    }
    
    public function edit($id, Admin $admin){
        $users = $admin->where('id', $id)->first();
        if($users){
            $response = [
                'page' =>[
                    'title' => 'Admin',
                    'breadcrumb' => 'Edit'.$users->name
                ],
                'user' => $users
            ];
            return view('admin.pages.admins.edit', $response);
        }else{
            return back()->with('warning', 'Admin User not existing');
        }
    }

    public function update(Request $request, $id, Admin $admin){
        $valid = $admin->verify($request);
        if($valid){
            $users = $admin->where('id', $id)->first();
            if($users){
                $saved =  $admin->where('id', $id)
                  ->update([
                      'name' => $request->name,
                      'email' => $request->email,
                      'position' => $request->role,
                      'password' => Hash::make($request->password)
                  ]);
                if($saved){
                    return redirect(route('admin'))->with('success', 'Admin Updated Successfully');
                }
            }
        }
    }
    
    public function store(Request $request, Admin $admin){
        $valid = $admin->verify($request);
        if($valid){
            $saved =  $admin->add($request);
            if($saved){
                return redirect(route('admin'))->with('success', 'Admin Created Successfully');
            }
        } 
    }

    public function Deactivate($id, Admin $admin){
        $users = Admin::where('id', $id)->first();
        if($users){
            $users->status = "unactive";
            if($users->save()){
                return back()->with('success', 'Admin successfully Deactivated');
            }
            return back()->with('warning', 'Something Happened');
        }else{
            return back()->with('warning', 'Admin User not existing');
        }
    }
    
    public function Activate($id, Admin $admin){
        $users = Admin::where('id', $id)->first();
        if($users){
            $users->status = "active";
            if($users->save()){
                return back()->with('success', 'Admin successfully Activated ');
            }
            return back()->with('warning', 'Something Happened');
        }else{
            return back()->with('warning', 'Admin User not existing');
        }
    }

    public function delete($id){
        $users = Admin::where('id', $id)->first();
        if($users){
            $users->is_deleted = 1;
            if($users->save()){
                return back()->with('success', 'Admin successfully Deleted');
            }
            return back()->with('warning', 'Something Happened');
        }else{
            return back()->with('warning', 'Admin User not existing');
        }
    }

}
