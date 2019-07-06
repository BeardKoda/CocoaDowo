<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\product;
use App\Sponsor;
use App\Type;

class ProductController extends Controller
{
    protected $product = Product::class;

    public function __construct(){
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $users = $product->paginate(10);
        // $users = $product->find(1);

        // dd($users->plan($users)['id']);
        $response = [
          'page' =>[
            'title' => 'All Products',
            'breadcrumb' => 'Home'
          ],
          'users' => $users,
        ];
        return view('admin.pages.product.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Type $type)
    {
        $type = $type->all();
        $response = [
            'page' =>[
                'title' => 'Add Product',
                'breadcrumb' => 'New'
                ],
            'types' => $type
        ];

        return view('admin.pages.product.create', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        //
        // dd($product);
        $valid = $product->verify($request);
      if($valid){
        // dd($request->all(), "ssd");
        $saved =  $product->create([
            'name' => $request->name,
            'description' => $request->desc,
            'type' => $request->type,
            'price' => $request->price,
            'duration' =>$request->duration,
        ]);
        if($saved){
            return redirect(route('products.index'))->with('success', 'Farm Created Successfully, Generate Payment Plan');
        }
      } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id, "ook");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Product::find($id);
        $type = Type::where("id", "!=", $prod->type)->get();
        // dd($prod);
        $response = [
            'page' =>[
                'title' => 'Edit Product',
                'breadcrumb' => 'Edit'
                ],
            'types' => $type,
            'product' => $prod
        ];

        return view('admin.pages.product.edit', $response);
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
        $product = Product::find($id);
        $valid = $product->verify($request);
      if($valid){
        $saved =  $product->update([
            'name' => $request->name,
            'description' => $request->desc,
            'type' => $request->type,
            'price' => $request->price,
            'duration' =>$request->duration,
        ]);
        if($saved){
            return redirect(route('products.index'))->with('success', 'Farm Updated Successfully');
        }
      } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Product $product)
    {
      $users = $product->find($id);
      if($users){
          $users->is_deleted = 1;
          if($users->save()){
              return back()->with('success', 'Farm successfully Deleted');
          }
          return back()->with('warning', 'Something Happened');
      }else{
          return back()->with('warning', 'Farm not existing');
      }
    }
}