<?php

namespace App\Http\Controllers\Web1HomePage;

use App\Http\Model\User;
use App\Http\Model\Suburbs;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
    public function index() {
        return view('Web1HomePage/User/signIn');
    }

    public function signIn(Request $request) {
        $user = User::where('email', $request->email)->where('password', $request->password)->get();

        if($user->isEmpty())
        {
        	echo "alert('Email or Password not exist');"; 
        }
        else 
        {
        	echo "window.location.href='/Explore';"; 
        }
    }

    public function signUp() {
        $suburbs = Suburbs::all();
        $suburbs = json_encode($suburbs); 
        $suburbs = json_decode($suburbs); 
        return view('Web1HomePage/User/signUp', compact('suburbs'));
    }

    public function addUser(Request $request) 
    {
    	$input = $request->all(); 

    	
    	$user = new User; 

    	foreach ($input as $key => $value) 
    	{
    		if($key!="_token")
    		{
    			$user->$key = $value; 
    		}
    	}

    	try 
    	{
    		$user->save(); 
    		echo 
    		"
    			alert('Sign Up success');
    			window.location.href='/signIn';  
    		"; 
    	}
    	catch(\Exception $e)
    	{
    		echo "alert('Error in processing the sign up process'); "; 
    	}
    }
}
