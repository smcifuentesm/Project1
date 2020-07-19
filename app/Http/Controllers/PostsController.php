<?php

namespace App\Http\Controllers;
use App\User;


use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    // solo ingresa si esta logiado
	public function __construct(){
		$this->middleware('auth');
	}



    public function create()
    {
    	//dd($user);
    	//$user=User::FindorFail($user);
        return view('posts.create');
    }

     public function show(\App\Post $post)
    {
    	//dd($post);
    	return view('posts.show',compact('post'));
    }


    public function store()
    {
    	$data=request()->validate([
    		'caption'=>'required',
    		'image'=>['required','image'],
    	]);
  	$imagepath=request('image')->store('uploads','public');
  
  	$image=Image::make(public_path("storage/{ $imagepath }"))->fit(1200,1200);
  	$image->save();

  	auth()->user()->posts()->create([
  		'caption'=>$data['caption'],
  		'image'=>$imagepath,

  	]);

      return redirect ('/profile/' . auth()->user()->id);
    }
}
