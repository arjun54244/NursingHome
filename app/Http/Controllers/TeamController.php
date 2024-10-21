<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $doctors = Team::all();
        return view('team', compact('doctors'));
    }

    public function show($slug){
        $doctor = Team::where('slug', $slug)->first();
        return view('team-details', compact('doctor'));
    }
}
