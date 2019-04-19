<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservemodel;
use DB ;
class adminstatecontroller extends Controller
{
     public function index(){
        $users = reservemodel::all();
    	return view ('frontview.home.adminstate' , compact('users'));
    }
    
}
