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
        
               
        $datant=DB::table('nhomtin')->where('nhomtinseo','=',$search)->get();
      echo $datant=nhomtin::find($datant[0]->id);
      
      
      echo $da=DB::table('loaitin')->where('id',1)->get();
        //$datatin=$datant->tin();



   //    echo $datant[0]->id;



  //     echo     $datatnt=$datant::tin();
     
    	//return view('front/category',['datant'=>$datant]);

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
