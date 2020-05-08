<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function getfront()
    {
    	return view('front/index');
    }
    public function getcategory($search)
    {


    	return view('front/category');

    }
    public function getdetail($seo,$search)
    {


    	return view('front/detail');
    }
    public function getsearch($search)
    {
    	return view('front/search');
    }
}
