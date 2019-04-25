<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $fillable=['id','type','bedding','place'];
    public $timestamps = false;
}
