<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment ;
use App\reservemodel ;
use DB ;
class paymentcontroller extends Controller
{
    public function index(){
    	$users = reservemodel::all();
    	return view('frontview.home.paymentcontent', compact('users'));
    }

   
}
