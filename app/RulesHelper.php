<?php

function get_register_rules($action){
	if($action == 'new'){
		return array(

			'email' => 'required|email|max:191|unique:users',
			'password' => 'required|max:191',
		);
     }

}

function get_register_messages(){
	return array(
		'f_name.required' => ' Name is required.',
		'email.required' => 'Email is required.',
        'email.unique' => 'This email already exists.',
        'email.email' =>  'Enter a valid email address.',
		'password.required' => 'Password is required.',
		'c_password.required' => 'Current password is required.',
		'n_password.required' => 'New password is required.',
	);
}

function get_workout_rules($action){
	if($action == 'new'){
		return array(
			'title' => 'required|max:191|unique:workouts',
			'level' => 'required',
			'type' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
			// 'time_duration' => 'required'
		);
     }else{
	    return array(
	        'title'=> 'required|max:191',
	        'level' => 'required',
            'type' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
        );
    }

}
function get_challenge_rules($action){
    if($action == 'new'){
        return array(
            'title' => 'required|max:191|unique:challenges',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'description'=> 'required',
            'days'=>'required|numeric|min:1|max:100'
            // 'time_duration' => 'required'
        );
    }else{
        return array(
            'title'=> 'required|max:191',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'description'=> 'required',
            'days'=>'required|numeric|min:1|max:100'


        );
    }

}

function get_beginner_challenge_rules($action){
    if($action == 'new'){
        return array(
            'title' => 'required|max:191|unique:challenges',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
//            'description'=> 'required',
            'days'=>'required|numeric|min:1|max:100'
            // 'time_duration' => 'required'
        );
    }else{
        return array(
            'title'=> 'required|max:191',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
//            'description'=> 'required',
            'days'=>'required|numeric|min:1|max:100'


        );
    }

}
function get_beginner_link_rules($action){
    if($action == 'new'){
        return array(
            'title' => 'required|max:191|unique:challenges',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'link'=>'required|url'
//            'description'=> 'required',
//            'days'=>'required|numeric|min:1|max:100'
            // 'time_duration' => 'required'
        );
    }else{
        return array(
            'title'=> 'required|max:191',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
//            'description'=> 'required',
            'link'=>'required|url'


        );
    }
}
function get_challenge_messages(){
    return array(
        'title.required' => ' Title is required.',
        'title.unique' => 'This title already exists.',
        'description.required'=> 'Description Required',
        'days.required'=> 'Days Required',
        'days.numeric'=> 'Days Must be a number',
        'days.min'=> 'Minimun day must be 1',
        'days.max'=> 'You can select maximum 100 days'
        // 'time_duration.required' => 'Workout time duration is required.',

    );
}

function get_beginner_challenge_messages(){
    return array(
        'title.required' => ' Title is required.',
        'title.unique' => 'This title already exists.',
//        'description.required'=> 'Description Required',
        'days.required'=> 'Days Required',
        'days.numeric'=> 'Days Must be a number',
        'days.min'=> 'Minimun day must be 1',
        'days.max'=> 'You can select maximum 100 days'
        // 'time_duration.required' => 'Workout time duration is required.',

    );
}





function get_workout_messages(){
    return array(
        'title.required' => ' Workout title is required.',
        'level.required' => 'Workout level is required.',
        'title.unique' => 'This title already exists.',
        'type.required' => 'Workout type is required.',
        // 'time_duration.required' => 'Workout time duration is required.',

    );
}



function get_block_rules($action){
	if($action == 'new'){
		return array(
			'title' => 'required|max:191',
            'workout'=>'required'

		);
     }else{
        return array(
            'title' => 'required|max:191',
            'workout'=>'required'

        );
    }

}

function get_block_messages(){
	return array(
		'title.required' => ' Title is required.',
        'workout.required' => 'Workout is required to add block.',

	);
}

function get_challenge_block_rules($action){
    if($action == 'new'){
        return array(
            'title' => 'required|max:191',
            'challenge'=>'required',
            'challengeDays'=> 'required',

        );
    }else{
        return array(
            'title' => 'required|max:191',
            'challenge'=>'required',
            'challengeDays'=> 'required',

        );
    }

}

function get_challenge_block_messages(){
    return array(
        'title.required' => ' Title is required.',
        'challenge.required' => 'Challenge is required to add block.',
        'challengeDays.required' => 'Select Days'

    );
}

function get_challenge_exercise_rules($action){
    if($action == 'new'){
        return array(
            'title' => 'required|max:191',
            'challenge'=>'required',
            'challengeDays'=> 'required',
            'challengeBlock'=>'required',
            'description' => 'required',
            'exercise_time'=>'required',
            'audio' =>'nullable|file|mimes:mp3'

        );
    }else{
        return array(
            'title' => 'required|max:191',
            'challenge'=>'required',
            'day'=> 'required',
            'block'=>'required',
            'description' => 'required',
            'exercise_time'=>'required',
            'audio' =>'nullable|file|mimes:mp3'

        );
    }

}

function get_challenge_exercise_messages(){
    return array(
        'title.required' => ' Title is required.',
        'challenge.required' => 'Challenge is required to add block.',
        'challengeDays.required' => 'Select Day',
        'challengeBlock.required' => 'Select Block',
        'description.required'=> 'Enter Description',
        'exercise_time.required'=> 'Enter Exercise Time',
        'audio.mimes'=>'Audio should be of format MP3'

    );
}


function get_exercise_rules($action){
    if($action == 'new'){
        return array(
            'workout' => 'required',
            'block' => 'required',
            'description' => 'required',
            'exercise_time' => 'required|numeric|min:0',
            'rest_time'=> 'numeric|min:0',
            'audio' =>'nullable|file|mimes:mp3'

        );
    }else{
        return array(
            'workout' => 'required',
            'block' => 'required',
            'description' => 'required',
            'exercise_time' => 'required|numeric|min:0',
            'rest_time'=> 'numeric|min:0',
            'audio' =>'nullable|file|mimes:mp3'


        );

    }

}

function get_exercise_messages(){
    return array(
        'workout.required' => ' Workout is required to add exercise.',
        'block.required' => ' Select Block in which you want to add exercise.',
        'description.required' => ' Description is required.',
        'exercise_time.required' => 'Exercise time can not be empty.',
    );
}

function get_change_password_rules(){
    return array(
    'email'=> 'required',
    'password'=>'required',
    'n_password'=> 'required|min:6|',
    'c_password' => 'required|min:6|required_with:n_password|same:n_password',
    );
}

function validate( $Validator ){
//    $message = '';
    $errors = $Validator->errors();

    return $errors;
}


?>
