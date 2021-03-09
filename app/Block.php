<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    //

    public function workout(){
        return $this->belongsTo(Workout::class, 'workout_id', 'uuid');
    }


   public function exercises(){
       return $this->hasMany(Exercise::class, 'block_id', 'uuid');
   }

}
