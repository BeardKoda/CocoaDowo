<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class FrontController extends Controller
{
    //
    public function index(Product $product){
        $products = $product->paginate(8);
        // dd($users);
        $response = [
          'products' => $products
      ];
      return view('front.pages.index', $response);
    }

    public function about(){
      return view('front.pages.about');
    }

    public function product($id, Product $product){
    	$products = $product->find($id);
        // dd($users);
        $response = [
          'product' => $products
      ];
      return view('front.pages.product', $response);
    }
}
