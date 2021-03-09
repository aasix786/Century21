<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    //
    public function challengeblocks(){
        return $this->hasManyThrough(
            ChallengeBlock::class,
            ChallengeDays::class,
            'challenge_id',
            'challengeday_id',
            'uuid',
            'uuid'
        );
    }
    public function challengedays(){
        return $this->hasMany(ChallengeDays::class, 'challenge_id','uuid');
    }
}
