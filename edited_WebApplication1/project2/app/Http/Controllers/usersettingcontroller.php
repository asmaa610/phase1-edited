<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;
use DB;

class usersettingcontroller extends Controller
{
    public function index(){

        $posts =DB::table('logins')
		  ->select('id','usname', 'pass' )
          ->get() ;
    	return view ('frontview.home.Usersetting' , compact('posts'));
    }
}
