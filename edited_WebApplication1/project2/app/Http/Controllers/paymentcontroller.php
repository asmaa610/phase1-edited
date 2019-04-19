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

    public function store(Request $request){

    	$payment = new payment([
    		
                
    	   'title' => $request->get('title'),
    		'fname' => $request->get('fname'),
    		'lname' => $request->get('lname'),
    		'troom' => $request->get('troom'),
    		'tbed' => $request->get('tbed'),
    		'nroom' => $request->get('nroom'),
    		'cin' => $request->get('cin'),
    		'cout' => $request->get('cout'),
    		'ttot' => $request->get('ttot'),
    		'fintot' => $request->get('fintot'),
    		'mepr' => $request->get('mepr'),
    		'btot' => $request->get('btot'),
    		'noofdays' => $request->get('noofdays'),
         
]);
    	       $payment->save();
    	       return back();

    }
}
