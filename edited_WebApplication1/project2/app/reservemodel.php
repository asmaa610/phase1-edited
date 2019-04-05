<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservemodel extends Model
{
    protected $fillable = [ 'Title', 'FName', 'LName', 'Email', 'National' , 'Country' , 'Phone' , 'TRoom' , 'Bed' ,'NRoom' , 'Meal' ,'cin' , 'cout']; //, 'stat' , 'nodays'
    public $timestamps = false;
}
