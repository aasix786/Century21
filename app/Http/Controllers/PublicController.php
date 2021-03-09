<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){

        return view('user.index');
    }
    public function agence_cedimmo(){

        $members = Team::all();
        return view('user.agence-cedimmo', compact('members'));
    }
}
