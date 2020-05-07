<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function getfront()
    {
    	return view('front/index');
    }
    public function getcategore($value)
    {


    	return view('front/category');
    }
    public function getdetail($value)
    {
    	return view('front/detail');
    }
    public function getsearch($value)
    {
    	return view('front/search');
    }
}
