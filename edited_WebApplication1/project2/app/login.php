<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
     protected $fillable = [ 'usname', 'pass']; 
     public $timestamps = false;
}
