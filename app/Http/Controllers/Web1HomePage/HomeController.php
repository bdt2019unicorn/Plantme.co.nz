<?php

namespace App\Http\Controllers\Web1HomePage;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{
    public function index() {
        return view('Web1HomePage/Home/index');
    }

}