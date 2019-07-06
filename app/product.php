<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
        protected $fillable = [
            'name',
            'description',
            'price',
            'duration',
            'type',
            'plan_id',
            'pay_plan',
        ];

    public function type_(){
        return $this->hasOne('App\Type', 'id', 'type');
    }

    public function verify($request){
        return $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'required|string',
            'type' => 'required',
            'price' => 'required',
            'duration' => 'required',
        ]);
    }

    public function plan($product){
        $data = json_decode($product->pay_plan,true);
        return $data;
    }

    public function prr($product){
        $data = str_replace(",", "", $product);
        // $data = json_decode($product->pay_plan,true);
        return $data;
    }
}
