<?php

namespace App\Http\Controllers;

use App\BeginnerChallenge;
use App\BeginnerChallengeBlock;
use App\BeginnerChallengeDay;
use App\BeginnerChallengeExercise;
use App\Block;
use App\Challenge;
use App\ChallengeBlock;
use App\ChallengeDays;
use App\ChallengeExercise;
use App\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Null_;
use Validator;
use App\Workout;

class AdminController extends Controller
{
    //
    public function index(){
        $data['title'] = 'Welcome to Dashboard';
        $data['module'] = 'Home';
        $data['page'] = 'Dashboard';
        $data['workouts'] = \App\Workout::all();
        $data['challenges'] = \App\Challenge::all();
        $data['beginnerChallenges']= \App\BeginnerChallenge::all();
        $data['users']= \App\Customer::all();

        return view('dashboard', $data);
    }
    public function get_team_members(){
        return view('team');
    }
    public function check(){
        return view('user.index');
    }


    public function workouts(){
        $data['title'] = 'Workouts';
        $data['module'] = 'Workout';
        $data['target'] = 'Workout';
        $data['workouts'] = \App\Workout::orderBY('id','asc')->get();
        $workout = \App\Workout::orderBY('id','asc')->get();
        return view('admin.workouts',$data);
    }
    public function add_workout(Request $request){
//        dd($request->all());
        $rules = get_workout_rules('new');
        $messages = get_workout_messages();
        $validator = Validator::make($request->all(), $rules, $messages);

        if(!$validator->fails()){

            $filename = upload_image('image','uploads/workout/');
            $workout  = new \App\Workout;
            $workout->uuid = Str::uuid();
            $workout->title = $request->title;
            $workout->image = $filename;
            $workout->level = $request->level;
            $workout->type = $request->type;
            $workout->time_duration = '898';
            if($workout->save()){
                $response = array(
                    'success' => 'true',
                    'message' => 'Record Saved Successfully',
                );
            }else{
                $response = array(
                  'success'=> 'false',
                  'message' => 'Failed to save Record'
                );
            }
        }else{
            $message = '';
            $errors = $validator->errors();
            $response =array(
              'success' => 'false',
              'message' => $errors
            );
        }
        return json_encode($response);
    }
    public function get_workout_data(){
    if(!empty(request('id'))){
        $instance = \App\Workout::where('id', request('id'))->first();
        if($instance->uuid){
            $url = display_image('uploads/workout/', $instance->image);
            $image = '<img src="'.$url.'" style="width:80px; height:80px; margin-top:-5px; border:2px solid #ccc; " class="style_image"">';
            $response = array(
                'success' => 'true',
                'rTitle' => $instance->title,
                'rLevel' => $instance->level,
                'rType' => $instance->type,
                'rUuid'=>$instance->uuid,
                'rImage'=> $image
            );
        }else{
            $response = array(
                'success' => 'false',
                'message'  => '<p class="alert alert-danger">Record not found.</p>'
            );
        }

    }else{
        $response = array(
            'success' => 'false',
            'message'  => '<p class="alert alert-danger">System failed to process request. Please try again later.</p>'
        );
    }
        echo json_encode($response);
    }
    public function edit_workout(){
//        dd(\request()->all());
        $rules = get_workout_rules('edit');
        $messages = get_workout_messages();
        $validator = Validator::make(request()->all(), $rules, $messages);
        if(!$validator->fails()){
            $is_title_exist = \App\Workout::where('title', request('title'))
                                        ->where('uuid', '!=', request('uuid') )->get();

            if(count($is_title_exist)==0){
                $workout = \App\Workout::where('uuid', request('uuid'))->first();
//                dd($workout->image);
                $filename = update_image('image', $workout->image, 'uploads/workout/');
                $workout->title = request('title');
                $workout->image = $filename;
                $workout->level = request('level');
                $workout->type = request('type');
                $workout->time_duration = '222';
                if($workout->save()){
                    $response = array(
                        'success'=> 'true',
                        'message'=> 'Record Update Successfully'
                    );
                }else{
                    $response = array(
                        'success'=> 'false',
                        'message'=> 'Failed to Update Record'
                    );
                }
            }
        }else{
                $message = '';
                $errors = $validator->errors();
            $response = array(
                'success'=> 'false',
                'message'=> $errors
            );

        }

        return json_encode($response);

    }

      public function delete_workout()
      {
          $workout = \App\Workout::where('uuid', request('uuid'))->first();

          if($workout) {
              $blocks = $workout->blocks->modelKeys();

            if(sizeof($blocks)>0) {
              $exercises = $workout->exercises->modelKeys();
                if(sizeof($exercises)>0){
                  Exercise::whereIn('id', $exercises)->delete();
              }
              Block::whereIn('id', $blocks)->delete();
          }
              Workout::where('uuid',$workout->uuid)->delete();
          }
          return redirect()->back();
    }

    public function delete_block()
    {

        $block = \App\Block::where('uuid', request('uuid'))->first();
        if($block) {
            $exercises = $block->exercises->modelKeys();
            if($exercises) {
                Exercise::whereIn('id', $exercises)->delete();
            }
            Block::where('uuid', $block->uuid)->delete();
        }
        return redirect()->back();
    }

    public function blocks(){
        $data['title'] = 'Blocks';
        $data['module'] = 'Block';
        $data['target'] = 'Block';
        $data['blocks'] = \App\Block::orderBY('id','desc')->get();
        $data['workouts']= \App\Workout::all();
        return view('admin.blocks',$data);
    }

    public function add_block(Request $request){
//        dd($request->all());
        $rules = get_block_rules('new');
        $messages = get_block_messages();
        $validator = Validator::make($request->all(), $rules, $messages);

        if(!$validator->fails()){
            $is_block_exist = \App\Block::where('title', $request->title)
                                ->where('workout_id', '=', $request->workout )->first();
            if(!$is_block_exist) {
                $block = new \App\Block;
                $block->uuid = Str::uuid();
                $block->title = $request->title;
                $block->workout_id = $request->workout;
                if ($block->save()) {
                    $response = array(
                        'success' => 'true',
                        'message' => 'Record Saved Successfully',
                    );
                } else {
                    $response = array(
                        'success' => 'false',
                        'message' => 'Failed to save Record'
                    );
                }
            }else{
                $response = array(
                    'success'=> 'false',
                    'message'=> 'This title already exist again this workout'
                );
            }
        }else{
            $message = '';
            $errors = $validator->errors();
            $response =array(
                'success' => 'false',
                'message' => $errors
            );
        }
        return json_encode($response);
    }

    public function get_block_data(){
        if(!empty(request('id'))){
            $instance = \App\Block::where('id', request('id'))->first();
            if($instance->uuid){
                $response = array(
                    'success' => 'true',
                    'rTitle' => $instance->title,
                    'rWorkout' => $instance->workout_id,
                    'rUuid'=>$instance->uuid,
                );
            }else{
                $response = array(
                    'success' => 'false',
                    'message'  => '<p class="alert alert-danger">Record not found.</p>'
                );
            }

        }else{
            $response = array(
                'success' => 'false',
                'message'  => '<p class="alert alert-danger">System failed to process request. Please try again later.</p>'
            );
        }
        echo json_encode($response);
    }
    public function edit_block(){
        $rules = get_block_rules('edit');
        $messages = get_block_messages();
        $validator = Validator::make(request()->all(), $rules, $messages);
        if(!$validator->fails()){


            $is_title_exist = \App\Block::where('title', request('title'))
                ->where('uuid', '!=', request('uuid'))->where('workout_id', '=', request('workout'))->first();
            if(!$is_title_exist){
                $block = \App\Block::where('uuid', request('uuid'))->first();
//                dd($workout->image);
                $block->title = request('title');
                $block->workout_id = request('workout');
                if($block->save()){
                    $response = array(
                        'success'=> 'true',
                        'message'=> 'Record Update Successfully'
                    );
                }else{
                    $response = array(
                        'success'=> 'false',
                        'message'=> 'Failed to Update Record'
                    );
                }
            }else{
                $response = array(
                    'success'=> 'false',
                    'message' => 'This title already exist for this workout'
                );
            }
        }else{
            $message = '';
            $errors = $validator->errors();
            $response = array(
                'success'=> 'false',
                'message'=> $errors
            );

        }

        return json_encode($response);

    }

    public function exercises(){
        $data['title'] = 'Exercises';
        $data['module'] = 'Exercise';
        $data['target'] = 'Exercise';
        $data['exercises'] = \App\Exercise::orderBY('id','desc')->get();
        $data['workouts']= \App\Workout::orderBy('title','asc')->get();
//        dd($data['workouts']);
        return view('admin.exercises',$data);
    }
    public function get_block($workout = null){

        $block = \App\Block::where('workout_id', $workout)->get();
        return json_encode($block);
    }

    public function add_exercise(){


        $rules  = get_exercise_rules('new');
        $messages = get_exercise_messages();
        $validator = Validator::make(request()->all(), $rules, $messages);
        if(!$validator->fails()){
            $filename = upload_image('image', 'uploads/exercise/');
            $audio = upload_audio('audio', 'uploads/audios/');
            $exercise = new \App\Exercise;
            $exercise->uuid = Str::uuid();
            $exercise->block_id = request('block');
            $exercise->description = request('description');
            $exercise->exercise_time = request('exercise_time');
            $exercise->image = $filename;
            $exercise->audio = $audio;
            $exercise->rest_time = \request('rest_time');
            if($exercise->save()){
                $response = array(
                    'success'=>'true',
                    'message'=> 'Record Saved Successfully'
                );
            }else{
                $response = array(
                'success'=>'false',
                'message'=>'Failed to save Record'
                );
            }

        }else{
            $message = '';
            $errors = $validator->errors();
            $response = array(
                'success'=> 'false',
                'message'=> $errors
            );
        }
        return json_encode($response);
    }

    public function get_exercise_data(){

        if(!empty(request('id'))){
            $instance = \App\Exercise::where('id', request('id'))->first();
            $workout = $instance->block->workout_id;
            $block = $instance->block_id;
            $filename = display_image('uploads/exercise/',$instance->image);
            if($instance->uuid){
                $response = array(
                    'success' => 'true',
                    'rDescription' => $instance->description,
                    'rWorkout' => $workout,
                    'rBlock'=> $block,
                    'rUuid'=>$instance->uuid,
                    'rExTime'=>$instance->exercise_time,
                    'rRestTime'=> $instance->rest_time,
                    'rImage'=>$filename,
                    'rAudio'=>$instance->audio,

                );
            }else{
                $response = array(
                    'success' => 'false',
                    'message'  => '<p class="alert alert-danger">Record not found.</p>'
                );
            }

        }else{
            $response = array(
                'success' => 'false',
                'message'  => '<p class="alert alert-danger">System failed to process request. Please try again later.</p>'
            );
        }

        echo json_encode($response);

    }
    public function edit_exercise()
    {

        $rules = get_exercise_rules('edit');
        $messages = get_exercise_messages();
        $validator = Validator::make(request()->all(), $rules, $messages);
        if (!$validator->fails()) {
            $exercise = \App\Exercise::where('uuid', request('uuid'))->first();

            $filename = update_image('image', $exercise->image, 'uploads/exercise/');
            $audio = update_audio('audio', $exercise->audio, 'uploads/audios/');
            $exercise->description = request('description');
            $exercise->block_id = request('block');
            $exercise->exercise_time = \request('exercise_time');
            $exercise->rest_time = \request('rest_time');
            $exercise->image = $filename;
            $exercise->audio = $audio;
            if ($exercise->save()) {
                $response = array(
                    'success' => 'true',
                    'message' => 'Record Update Successfully'
                );
            } else {
                $response = array(
                    'success' => 'false',
                    'message' => 'Failed to Update Record'
                );
            }
        } else {
            $message = '';
            $errors = $validator->errors();
            $response = array(
                'success' => 'false',
                'message' => $errors
            );
        }
        return json_encode($response);

    }
    public function users(){
        $data['title'] = 'Users';
        $data['module']= 'User';
        $data['target'] ='Customer';
        $data['users'] = \App\Customer::orderBy('id','desc')->get();
        return view('admin.users', $data);
    }



    public function challenges(){
        $data['title'] = 'Challenges';
        $data['module'] = 'Challenge';
        $data['target'] = 'Challenge';
        $data['challenges'] = \App\Challenge::orderBY('id','desc')->get();


        return view('admin.challenges',$data);
    }
    public function add_challenge(){
//        dd(request()->all());
        $rules = get_challenge_rules('new');
        $messages = get_challenge_messages();
        $validator = Validator::make(request()->all(), $rules, $messages);

        if(!$validator->fails()){

            $filename = upload_image('image','uploads/challenge/');
            $challenge  = new \App\Challenge;
            $challenge->uuid = Str::uuid();
            $challenge->title = request('title');
            $challenge->image = $filename;
            $challenge->description = request('description');

            if($challenge->save()){
            if(request()->days){
                $days = request()->days;
                for ($i=1; $i<=$days; $i++) {
                    $chDays = new \App\ChallengeDays;
                    $chDays->uuid = Str::uuid();
                    $chDays->challenge_id = $challenge->uuid;
                    $chDays->title = 'Day '.$i;
                    $chDays->time_duration = '898';
                    $chDays->save();
                }
            }

                $response = array(
                    'success' => 'true',
                    'message' => 'Record Saved Successfully',
                );
            }else{
                $response = array(
                    'success'=> 'false',
                    'message' => 'Failed to save Record'
                );
            }
        }else{
            $message = '';
            $errors = $validator->errors();
            $response =array(
                'success' => 'false',
                'message' => $errors
            );
        }
        return json_encode($response);
    }
    public function get_challenge_data(){
        if(!empty(request('id'))){
            $instance = \App\Challenge::where('id', request('id'))->first();
            $days= count($instance->challengeDays);
            if($instance->uuid){
                $url = display_image('uploads/challenge/', $instance->image);
                $image = '<img src="'.$url.'" style="width:80px; height:80px; margin-top:-5px; border:2px solid #ccc; " class="style_image"">';
                $response = array(
                    'success' => 'true',
                    'rTitle' => $instance->title,
                    'rDescription'=> $instance->description,
                    'rDays'=> $days,
                    'rUuid'=>$instance->uuid,
                    'rImage'=> $image
                );
            }else{
                $response = array(
                    'success' => 'false',
                    'message'  => '<p class="alert alert-danger">Record not found.</p>'
                );
            }

        }else{
            $response = array(
                'success' => 'false',
                'message'  => '<p class="alert alert-danger">System failed to process request. Please try again later.</p>'
            );
        }
        echo json_encode($response);
    }
    public function edit_challenge(){

        $extDays = \App\ChallengeDays::where('challenge_id', request('uuid'))->get();
        $days_count = count($extDays);
//        dd($extDays);
        $rules = get_challenge_rules('edit');
        $messages = get_challenge_messages();
        $validator = Validator::make(request()->all(), $rules, $messages);
        if(!$validator->fails()){
            $is_title_exist = \App\Challenge::where('title', request('title'))
                ->where('uuid', '!=', request('uuid') )->get();

            if(count($is_title_exist)==0){
                $challenge = \App\Challenge::where('uuid', request('uuid'))->first();
                $chDays = \App\ChallengeDays::where('challenge_id', request('uuid'))->get();
//                dd($chDays);
                $filename = update_image('image', $challenge->image, 'uploads/challenge/');
                $challenge->title = request('title');
                $challenge->image = $filename;
                $challenge->description = request('description');

                $r_days = request()->days;
                if($challenge->save()){
                    if( $r_days > $days_count){
                        for($i=$days_count+1; $i <= $r_days; $i++ ){
                            $addDays = new \App\ChallengeDays;
                            $addDays->uuid = Str::uuid();
                            $addDays->challenge_id = $challenge->uuid;
                            $addDays->title = $i;
                            $addDays->save();
                        }
                    }elseif($r_days < $days_count){
                        $del_days = \App\ChallengeDays::where('challenge_id', request('uuid'))->delete();
                        if($del_days) {

                            for ($i = 1; $i <= $r_days; $i++) {
                                $addDays = new \App\ChallengeDays;
                                $addDays->uuid = Str::uuid();
                                $addDays->challenge_id = $challenge->uuid;
                                $addDays->title = $i;
                                $addDays->save();
                            }

                        }

                    }

                    $response = array(
                        'success'=> 'true',
                        'message'=> 'Record Update Successfully'
                    );
                }else{
                    $response = array(
                        'success'=> 'false',
                        'message'=> 'Failed to Update Record'
                    );
                }
            }
        }else{
            $message = '';
            $errors = $validator->errors();
            $response = array(
                'success'=> 'false',
                'message'=> $errors
            );

        }

        return json_encode($response);

    }

    public function challenge_blocks(){
        $data['title'] = 'ChallengeBlocks';
        $data['module'] = 'ChallengeBlock';
        $data['target'] = 'ChallengeBlock';
        $data['challengeBlocks'] = \App\ChallengeBlock::orderBY('id','desc')->get();

        $data['challenges']= \App\Challenge::orderBy('id', 'desc')->get();
        $data['challengeDays']= \App\ChallengeDays::all();
        return view('admin.challenge_blocks', $data);
    }
    public function add_challenge_block(){
//        dd(\request()->all());
        $rules = get_challenge_block_rules('new');
        $messages = get_challenge_block_messages();
        $validator = Validator::make(request()->all(), $rules, $messages);

        if(!$validator->fails()){
            $is_block_exist = \App\ChallengeBlock::where('title', request()->title)
                ->where('challengeday_id', '=', request()->challengeDays )->first();
//            dd($is_block_exist);
            if(!$is_block_exist) {
                $block = new \App\ChallengeBlock;
                $block->uuid = Str::uuid();
                $block->title = request()->title;
                $block->challengeday_id = request()->challengeDays;
                if ($block->save()) {
                    $response = array(
                        'success' => 'true',
                        'message' => 'Record Saved Successfully',
                    );
                } else {
                    $response = array(
                        'success' => 'false',
                        'message' => 'Failed to save Record'
                    );
                }
            }else{
                $response = array(
                    'success'=> 'false',
                    'message'=> 'This title already exist again this workout'
                );
            }
        }else{
            $message = '';
            $errors = $validator->errors();
            $response =array(
                'success' => 'false',
                'message' => $errors
            );
        }
        return json_encode($response);

}
    public function get_challenge_days($challenge = null){

    $challengeDays = \App\ChallengeDays::where('challenge_id', $challenge)->get();
    return json_encode($challengeDays);
    }
    public function get_day_blocks($day = null){
        $challengeBlocks = \App\ChallengeBlock::where('challengeday_id', $day)->get();
        return json_encode($challengeBlocks);

    }

    public function beginner_exercises(){
            $data['title'] = 'BeginnerChallengeExercises';
            $data['module'] = 'BeginnerChallengeExercise';
            $data['target'] = 'BeginnerChallengeExercise';
            $data['image']= 'beginner_challenge_exercises';
            $data['beginnerExercises'] = \App\BeginnerChallengeExercise::orderBY('id','desc')->get();
            $data['beginnerBlocks'] = \App\BeginnerChallengeBlock::orderBY('id','desc')->get();
            $data['beginnerChallenges']= \App\BeginnerChallenge::query()->whereNull('link')->orderBy('id', 'desc')->get();
            $data['beginnerDays']= \App\BeginnerChallengeDay::all();
        return view('admin.beginner.exercises',$data);
        }
    public function add_beginner_exercise(){
            $rules = get_challenge_exercise_rules('new');
            $messages = get_challenge_exercise_messages();
            $validator = Validator::make(request()->all(), $rules, $messages);
            if(!$validator->fails()){
                $filename = upload_image('image', 'uploads/beginner_challenge_exercises');
                $audio = upload_audio('audio', 'uploads/audios/');
                $exercise = new \App\BeginnerChallengeExercise;
                $exercise->uuid = Str::uuid();
                $exercise->title = request('title');
                $exercise->description = request('description');
                $exercise->exercise_time = request('exercise_time');
                $exercise->rest_time = request('rest_time');
                $exercise->beginner_challenge_block_id = request('challengeBlock');
                $exercise->image = $filename;
                $exercise->audio = $audio;
                if($exercise->save()){
                    $response = array(
                        'success'=> 'true',
                        'message' => 'Record Saved Successfully'
                    );
                }else{
                    $response = array(
                        'success'=> 'false',
                        'message' => 'Failed to save record'
                    );

                }

            }else{
                $message = '';
                $errors = $validator->errors();
                $response = array(
                    'success' => 'false',
                    'message' => $errors
                );
            }
            return json_encode($response);
    }
    public function get_beginner_exercise_data(){

        if(!empty(request('id'))){
            $instance = \App\BeginnerChallengeExercise::where('id', request('id'))->first();
            $block = $instance->beginnerChallengeBlock->uuid;
            $day = $instance->beginnerChallengeBlock->beginnerChallengeDay->uuid;
            $challenge = $instance->beginnerChallengeBlock->beginnerChallengeDay->beginnerChallenge->uuid;
            if($instance->uuid){
                $url = display_image('uploads/beginner_challenge_exercises/', $instance->image);
                $image = '<img src="'.$url.'" style="width:80px; height:80px; margin-top:-5px; border:2px solid #ccc; " class="style_image"">';
                $response = array(
                    'success' => 'true',
                    'rTitle' => $instance->title,
                    'rDescription'=> $instance->description,
                    'rBlock' => $block,
                    'rChallenge'=> $challenge,
                    'rDay' => $day,
                    'rEXTime'=> $instance->exercise_time,
                    'rRestTime'=> $instance->rest_time,
                    'rUuid'=>$instance->uuid,
                    'rImage'=> $image,
                    'rAudio'=>$instance->audio
                );
            }else{
                $response = array(
                    'success' => 'false',
                    'message'  => '<p class="alert alert-danger">Record not found.</p>'
                );
            }

        }else{
            $response = array(
                'success' => 'false',
                'message'  => '<p class="alert alert-danger">System failed to process request. Please try again later.</p>'
            );
        }
        echo json_encode($response);

    }
    public function edit_beginner_exercise(){
        $rules = get_challenge_exercise_rules('edit');
        $messages = get_challenge_exercise_messages();
        $validator = Validator::make(request()->all(), $rules, $messages);
        if(!$validator->fails()){

            $ins = \App\BeginnerChallengeExercise::where('uuid',request('uuid'))->first();
            $filename = update_image('image', $ins->image, 'uploads/beginner_challenge_exercises/');
            $audio = update_audio('audio', $ins->audio, 'uploads/audios/');

            $ins->title = request('title');
            $ins->description = request('description');
            $ins->beginner_challenge_block_id = request('block');
            $ins->exercise_time = request('exercise_time');
            $ins->rest_time = request('rest_time');
            $ins->image = $filename;
            $ins->audio = $audio;
            if($ins->save()){
                $response = array(
                  'success' => 'true',
                  'message' => 'Record Updated Successfully'
                );
            }else{
                $response = array(
                    'success' => 'false',
                    'message' => 'Failed to Update Record'
                );

            }

        }else{
            $message = '';
            $errors = $validator->errors();
            $response = array(
                'success' => 'false',
                'message' => $errors
            );
        }
        return json_encode($response);
    }

    public function beginner_challenges(){
        $data['title'] = 'BeginnerChallenges';
        $data['module'] = 'BeginnerChallenge';
        $data['target'] = 'BeginnerChallenge';
        $data['image_module'] = 'Beginner_challenges';
        $data['beginner_challenges'] = \App\BeginnerChallenge::orderBY('id','desc')->get();

        return view('admin.beginner.challenges',$data);
    }
    public function add_beginner_challenge(){

        $link = \request('link');
        if(!$link) {
            $rules = get_beginner_challenge_rules('new');

        }else {
            $rules = get_beginner_link_rules('new');
        }
        $messages = get_beginner_challenge_messages();
            $validator = Validator::make(request()->all(), $rules, $messages);


            if (!$validator->fails()) {

                $filename = upload_image('image', 'uploads/beginner_challenges/');
                $challenge = new \App\BeginnerChallenge;
                $challenge->uuid = Str::uuid();
                $challenge->title = request('title');
                $challenge->image = $filename;
                $challenge->description = request('description');
                $challenge->link = request('link');

                if ($challenge->save()) {
                    if (request()->days) {
                        $days = request()->days;
                        for ($i = 1; $i <= $days; $i++) {
                            $chDays = new \App\BeginnerChallengeDay;
                            $chDays->uuid = Str::uuid();
                            $chDays->beginner_challenge_id = $challenge->uuid;
                            $chDays->title = 'Day ' . $i;
                            $chDays->time_duration = '88';
                            $chDays->save();
                        }
                    }

                    $response = array(
                        'success' => 'true',
                        'message' => 'Record Saved Successfully',
                    );
                } else {
                    $response = array(
                        'success' => 'false',
                        'message' => 'Failed to save Record'
                    );
                }
            } else {
                $message = '';
                $errors = $validator->errors();
                $response = array(
                    'success' => 'false',
                    'message' => $errors
                );
            }

        return json_encode($response);

    }

    public function get_beginner_challenge_data(){

        if(!empty(request('id'))){
            $instance = \App\BeginnerChallenge::where('id', request('id'))->first();
            $days= count($instance->beginnerChallengeDays);
            if($instance->uuid){
                $url = display_image('uploads/beginner_challenges/', $instance->image);
                $image = '<img src="'.$url.'" style="width:80px; height:80px; margin-top:-5px; border:2px solid #ccc; " class="style_image"">';
                $response = array(
                    'success' => 'true',
                    'rTitle' => $instance->title,
                    'rDescription'=> $instance->description,
                    'rLink'=> $instance->link,
                    'rDays'=> $days,
                    'rUuid'=>$instance->uuid,
                    'rImage'=> $image
                );
            }else{
                $response = array(
                    'success' => 'false',
                    'message'  => '<p class="alert alert-danger">Record not found.</p>'
                );
            }

        }else{
            $response = array(
                'success' => 'false',
                'message'  => '<p class="alert alert-danger">System failed to process request. Please try again later.</p>'
            );
        }
        echo json_encode($response);

    }

    public function edit_beginner_challenge(){
//            dd(\request()->all());
        $extDays = \App\BeginnerChallengeDay::where('beginner_challenge_id', request('uuid'))->get();
        $days_count = count($extDays);
//        dd($extDays);
        $link = request('link');
        if(!$link) {
            $rules = get_beginner_challenge_rules('edit');
        }else{
            $rules = get_beginner_link_rules('edit');
        }
        $messages = get_beginner_challenge_messages();
        $validator = Validator::make(request()->all(), $rules, $messages);
        if(!$validator->fails()){
            $is_title_exist = \App\BeginnerChallenge::where('title', request('title'))
                ->where('uuid', '!=', request('uuid') )->get();

            if(count($is_title_exist)==0){
                $challenge = \App\BeginnerChallenge::where('uuid', request('uuid'))->first();
                $chDays = \App\BeginnerChallengeDay::where('beginner_challenge_id', request('uuid'))->get();
//                dd($chDays);
                $filename = update_image('image', $challenge->image, 'uploads/beginner_challenges/');
                $challenge->title = request('title');
                $challenge->image = $filename;
                $challenge->description = request('description');
                $challenge->link = request('link');
                $challenge->time_duration = '222';
                $r_days = request()->days;
                if($challenge->save()){
                    if( $r_days > $days_count){
                        for($i=$days_count+1; $i <= $r_days; $i++ ){
                            $addDays = new \App\BeginnerChallengeDay();
                            $addDays->uuid = Str::uuid();
                            $addDays->beginner_challenge_id = $challenge->uuid;
                            $addDays->title = 'Day '.$i;
                            $addDays->save();
                        }
                    }elseif($r_days < $days_count){
                        $del_days = \App\BeginnerChallengeDay::where('beginner_challenge_id', request('uuid'))->delete();
                        if($del_days) {

                            for ($i = 1; $i <= $r_days; $i++) {
                                $addDays = new \App\BeginnerChallengeDay;
                                $addDays->uuid = Str::uuid();
                                $addDays->beginner_challenge_id = $challenge->uuid;
                                $addDays->title = 'Day '.$i;
                                $addDays->save();
                            }

                        }

                    }

                    $response = array(
                        'success'=> 'true',
                        'message'=> 'Record Update Successfully'
                    );
                }else{
                    $response = array(
                        'success'=> 'false',
                        'message'=> 'Failed to Update Record'
                    );
                }
            }
        }else{
            $message = '';
            $errors = $validator->errors();
            $response = array(
                'success'=> 'false',
                'message'=> $errors
            );

        }

        return json_encode($response);
    }

    public function beginner_blocks(){
        $data['title'] = 'BeginnerBlocks';
        $data['module'] = 'BeginnerChallengeBlock';
        $data['target'] = 'BeginnerChallengeBlock';
        $data['beginnerBlocks'] = \App\BeginnerChallengeBlock::orderBY('id','desc')->get();

        $data['beginnerChallenges']= \App\BeginnerChallenge::query()->whereNull('link')->orderBy('id', 'desc')->get();
        $data['beginnerDays']= \App\BeginnerChallengeDay::all();
        return view('admin.beginner.blocks', $data);
    }

    public function add_beginner_block(){

        $rules = get_challenge_block_rules('new');
        $messages = get_challenge_block_messages();
        $validator = Validator::make(request()->all(), $rules, $messages);

        if(!$validator->fails()){
            $is_block_exist = \App\BeginnerChallengeBlock::where('title', request()->title)
                ->where('beginner_challenge_day_id', '=', request()->challengeDays )->first();
//            dd($is_block_exist);
            if(!$is_block_exist) {
                $block = new \App\BeginnerChallengeBlock;
                $block->uuid = Str::uuid();
                $block->title = request()->title;
                $block->beginner_challenge_day_id = request()->challengeDays;
                if ($block->save()) {
                    $response = array(
                        'success' => 'true',
                        'message' => 'Record Saved Successfully',
                    );
                } else {
                    $response = array(
                        'success' => 'false',
                        'message' => 'Failed to save Record'
                    );
                }
            }else{
                $response = array(
                    'success'=> 'false',
                    'message'=> 'This title already exist again this workout'
                );
            }
        }else{
            $message = '';
            $errors = $validator->errors();
            $response =array(
                'success' => 'false',
                'message' => $errors
            );
        }
        return json_encode($response);

    }

    public function challenge_exercises(){
        $data['title'] = 'ChallengeExercises';
        $data['module'] = 'ChallengeExercise';
        $data['target'] = 'ChallengeExercise';
        $data['image']= 'challenge_exercises';
        $data['challengeExercises'] = \App\ChallengeExercise::orderBY('id','desc')->get();
        $data['challengeBlocks'] = \App\ChallengeBlock::orderBY('id','desc')->get();
        $data['challenges']= \App\Challenge::orderBy('id', 'desc')->get();
        $data['challengeDays']= \App\ChallengeDays::all();
        return view('admin.challenge_exercises',$data);
    }
    public function add_challenge_exercise(){
        $rules = get_challenge_exercise_rules('new');
        $messages = get_challenge_exercise_messages();
        $validator = Validator::make(request()->all(), $rules, $messages);
        if(!$validator->fails()){
            $filename = upload_image('image', 'uploads/challenge_exercises');
            $audio = upload_audio('audio', 'uploads/audios/');
            $exercise = new \App\ChallengeExercise;
            $exercise->uuid = Str::uuid();
            $exercise->title = request('title');
            $exercise->description = request('description');
            $exercise->exercise_time = request('exercise_time');
            $exercise->rest_time = request('rest_time');
            $exercise->challengeblock_id = request('challengeBlock');
            $exercise->image = $filename;
            $exercise->audio = $audio;
            if($exercise->save()){
                $response = array(
                    'success'=> 'true',
                    'message' => 'Record Saved Successfully'
                );
            }else{
                $response = array(
                    'success'=> 'false',
                    'message' => 'Failed to save record'
                );

            }

        }else{
            $message = '';
            $errors = $validator->errors();
            $response = array(
                'success' => 'false',
                'message' => $errors
            );
        }
        return json_encode($response);
    }
    public function get_challenge_exercise_data(){

        if(!empty(request('id'))){
            $instance = \App\ChallengeExercise::where('id', request('id'))->first();
            $block = $instance->challengeblock->uuid;
            $day = $instance->challengeblock->challengedays->uuid;
            $challenge = $instance->challengeblock->challengedays->challenge->uuid;
            if($instance->uuid){
                $url = display_image('uploads/challenge_exercises/', $instance->image);
                $image = '<img src="'.$url.'" style="width:80px; height:80px; margin-top:-5px; border:2px solid #ccc; " class="style_image"">';
                $response = array(
                    'success' => 'true',
                    'rTitle' => $instance->title,
                    'rDescription'=> $instance->description,
                    'rBlock' => $block,
                    'rChallenge'=> $challenge,
                    'rDay' => $day,
                    'rEXTime'=> $instance->exercise_time,
                    'rRestTime'=> $instance->rest_time,
                    'rUuid'=>$instance->uuid,
                    'rImage'=> $image,
                    'rAudio'=>$instance->audio,
                );
            }else{
                $response = array(
                    'success' => 'false',
                    'message'  => '<p class="alert alert-danger">Record not found.</p>'
                );
            }

        }else{
            $response = array(
                'success' => 'false',
                'message'  => '<p class="alert alert-danger">System failed to process request. Please try again later.</p>'
            );
        }
        echo json_encode($response);

    }
    public function edit_challenge_exercise(){
        $rules = get_challenge_exercise_rules('edit');
        $messages = get_challenge_exercise_messages();
        $validator = Validator::make(request()->all(), $rules, $messages);
        if(!$validator->fails()){

            $ins = \App\ChallengeExercise::where('uuid',request('uuid'))->first();
            $filename = update_image('image', $ins->image, 'uploads/challenge_exercises/');
            $audio = update_audio('audio', $ins->audio, 'uploads/audios/');

            $ins->title = request('title');
            $ins->description = request('description');
            $ins->challengeblock_id = request('block');
            $ins->exercise_time = request('exercise_time');
            $ins->rest_time = request('rest_time');
            $ins->image = $filename;
            $ins->audio = $audio;
            if($ins->save()){
                $response = array(
                    'success' => 'true',
                    'message' => 'Record Updated Successfully'
                );
            }else{
                $response = array(
                    'success' => 'false',
                    'message' => 'Failed to Update Record'
                );

            }

        }else{
            $message = '';
            $errors = $validator->errors();
            $response = array(
                'success' => 'false',
                'message' => $errors
            );
        }
        return json_encode($response);
    }
        public function delete_challenge(){

            $exercise= [];
            $challenge = \App\Challenge::where('uuid', request('uuid'))->first();

           $challengeBlocks = $challenge->challengeblocks;
           foreach ($challengeBlocks as $k=>$row) {
              $exer = $row->challengeexercises->modelKeys();
               ChallengeExercise::whereIn('id',$exer)->delete();

           }
            $days = $challenge->challengedays->modelKeys();

            $blocks = $challenge->challengeblocks->modelKeys();



            ChallengeBlock::whereIn('id', $blocks)->delete();
            ChallengeDays::whereIn('id', $days)->delete();
            Challenge::where('uuid', $challenge->uuid)->delete();
            return redirect()->back();

        }

        public function delete_challenge_block(){
        $block = \App\ChallengeBlock::where('uuid', request('uuid'))->first();
        if($block) {
            $exercises = $block->challengeexercises->modelKeys();
            if($exercises) {
                ChallengeExercise::whereIn('id', $exercises)->delete();
            }
            ChallengeBlock::where('uuid', $block->uuid)->delete();
        }
        return redirect()->back();
     }

    public function get_beginner_days($challenge = null){

        $challengeDays = \App\BeginnerChallengeDay::where('beginner_challenge_id', $challenge)->get();
        return json_encode($challengeDays);
    }

    public function get_beginner_day_blocks($day = null){
        $challengeBlocks = \App\BeginnerChallengeBlock::where('beginner_challenge_day_id', $day)->get();
        return json_encode($challengeBlocks);

    }



    public function delete_beginner_challenge(){

        $exercise= [];
        $challenge = \App\BeginnerChallenge::where('uuid', request('uuid'))->first();

        $challengeBlocks = $challenge->beginnerChallengeBlocks;
        if(sizeof($challengeBlocks) > 0) {
            foreach ($challengeBlocks as $k => $row) {
                $exer = $row->beginnerChallengEexercises->modelKeys();
                BeginnerChallengeExercise::whereIn('id',$exer)->delete();


            }

        }

        $days = $challenge->beginnerChallengeDays->modelKeys();

        $blocks = $challenge->beginnerChallengeBlocks->modelKeys();

//            $exercises = $workout->exercises->modelKeys();


        BeginnerChallengeBlock::whereIn('id', $blocks)->delete();
        BeginnerChallengeDay::whereIn('id', $days)->delete();
        BeginnerChallenge::where('uuid', $challenge->uuid)->delete();
        return redirect()->back();

    }

    public function delete_beginner_block(){
        $block = \App\BeginnerChallengeBlock::where('uuid', \request('uuid'))->first();
        $exercises = $block->beginnerChallengEexercises->modelKeys();

        BeginnerChallengeExercise::whereIn('id', $exercises)->delete();
        BeginnerChallengeBlock::where('uuid', $block->uuid)->delete();
        return redirect()->back();

    }

    public function change_password(){
        $email = 'jumpinshape@gmail.com';
        $pass = '123456789';
        $n_pass = 'admin12345';
        $cnf_pass = 'admin12345';
//        $rules = get_change_password_rules();
//        $messages = get_change_password_messages();
//        $validator  = Validator::make(\request()->all(), $rules, $messages);
//        if(!$validator->fails()){
            $ins = \App\User::where('email',$email)->first();
             $hash_pass = Hash::check($pass, $ins->password);


//            $pass = request('password');
//            $cnf_pass = request('c_password');
            if($hash_pass && $n_pass != $pass && $n_pass == $cnf_pass) {
                $ins->password = Hash::make($n_pass);
                $ins->password_enc = bcrypt($n_pass);
                if ($ins->save()) {
                    $response = array(
                        'success' => 'true',
                        'message' => 'Password Changed Successfully'
                    );
                }
            }else{
                $response = array(
                    'success'=> 'false',
                    'message'=> 'Failed to Change Password'
                );
            }

//
//        }else{
//            $message = "";
//            $errors = $validator->errors();
//            $response = array(
//                'success'=>'false',
//                'message' => $errors
//            );
//        }

            return json_encode($response);
    }

//
        public function delete_record(){
        $model = '\\App\\'.request('target');
        $get_id = $model::where('uuid', request('uuid'))->first();
//        dd($get_id);
//        $challenges = '\App\Challenge';
//        $beginnerChallenge =  '\App\BeginnerChallenge';
//            if($model == $challenges ){
//                $days = \App\ChallengeDays::where('challenge_id', $get_id->uuid)->delete();
//            }
//            if($model == $beginnerChallenge ){
//                $days = \App\BeginnerChallengeDay::where('beginner_challenge_id', $get_id->uuid)->delete();
//            }
            if($get_id){
            $instance = $model::destroy($get_id->id);
            if($instance){

//                $get_id->updated_by = auth::guard('admins')->user()->uuid;
//                $get_id->deleted_by = auth::guard('admins')->user()->uuid;
                $get_id->save();

                $response = array(
                    'success' => 'true',
                    'message'  => 'Record has been moved to trash successfully.',
                );
            }else{
                $response = array(
                    'success' => 'false',
                    'message'  => 'System failed to process request. Please try again later'
                );
            }
        }else{
            $response = array(
                'success' => 'false',
                'message'  => 'Record not found'
            );
        }

        return redirect()->back()->with('response',$response);
    }
}
