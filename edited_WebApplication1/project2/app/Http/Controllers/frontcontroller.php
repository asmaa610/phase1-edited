<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\contact ;
use DB ;

class frontcontroller extends Controller
{
    public function index(){
    	return view('frontview.home.homecontent');
    }
    public function store(Request $request){

    	$contact = new contact([
    		'fullname' => $request->get('fullname'),
    		'email' => $request->get('email'),
    		'phoneno' => $request->get('phoneno'),
    		'message' => $request->get('message'),
    	]);
    	$contact->save();
    	return back();

    }
}
