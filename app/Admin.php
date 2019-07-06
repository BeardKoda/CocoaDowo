<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'position'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function verify($request){
       return $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:artists|max:255',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);
    }
    
    public function add($request){
        return $this->create([
             'name' => $request->name,
             'email' => $request->email,
             'position' => $request->role,
             'password' => Hash::make($request->password),
            //  'email_token' => str_random(40),
         ]);
     }
}
