<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;
use DB;

class settingcontroller extends Controller
{
    public function index(){
        $users = room::all();
    	return view('frontview.home.Setting' , compact('users'));
    }
}
