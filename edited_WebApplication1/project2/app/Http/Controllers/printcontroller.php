<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservemodel ;
use DB;

class printcontroller extends Controller
{
    public function index(){
           $rows =DB::table('reservemodels')
			
        			->select('id','Title','FName','LName','Bed','Meal','cout','TRoom','nodays','Rent' )
        			->get() ;
         return view ('frontview.print')->with('rows' , $rows);
    	}
  /*  public function show($id = null){

    	 $rows =DB::table('reservemodels')
			->where('id',$id)
			->select('id','Title','FName','LName','cout','TRoom','nodays','Rent' )
			->get() ;

    	return redirect()->route( 'print.show' )->with( compact('rows') );

    }*/


    
 
    
}
