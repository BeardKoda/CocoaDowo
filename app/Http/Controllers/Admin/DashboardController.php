<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\product;
use App\investment;
use App\Sponsor;
use App\location;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');

    }

    public function index(Sponsor $user, Product $product, investment $investments)
    {
        $products = $product->all();
        $Users = $user->all();
        $P_count = $product->count();
        $U_count = $user->count();
        $I_count = $investments->latest()->count();
        // dd($U_count->investment->count());
        $response = [
          'page' =>[
            'title' => 'Dashboard',
            'breadcrumb' => 'Home'
          ],
          'users' => $Users,
          'products' => $products,
          'I_count' => $I_count,
          'P_count' => $P_count,
          'U_count' => $U_count
        ];

        return view('admin.pages.dashboard', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
