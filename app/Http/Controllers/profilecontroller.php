<?php

namespace App\Http\Controllers;
//usa el modelo User en la siguiente linea
use App\User;
use Illuminate\Http\Request;

class profilecontroller extends Controller
{
    public function index($user)
    {
    	//dd($user);
    	$user=User::findorFail($user);
        return view('profiles.index',[
        	'user'=>$user
        ]);
    }
}
