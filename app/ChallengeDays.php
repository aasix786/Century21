<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChallengeDays extends Model
{
    //
    public function challenge(){
        return $this->belongsTo(Challenge::class, 'challenge_id', 'uuid');
    }
    public function challengeblocks(){
        return $this->hasMany(ChallengeBlock::class, 'challengeday_id', 'uuid');
    }
}
