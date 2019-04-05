<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservemodel ;
use DB ;

class reservecontroller extends Controller
{
    public function index(){
    	return view ('frontview.home.reserve');
    }
    public function store(Request $request){

    	$reservemodel = new reservemodel([
    		
    		'Title' => $request->get('Title'),
    		'FName' => $request->get('FName'),
    		'LName' => $request->get('LName'),
    		'Email' => $request->get('Email'),
    		'National' => $request->get('National'),
    		'Country' => $request->get('Country'),
    		'Phone' => $request->get('Phone'),
    		'TRoom' => $request->get('TRoom'),
    		'Bed' => $request->get('Bed'),
    		'NRoom' => $request->get('NRoom'),
    		'Meal' => $request->get('Meal'),
    		'cin' => $request->get('cin'),
    		'cout' => $request->get('cout'),
    	]);
    	$reservemodel->save();
    	return back();

    }
}
