<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservemodel;
use DB;
class profitcontroller extends Controller
{
     public function index(){
     	$rows =DB::table('reservemodels')
		  ->select('id','FName','cin','Bed','Meal','cout','TRoom','nodays','Rent' )
          ->get() ;
    	return view('frontview.home.Profit' , compact('rows'));
    }
}
