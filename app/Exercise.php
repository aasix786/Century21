<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    //
    public function block(){
        return $this->belongsTo(Block::class, 'block_id', 'uuid');
    }
    public function workout(){
        return $this->belongsTo(Workout::class, 'workout_id', 'uuid');
    }
}
