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

    public function edit($id){
                      

                   $editbyid = login::where('id' , $id)->first();
                   return view ('frontview.home.edit' , ['editbyid'=>$editbyid]);
    }

    public function update(Request $request){
       $login = login::find($request->id);

       /*$login->usname = $request->usname;
       $login->pass = $request->pass;
       $login->save();*/

       return redirect('/usersetting')->with('msg' , 'login update successfully');
    }
}
