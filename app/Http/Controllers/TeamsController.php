<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
class TeamsController extends Controller
{
   public function index()
   {
       return view('teams');
   } 

   public function create()
   {
        return view('teamcreation');
   }
   public function show(Request $request)
   {
       $date  = $request -> validate([
           'team_name' => 'required',
           
       ]);
       $newteam = Teams::create($date);
   }

   //to store data through model into database
       
}
