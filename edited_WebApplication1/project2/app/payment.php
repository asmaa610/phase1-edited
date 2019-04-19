<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\reservemodel;
class payment extends Model
{
	protected $fillable = [ 'id','title', 'fname', 'lname', 'troom', 'tbed' , 'nroom' , 'cin' , 'cout' , 'ttot' ,'fintot' , 'mepr' ,'btot' , 'noofdays' ]; 
    public $timestamps = false;
 protected $table = 'reservemodels';  
 
}
