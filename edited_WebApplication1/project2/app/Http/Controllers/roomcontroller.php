<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;
use DB;

class roomcontroller extends Controller
{
     public function index(){
        $users = room::all();
    	return view('frontview.home.Room' , compact('users'));
    }

    public function store(Request $request){

    	$room = new room([
    		
    		'type' => $request->get('type'),
    		'bedding' => $request->get('bedding'),
    	]);
    	$room->save();
    	return back();

    }
}
