<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
   protected $fillable = [
       'firstname', 'lastname', 'address', 'city', 'state', 'Country', 'sponsor_id', 'updated'
   ];

    public function sponsor()
    {
    	return $this->belongsTo('App\Sponsor');
    }
}
