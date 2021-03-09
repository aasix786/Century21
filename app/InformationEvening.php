<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformationEvening extends Model
{
    protected $table = "information_evening";
    protected $fillable = ['id', 'title','date','time','description','updated_at','created_at'];
    protected $hidden = [];
}
