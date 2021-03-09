<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = "teams";
    protected $fillable = ['id', 'first_name','last_name','domain','rank','email','image','updated_at','created_at'];
    protected $hidden = [];
}
