<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Rave;
use App\product;
use App\investment;

class PayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function initialize()
  {
    //This initializes payment and redirects to the payment gateway
    //The initialize method takes the parameter of the redirect URL
    Rave::initialize(route('callback'));
  }

  /**
   * Obtain Rave callback information
   * @return void
   */
  public function callback(investment $investment)
  {
    // dd("hum");
    dd($request->all());
    $data = Rave::verifyTransaction(request()->txref);
    if($data->status == "success"){
      $val = json_encode($data->data);
      $dd = $data->data->txid;
      $p_plan = $data->data->paymentplan;
      $investment->updates($p_plan, $dd, $val);
      // dd($data, "success");
      return redirect(route('investments.index'))->with('success', 'You have Successfully Paid for Your Investment');
    }else{
      // dd($data, "failed");
      return redirect(route('investments.index'))->with('error', 'Something Went Wrong with your Payment');
    }
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Comfirm that the transaction is successful
        // Confirm that the chargecode is 00 or 0
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (includeing parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

  }
  public function createPaymentPlan(Request $request)
  {
    // dd($request->all());
    $data = Rave::createPaymentPlan();
    $product = product::find($request->farm);
    $saved =  $product->update([
      'pay_plan' => json_encode($data->data),
      'plan_id' => $data->data->id
    ]);
    // dd($data->data);
    return redirect(route('products.index'))->with('success', 'Payment Plan created');

  }
  public function fetchPaymentPlan($id, $q)
  {
    $data = Rave::fetchPaymentPlan($id, $q);

    dd($data);
  }
}
