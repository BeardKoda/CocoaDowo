<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class FrontController extends Controller
{
    //
    public function index(Product $product){
        $Lproducts = $product->where('type', 1)->paginate(2);
        $Rproducts = $product->where('type', 2)->paginate(2);
        // dd($users);
        $response = [
          'Lproducts' => $Lproducts,
          'Rproducts' =>$Rproducts
      ];
      return view('front.pages.index', $response);
    }

    public function about(){
      return view('front.pages.about');
    }

    public function product($id, Product $product){
      $products = $product->find($id);

      $response = [
          'product' => $products
      ];
      return view('front.pages.product', $response);
    }
}
