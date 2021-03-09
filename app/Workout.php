<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    //



    public function exercises(){
        return $this->hasManyThrough(
            Exercise::class,
            Block::class,
            'workout_id',
            'block_id',
            'uuid',
            'uuid'
        );
    }

    public function blocks(){
        return $this->hasMany(Block::class, 'workout_id', 'uuid');
    }
}
