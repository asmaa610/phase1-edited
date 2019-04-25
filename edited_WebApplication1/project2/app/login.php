<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
     protected $fillable = [ 'id','usname', 'pass']; 
     public $timestamps = false;
}
