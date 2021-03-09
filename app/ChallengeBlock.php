<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChallengeBlock extends Model
{
    //

    public function challenge(){
        return $this->belongsTo(Challenge::class, 'challenge_id', 'uuid');
    }
    public function challengedays(){
        return $this->belongsTo(ChallengeDays::class, 'challengeday_id', 'uuid');
    }
    public function challengeexercises(){
        return $this->hasMany(ChallengeExercise::class, 'challengeblock_id', 'uuid');
    }
}
