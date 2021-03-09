<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeginnerChallengeDay extends Model
{
    //
    public function beginnerChallenge(){
        return $this->belongsTo(
            BeginnerChallenge::class,
            'beginner_challenge_id',
            'uuid');
    }

    public function beginnerChallengeBlocks(){
        return $this->hasMany(BeginnerChallengeBlock::class, 'beginner_challenge_day_id', 'uuid');
    }
}
