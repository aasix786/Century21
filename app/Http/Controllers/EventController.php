<?php

namespace App\Http\Controllers;

use App\InformationEvening;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $events = InformationEvening::all();
        return view('Events.event', compact('events'));
    }
    public function add_event (){

        return view('Events.addEvent');
    }
    public function submit_event(Request $request){
        $title = $request->input('title');
        $date = $request->input('date');
        $time = $request->input('time');
        $description = $request->input('description');



        $add_event = InformationEvening::create([
            'title' => $title,
            'date' => $date,
            'time' => $time,
            'description' => $description,
        ]);
        if ($add_event){
            return redirect('/information-evening');
        }else{
            return redirect()->back();
        }
    }
}
