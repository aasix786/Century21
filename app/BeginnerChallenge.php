<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeginnerChallenge extends Model
{
    //

    public function beginnerChallengeBlocks(){
        return $this->hasManyThrough(
          BeginnerChallengeBlock::class,
          BeginnerChallengeDay::class,
          'beginner_challenge_id',
            'beginner_challenge_day_id',
            'uuid',
            'uuid'
        );
    }

    public function beginnerChallengeDays(){
        return $this->hasMany(BeginnerChallengeDay::class, 'beginner_challenge_id','uuid');
    }
}
