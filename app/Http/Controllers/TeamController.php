<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){

        $members = Team::all();
        return view('Teams.team', compact('members'));
    }
    public function add_member(){

        return view('Teams.addteam');
    }
    public function submit_member(Request $request){
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $domain = $request->input('domain');
        $rank = $request->input('rank');
        $email = $request->input('email');
        $profile_photo = $request->file('image');


        if (isset($profile_photo) && !empty($profile_photo)) {
            $extension = $profile_photo->guessExtension();
            $file_name = "_Profile_" . time() . "." . $extension;
            $profile_photo->move('uploads/', $file_name);
            $profile_photo_path= 'uploads/'.$file_name;
        }//end if
        else{
            $profile_photo_path = "";
        }


        $add_member = Team::create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'domain' => $domain,
            'rank' => $rank,
            'email' => $email,
            'image' => $profile_photo_path,
        ]);
        if ($add_member){
            return redirect('/team');
        }else{
            return redirect()->back();
        }
    }

}
