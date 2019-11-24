<?php

namespace App\Http\Controllers\Sponsor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\product;
use Auth;
use App\investment;
use App\Type;

class InvestmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Type $type){
        $type = $type->all();
        $response = [
            "types" => $type
        ];
        return view('Sponsor.pages.investments', $response);
    }

    
    public function myindex(investment $investment){
        $products =$investment->where('user_id', Auth::user()->id)->get();
        $response = [
            'products' => $products
        ];
        // dd($response);
        return view('Sponsor.pages.invest', $response);
    }
      
    public function type($id, product $product,Type $type){
        $type = $type->find($id);
        if($type){
            $products =  $product->where('type', $id)->get();
            $response = [
                "type" => $type->name,
                "products" => $products
            ];
            // dd($response);
        }else{
            return view('404');
        }
        return view('Sponsor.pages.investment-type', $response);
    }

    public function PayForm($id, product $prod, investment $investment){
        $product = $prod->where('id', $id)->first();
        $invest = $investment->add($id);
        // dd($invest);
        if($invest == 6){
            return redirect(route('investments.myindex'))->with('info', 'You already have an Existing Investment for this product');
        }else{
            $response = [
                'product' => $product
            ];
            // dd($response);
            return view('Sponsor.pages.payments', $response)->with('success', 'Investment Created Please Pay to Start Investment');
        }
    }

    public function payPlan(){
        return view('Sponsor.pages.payplan');
    }
    
    public function getTransactions(investment $investment){
        $products =$investment->where('user_id', Auth::user()->id)->get();
        $response = [
            'products' => $products
        ];
        // dd($response);
        return view('Sponsor.pages.transactions', $response);
    }
}
