<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getDashBoard(){
    	echo 123;die;
    	return view('dashboard');
    }
}
