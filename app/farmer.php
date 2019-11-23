<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class farmer extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password', 'email_token', 'verified',
    ];
    
    public function verify($request){
        return $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|unique:farmers|string',
            'type' => 'required',
            'password' => 'required'
        ]);
    }
}
