<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeginnerChallengeExercise extends Model
{
    //
    public function beginnerChallengeBlock(){
        return $this->belongsTo(BeginnerChallengeBlock::class, 'beginner_challenge_block_id', 'uuid');
    }
}
