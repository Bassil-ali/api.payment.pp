<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;

class apiregistercontroller extends Controller
{
  public function register( Request $request){
	    $data = user::create([
			'name'=>$request->name,
		    'email'=>$request->email,
			'password'=>bcrypt('password'),
			
		]);
	  return $data;
  }
	}


  
		
			
		
		
	
		
		
	