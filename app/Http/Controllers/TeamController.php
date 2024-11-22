<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $doctors = Team::orderByRaw("FIELD(id, 4, 8, 2, 1, 3, 5, 6,7)")->get();
        return view('team', compact('doctors'));
    }

    public function show($slug){
        $doctor = Team::where('slug', $slug)->first();
        return view('team-details', compact('doctor'));
    }
}
