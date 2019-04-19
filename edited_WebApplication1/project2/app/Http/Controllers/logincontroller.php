<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login ;
use DB ;
class logincontroller extends Controller
{
    public function index(){
    	return view ('frontview.home.logIn');
    }
    public function store(Request $request){

    	$login = new login();
    		
    		$login->usname = $request->usname;
            $login->pass = $request->pass;

    	

    	  $login->save();
    	  return redirect('/adminstate');
}
}
