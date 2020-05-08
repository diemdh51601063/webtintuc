<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\tin;
use App\nhomtin;
use App\loaitin;
use Illuminate\Support\Facades\DB;

class frontController extends Controller
{
    public function getfront()
    {
        $data=tin::where('trangthai', 1)->orderBy('ngaydangtin', 'desc')->take(20)->get();

    	return view('front/index',['data'=>$data]);
    }
    public function getcategory($search)
    {

        $data=DB::table('nhomtin')
        ->where('nhomtinseo', '=', $search)->get();

     
            if(count($data)==0)
              { 

              $data=DB::table('loaitin')
        ->where('loaitinseo', '=', $search)->get();
              echo "loatin";
            
                }
                else
            echo "nhomtin";
           
    	return view('front/category');

    }
    public function getdetail($seo,$search)
    {
        $tin=tin::find($search);

        if($tin->tieudeseo!=$seo)
            return redirect($tin->tieudeseo.'-post'.$search.'.html');

        
    	return view('front/detail',['tin'=>$tin]);
    }
    public function getsearch($search)
    {

    	return view('front/search');



    }
}
