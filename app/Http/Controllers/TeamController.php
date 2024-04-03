<?php

namespace App\Http\Controllers;

//use App\Models\Teams;
use App\Models\teams_table;
use Illuminate\Http\Request;

    //this is the controller file to handle all the team related information and team table
class TeamController extends Controller
{
    public function CreationofTeam()
    {
        return view('Teams/teamCreation');
    }

    public function storageofTeam(Request $request)
    {
        //validation part
        $request->validate([
            'teamname' => 'required',
            // 'teamdescription' => 'required',
            'teamimage' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        //uploading part
        $imageName = time().'.'.$request->teamimage->extension();
        $request->teamimage->move(public_path('teamimages'),$imageName);
        $team = new teams_table();
        $team->teamname = $request->teamname;
        //$team->teamdescription = $request->teamdescription;
        $team->teamimage = $imageName;

        $team->save();
        dd($request->all());
    }
}
