<?php

namespace App\Http\Controllers\Teams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teams\Roles;

class TeamController extends Controller
{
    
    public function index(Request $request){

        $teams = $request->user()->teams;

        return view('teams.index',compact('teams'));
    }
    public function show(){

        return view('teams.show');
    }
    public function store(Request $request){

        // dd($request);
        $this->validate($request,[
            'name' => 'required'
        ]);

        $user = $request->user();
        // dd($user);
        $team = $user->teams()->create($request->only('name'));
        $user->attachRole(Roles::$roleWhenCreating,$team->id);
        return redirect()->route('teams.index');
       
    }


}
