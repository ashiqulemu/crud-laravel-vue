<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
//    protected $guarded=['id'];
    protected $fillable=['first_name','last_name','phone','address'];
}
