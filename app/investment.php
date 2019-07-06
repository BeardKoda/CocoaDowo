<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\product;
use Auth;

class investment extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'plan_id',
        'txr_id',
        'status',
    ];

    public function product(){
        return $this->hasOne('App\product', 'id', 'product_id');
    }

    public function prod(){
        return $this->hasOne('App\product', 'id', 'product_id');
    }
    
    public function user(){
        return $this->belongsTo('App\Sponsor');
    }

    public function add($id){
        $product = product::find($id);
        $exists = $this->where('product_id', $product->id)->where('plan_id', $product->plan_id)
        ->where('user_id', Auth::user()->id)->first();
        // dd($exists);
        $sts = $product->plan($product)["status"] != "active";
        if($exists && $sts){
            return 6;
        }else{
            $this->create([
                'user_id' => Auth::user()->id,
                'product_id' => $product->id,
                'plan_id' => $product->plan_id,
                'status' =>"processing"
            ]);
            return 4;
        }
    }
    
    public function updates($id, $txr, $data){
        $product = product::where('plan_id', $id)->first();
        // dd($id);
        $data = $this->where('id', $product->id)->where('user_id', Auth::user()->id)->first();
        // dd($data);
        if(!is_null($data)){
            $data->txr_id = $txr;
            $data->status ="paid";
            $data->save();
            return true;
        }
        return false;
    }
}
