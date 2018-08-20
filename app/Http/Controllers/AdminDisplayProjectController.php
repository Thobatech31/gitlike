<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class AdminDisplayProjectController extends Controller
{
    public function index()
    {
        //
        //$project=Project::where('id', $project->id);
    // $project=Project::all();

    // $comments=$project->comments;
      //        $filedata = File::where('project_id', $project->id)->get();

       return view('adminfolder.deleteUser');
    }

    public function run(){
        return view('adminfolder.runProject');
    }
}
