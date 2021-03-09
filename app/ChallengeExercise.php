<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChallengeExercise extends Model
{
    //

    public function challengeblock(){
        return $this->belongsTo(ChallengeBlock::class, 'challengeblock_id', 'uuid');
    }
}
