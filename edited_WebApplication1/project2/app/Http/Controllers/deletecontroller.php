<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;
use DB;

class deletecontroller extends Controller
{
    public function index(){
        $users = room::all();
    	return view('frontview.home.Delete' ,compact('users'));
    }
     public function destroy(Request $request){

    	$room = new room([
    		'id' => $request->get('id'),
    	]);
    	$room->save();
    	return back();

    }
}
