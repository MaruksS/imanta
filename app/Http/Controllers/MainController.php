<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
  
    public function main()
    {
        return view('main');
    }
    public function dalibnieki(){
        return view('dalibnieki');
    }
	public function about(){
        return view('about');
    }

    
}
