<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeginnerChallengeBlock extends Model
{
    //
    public function beginnerChallenge(){
        return $this->belongsTo(BeginnerChallenge::class, 'beginner_challenge_id', 'uuid');
    }
    public function beginnerChallengeDay(){
        return $this->belongsTo(BeginnerChallengeDay::class, 'beginner_challenge_day_id', 'uuid');
    }
    public function beginnerChallengEexercises(){
        return $this->hasMany(BeginnerChallengeExercise::class, 'beginner_challenge_block_id', 'uuid');
    }
}
