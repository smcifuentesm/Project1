<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   //belongs to model User
    public function user(){
    	return $this->belongsTo(User::class);
    }
    



}
