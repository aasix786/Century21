<?php

namespace App\Http\Controllers;

use App\BeginnerChallenge;
use App\Challenge;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use Mail;
use Hash;
use App\Workout;
use App\Weight;
class ApiController extends Controller
{
    //
    public function register(){

        $rules = get_register_rules('new');
        $messages = get_register_messages();
        $Validator = Validator::make(request()->all(), $rules, $messages);
        if(!$Validator->fails()){
            $instance = new \App\Customer;
            $instance->uuid = Str::uuid();
            $instance->f_name = request('f_name');
            $instance->l_name = request('l_name');
            $instance->email = request('email');
            $instance->password = bcrypt(request('password'));
            $instance->password_enc = encrypt(request('password'));
            $instance->type = request('type');
            $instance->status = 'active';

            if($instance->save()){
                $setting = new \App\Setting;
                $setting->uuid = Str::uuid();
                $setting->user_id = $instance->uuid;
                $setting->ropes = 'Infinity rope';
                $setting->workouts = 'New Workout';
                $setting->warm_ups = '1';
                $setting->videos= '1';
                $setting->reviews ='1';
                $setting->sound = '1';
                $setting->voice_gender = 'gender voice';
                $setting->voice_level = '0';
                $setting->beep = '0';
                $setting->save();
//                $data['title'] = "Account Confirmation";
//                $data['f_name'] = request('f_name');
//                $data['l_name'] = request('l_name');
//                $data['email'] = request('email');
//                $data['link'] = route('confirmAccount', ['link' =>  $instance->uuid]);
//                $data['text_message'] = 'Please click the following link to confirm your account.';
//                $data['btn_text'] = 'Confirm Account';
//
//                    Mail::send('site/template', $data, function ($message) use ($data) {
//
//                    $message->to($data['email'], $data['f_name'])
//                   ->subject( 'Elite Discount -  Account Confirmation' );
//                });
//
//                if(Mail::failures()){
//                    return response()->json([
//                        'response'=>'error',
//                        'message' => 'Failed to send email. Please try again later'
//                    ]);
//                }
//                else{
                return response()->json([
                    'response' => 'success',
                    'uuid'=> $instance->uuid,
                    'f_name'=> $instance->f_name,
                    'email'=> $instance->email,
                    'status'=> $instance->status,
//                    'message' => 'Hi '.$data['f_name']. ' An email has been sent to your registered email address',
                ], 200);
//            }


        }else{
            return response()->json([
                'repsonse' => 'error',
                'message' => 'Failed to send email. Please Try again later'
            ]);

        }
    }
        else{
            $message = '';
            $errors = $Validator->errors();
            foreach($errors->all() as $msg){
                $message = $msg;
                break;
            }
            return response()->json([
                'response' => 'error',
                'message' => $message,
            ], 404);

        }


    }


    public function login(){


    if(!empty(request('type')) && !empty(request('email'))){

        $query = \App\Customer::where('email', request('email'))->first();

        if($query){

            if($query->type == request('type')){
                return response()->json([
                    'response' => 'success',
                    'message' => 'Logged In'
                ]);
                }else{
                    return response()->json([
                        'response' => 'error',
                        'message' => 'Login Exrror'
                    ]);
                }
        }else{
            return response()->json([
                'response' => 'error',
                'message' => 'No Record Found'
            ]);
        }

            }else{
                if(!empty(request('email')) && !empty(request('password'))){
                $query = \App\Customer::where('email', request('email'))->first();

                if(!empty($query) && $query->status == 'active' && Hash::check(request('password'), $query->password )){
                        $setting = \App\Setting::where('user_id', $query->uuid)->first();

                    return response()->json([

                        'response' => 'success',
                        'uuid'=> $query->uuid,
                        'f_name'=> $query->f_name,
                        'l_name'=> $query->l_name,
                        'type' => $query->type,
                        'email'=> $query->email,
                        'status'=> $query->status,
                        'setting'=>$setting,
                        'message' => 'Login Successfully'

                        ], 200);


                    }else{

                    $message = 'Access Denied';
                    if($query->status == 'blocked'){

                        $message = 'Your account has been blocked by admin.';
                    }
                    else if( $query->status == 'deleted'){
                        $message = 'Your account has been deleted by admin.';
                    }
                    return response()->json([
                        'response' => 'error',
                        'message' => $message
                    ]);
                    }

                }else{
                    return response()->json([

                        'response' => 'error',
                        'message' => 'Fill all required fields'

                    ]);
                }
            }
    }


    public function forgot_password(){

        if(!empty(request('email'))){

            $query = \App\Customer::where('email', request('email'))->first();

            if(!empty($query)){
                $random = substr(mt_rand(), 0, 6);
                $query->passcode = $random;
                if($query->save()){
                    $data['title'] = 'Reset Password';
                    $data['f_name'] = $query->f_name;
                    $data['l_name'] = $query->l_name;
                    $data['email'] = $query->email;
                    $data['text_message'] = 'Please use the following code to reset the password.';
                    $data['btn_text'] = $random;
                    Mail::send('site.passcode', $data, function ($message) use ($data) {

                        $message->to($data['email'], $data['f_name'])
                        ->subject('Reset Password');

                    });
                    if(Mail::failures()){

                        return response()->json([
                            'response' => 'error',
                            'message' => 'Failed to send mail. Try again later'
                        ]);

                    }else{
                        return response()->json([
                            'response' => 'success',
                            'message' => 'An email with a code has been sent to you. Use the recieved code to reset your account password',
                            'password_code'=> $random
                        ]);
                    }
                }else{

                    return response()->json([
                        'response' => 'error',
                        'message' => 'Failed to process. Try again later'
                    ]);

                   }
            }else{

                return response()->json([
                    'response' => 'error',
                    'message' => 'Email not found'
                ]);

            }

        }else{
            return response()->json([
                'response' => 'error',
                'message' => 'Enter Email Address'
            ]);
        }

    }

    public function check_passcode(){
        if(!empty(request('email'))){
            $ins = \App\Customer::where('email', request('email'))->first();

                if(!empty($ins)){

                    if(!empty(request('passcode'))){

                        //$query  = \App\Customer::where('password_code', request('passcode'))->get();
                        if(request('passcode') != $ins->passcode){
                        return response()->json([
                            'response' => 'error',
                            'message' => 'Passcode Incorrect'
                        ]);
                        }else{

                            return response()->json([
                                'response' => 'success',
                                'message' => 'Set New Password'
                            ]);

                        }
                    }else{
                        return response()->json([
                            'response' => 'error',
                            'message' => 'Passcode Required'
                        ]);
                    }
                }else{
                    return response()->json([
                        'response' => 'errow',
                        'message' => 'No such email found'
                    ]);
                }

        }else{
            return response()->json([
                'response' => 'error',
                'message' => 'Email field is required'
            ]);
        }
    }

    public function add_workout(){

        $rules = get_workout_rules('new');
        $messages = get_workout_messages();
        $Validator = Validator::make(request()->all(), $rules, $messages);
        if(!$Validator->fails()){
        $workout = new \App\Workout;
        $workout->uuid = Str::uuid();
        $workout->title = request('title');
        $workout->level = request('level');
        $workout->type = request('type');
        $workout->time_duration = '12 Min';
        $workout->rating = '3';

        if($workout->save()){

            return response()->json([
                'response' =>  'success',
                'message' => 'Workout Created Successfully',
                'data' => $workout
            ], 200 );

        }else{

            return response()->json([
                'response' =>  'error',
                'message' => 'Workout Created Successfully',
            ], 400 );

        }

    }else{

        $message = '';
        $errors = $Validator->errors();
        foreach($errors->all() as $msg){
            $message = $msg;
            break;
        }
        return response()->json([
            'response' => 'error',
            'message' => $message,
        ], 404);

    }
    }


    public function add_weigth(){

        if(!empty(request('workout_id'))){

            $workout = \App\Workout::where('uuid', request('workout_id'))->first();

            if(!$workout){

                return response()->json([
                    'response' => 'error',
                    'message' => 'Workout Not Found',
                ], 400);


            }else{

                $rules = get_weight_rules('new');
                $messages = get_weight_messages();
                $Validator = Validator::make(request()->all(), $rules, $messages);
                if(!$Validator->fails()){
                $is_workout_exist = \App\Weight::where('workout_id', $workout->uuid)
                                ->where('title', request('title'))->first();

                if (!$is_workout_exist){

                    $weight = new \App\Weight;
                    $weight->uuid = Str::uuid();
                    $weight->title = request('title');
                    $weight->workout_id = $workout->uuid;
                    $weight->colour = '#fff';

                    if($weight->save()){

                        return response()->json([
                            'response' => 'success',
                            'message' => 'Weight for workout saved successfully',
                            'data' => $weight
                        ], 200);

                    }else{

                        return response()->json([
                            'response' => 'error',
                            'message' => 'Weight Not Saved',
                        ], 400);


                    }
                }else{

                    return response()->json([
                        'response' => 'error',
                        'message' => 'This Weight already exists for this workout',
                    ], 400);

                }


            }else{

                $message = '';
                $errors = $Validator->errors();
                foreach($errors->all() as $msg){
                    $message = $msg;
                    break;
                }
                return response()->json([
                    'response' => 'error',
                    'message' => $message,
                ], 404);

            }
        }

        }else{
            return response()->json([
            'response' => 'error',
            'message' => 'Workout Required',
            ]);
            }

    }


    public function add_block(){

            $rules = get_block_rules('new');
            $messages = get_block_messages();
            $Validator = Validator::make(request()->all(), $rules, $messages);
            if(!$Validator->fails()){

                $weight = \App\Weight::where('uuid', request('weight_id'))->first();

                if(!$weight){
                    return response()->json([
                        'response'=>'error',
                        'message'=>'Block require some Weight'
                    ]);
                }else{
                    $is_weight_exist = \App\Block::where('weight_id', $weight->uuid)
                                        ->where('title', request('title'))->first();
                    if(!$is_weight_exist){
                        $block = new \App\Block;
                        $block->uuid = Str::uuid();
                        $block->weight_id = $weight->uuid;
                        $block->title = request('title');
                        if($block->save()){

                            return response()->json([
                                'response'=> 'success',
                                'message'=> 'Block Saved Successfully'
                            ]);
                        }else{
                            return response()->json([
                                'response'=> 'error',
                                'message'=> 'Failed to Save Block'
                            ]);
                        }

                    }else{
                        return response()->json([
                            'response'=> 'error',
                            'message'=> 'This title already exist for this weight'
                        ]);
                    }
                }
            }else{
                 $message = '';
                 $errors = $Validator->errors();
                 foreach($errors->all() as $msg){
                    $message = $msg;
                    break;
                }
                return response()->json([
                    'response' => 'error',
                    'message' => $message,
                ], 404);
        }


    }

    public function add_exercise(){

        $rules = get_exercise_rules('new');
        $messages = get_exercise_messages();
        $Validator = Validator::make(request()->all(), $rules, $messages);
        if(!$Validator->fails()) {
            $block = \App\Block::where('uuid', request('block_id'))->first();
            if($block){
                    $exercise = new \App\Exercise;
                    $exercise->uuid = Str::uuid();
                    $exercise->block_id = $block->uuid;
                    $exercise->description = request('description');
                    $exercise->image = upload_image('image', 'public/uploads/exercise');
                    $exercise->exercise_time = request('exercise_time');
                    $exercise->rest_time = request('rest_time');
                    if($exercise->save()){
                        return response()->json([
                            'response'=>'success',
                            'message' => 'Exercise Add Successfully'
                        ]);
                    }else{
                        return response()->json([
                            'response'=>'error',
                            'message' => 'Failed to save exercise'
                        ]);
                    }

            }else{
                return response()->json([
                    'response'=>'error',
                    'message' => 'No Block found'
                ]);
            }

        }else{
               $validateMsg =  validate($Validator);
               return $validateMsg;
        }
    }

    public function get_exercises(){

        $workout = \App\Workout::where('uuid', \request('workout'))->first();
        if ($workout){
            $workout->image = "uploads/workout/".$workout->image;
        }
        if(!$workout){
            return response()->json([
               'response'=>'error',
               'message'=>'No Record Found'
            ]);
        }else {
//            $weight = $workout->weights()->get();

            $workout_blocks = $workout->blocks()->get();

            foreach ($workout_blocks as $block) {
                $res = $block->exercises()->get();
                if (sizeof($res) > 0){
                    foreach ($res as $rr){
                        $rr['image'] = "uploads/exercise/".$rr->image;

                    }
                }
                $block['exercises'] = $res;
            }
            return response()->json([
                'response' => 'success',
                'message' => 'Record Found',
                'workout' => $workout,
                'blocks' => $workout_blocks
            ]);
        }
    }

        public function get_workouts(){
        $workouts = \App\Workout::orderBy('id', 'desc')->get();
        foreach ($workouts as $k=>$row){
            $row['image'] = display_image('uploads/workout/',$row->image);
            $row['creation_date'] = Carbon::parse($row->created_at)->format('d M,Y');

        }
        return response()->json([
           'response'=> 'success',
           'data'=> $workouts
        ]);

    }

    public function get_workout_exercise(){
    $workout = \App\Workout::where('uuid',\request('workout'))->first();
    if($workout){
        $exercise = $workout->exercises()->get();
     $arr = [];
     $total_time = 0;
        if (sizeof($exercise) > 0){
            foreach($exercise as $key => $ex){
                if ($ex->rest_time > 0){
                    $total_time = $total_time + ($ex->rest_time + $ex->exercise_time);
                    array_push($arr,$ex);
                    $obj = ['id' => $key+1, 'description'=>'Rest', 'exercise_time' => $ex->rest_time , 'audio' => 'uploads/audios/run.mp3'];
                    array_push($arr,$obj);

                }
                $ex['done'] = false;
                $ex['creation_date'] = Carbon::parse($ex->created_at)->format('d M,Y');
            }
        }
        $init = $total_time;
        $hours = floor($init / 3600);
        $hour_min = $hours * 60;
        $minutes = floor(($init / 60) % 60) + $hour_min;
        $seconds = $init % 60;
        return response()->json([
           'response'=>'success',
           'data'=> $arr,
           'total_time'=> $minutes.":".$seconds
        ]);
        }
        else{
            return response()->json([
                'response'=>'error',
                'message'=>'No Workout Found'
            ]);
       }
    }

    public function get_challenges(){
        $challenges = Challenge::orderBy('id', 'desc')->get();
        foreach ($challenges as $k=> $row){
            $row['image'] = display_image('uploads/challenge/',$row->image);
        }
        return response()->json([
            'response'=> 'success',
            'data'=> $challenges
        ]);
    }

    public function get_challenge_exercises(){
        $arr = [];
        $total_time = 0;
        $challenge = \App\Challenge::where('uuid', request('challenge'))->first();
        if($challenge){
            $challenge->image = 'uploads/challenge/'.$challenge->image;
            $challengeDays = $challenge->challengedays()->get();

            foreach($challengeDays as $k=>$row){
                $dayBlocks = $row->challengeblocks()->get();
                if(sizeof($dayBlocks)> 0){
                    foreach($dayBlocks as $b =>$block){
                        $exercises = $block->challengeexercises()->get();
                        if(sizeof($exercises) > 0) {
                            foreach ($exercises as $key => $exercise) {
                                if ($exercise->rest_time > 0){
                                    $total_time = $total_time + ($exercise->rest_time + $exercise->exercise_time);
                                    $exercise['r_id'] = rand();
                                    array_push($arr,$exercise);
                                    $obj = ['id' => $key+1,'r_id' => rand(), 'description'=>'Rest', 'rest_time' => $exercise->rest_time];
                                    array_push($arr,$obj);

                                }
                                $exercise['image'] = "uploads/challenge_exercises/" . $exercise->image;
                                $exercise['done'] = false;
                                $exercise['creation_date'] = Carbon::parse($exercise->created_at)->format('d M,Y');

                            }
                        }
                        $block['exercises'] = $exercises;
                    }
                }
                $row['block'] = $dayBlocks;
                $row['title_challenge'] = $challenge->title;
            }

            $init = $total_time;
            $hours = floor($init / 3600);
            $hour_min = $hours * 60;
            $minutes = floor(($init / 60) % 60) + $hour_min;
            $seconds = $init % 60;
            return response()->json([
                'response'=>'success',
                'challenge'=>$challenge,
                'challenegeData'=> $challengeDays,
                'data'=> $arr,
                'total_time'=> $minutes.":".$seconds
                ]);

        }else{
            return response()->json([
                'response'=>'error',
                'message'=>'Record Not Found'
            ]);
        }
    }

    public function get_beginner_challenges(){
        $beginnerChallenges = BeginnerChallenge::orderBy('id', 'desc')->where('link','=', null)->get();
        foreach ($beginnerChallenges as $k=> $row){
            $row['image'] = display_image('uploads/beginner_challenges/',$row->image);
        }
        $beginnerTutorials = [];

        $setting = \App\Setting::where('user_id', request('user_id'))->first();
        if($setting && $setting->videos == '1'){
            $beginnerTutorials = BeginnerChallenge::orderBy('id', 'desc')->where('link','!=', null)->get();
            foreach ($beginnerTutorials as $t => $row){
                $row['image'] = display_image('uploads/beginner_challenges/',$row->image);
            }
        }


        return response()->json([
            'response'=> 'success',
            'data'=> [
                'beginnerChallenges' => $beginnerChallenges,
                'beginnerTutorials' => $beginnerTutorials
            ]
        ]);

    }

    public function get_beginner_exercises(){
        $arr = [];
        $total_time = 0;
        $challenge = \App\BeginnerChallenge::where('uuid', request('challenge'))->first();
        if($challenge){
            $challenge->image = 'uploads/beginner_challenges/'.$challenge->image;
            $challengeDays = $challenge->beginnerChallengeDays()->get();

            foreach($challengeDays as $k=>$row){
                $dayBlocks = $row->beginnerChallengeBlocks()->get();
                if(sizeof($dayBlocks)> 0){
                    foreach($dayBlocks as $b =>$block){
                        $exercises = $block->beginnerChallengEexercises()->get();
                        if(sizeof($exercises) > 0) {
                            foreach ($exercises as $key => $exercise) {
                                if ($exercise->rest_time > 0){
                                    $total_time = $total_time + ($exercise->rest_time + $exercise->exercise_time);
                                    $exercise['r_id'] = rand();
                                    array_push($arr,$exercise);
                                    $obj = ['id' => $key+1,'r_id' => rand(), 'description'=>'Rest', 'rest_time' => $exercise->rest_time];
                                    array_push($arr,$obj);

                                }
                                $exercise['image'] = "uploads/beginner_challenge_exercises/" . $exercise->image;
                                $exercise['done'] = false;
                                $exercise['creation_date'] = Carbon::parse($exercise->created_at)->format('d M,Y');

                            }

                        }
                        $block['exercises'] = $exercises;
                    }
                }
                $row['block'] = $dayBlocks;
                $row['title_challenge'] = $challenge->title;
            }

            $init = $total_time;
            $hours = floor($init / 3600);
            $hour_min = $hours * 60;
            $minutes = floor(($init / 60) % 60) + $hour_min;
            $seconds = $init % 60;

            return response()->json([
                'response'=>'success',
                'challenge'=>$challenge,
                'challenegeData'=> $challengeDays,
                'data'=> $arr,
                'total_time'=> $minutes.":".$seconds
            ]);

        }else{
            return response()->json([
                'response'=>'error',
                'message'=>'Record Not Found'
            ]);
        }
    }

    public function settings(){


        if(!empty(request('user_id'))){

            $ins = \App\Customer::where('uuid', request('user_id'))->first();

            if($ins->status == 'active'){

                // $result = \App\Setting::find($ins->uuid);
                $setting= \App\Setting::where('user_id', $ins->uuid)->first();

                if($setting){

                    $setting->ropes = request('ropes');
                    $setting->workouts = request('workouts');
                    $setting->warm_ups = request('warm_ups');
                    $setting->videos = request('videos');
                    $setting->reviews = request('reviews');
                    $setting->sound = request('sound');
                    $setting->voice_gender = request('voice_gender');
                    $setting->voice_level = request('voice_level');
                    $setting->beep = request('beep');
                    if($setting->update()){
                        $setting_after = \App\Setting::where('user_id', $ins->uuid)->first();
                        return response()->json([
                            'response' => 'success',
                            'message' => 'Setting Saved successfully',
                            'data' => $setting_after
                        ]);
                    }else{
                        return response()->json([
                            'response' => 'error',
                            'message' => 'Failed to Save Settings',
                        ]);
                    }
                }

                }else{
                        return response()->json([
                            'response' => 'error',
                            'message' => 'User is not Active',
                        ]);
                }

                }else{
                         return response()->json([
                        'response' => 'error',
                        'message' => 'User is requried',
                    ]);
                 }

    }

    public function update_profile(){
        $user = \App\Customer::where('uuid',\request('user_id'))->first();
        if($user){
            $user->f_name = request('name');
            $user->gender = request('gender');
            $user->age =    request('age');
            $user->height = request('height');
            $user->inches = \request('inches');
            $user->weight = request('weight');
            $user->metric = request('metric');
            if($user->save()){
                return response()->json([
                    'response'=>'success',
                    'message'=>'Record Saved Successfully',
                ]);
            }else{
                return response()->json([
                    'response'=>'error',
                    'message'=>'Record Not Saved',
                ]);
            }
        }else{
            return response()->json([
                'response'=>'error',
                'message'=>'Record Not found'
            ]);
        }
    }


}
