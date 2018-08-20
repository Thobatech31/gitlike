<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use DataTables;

class ProjectDatabaseController extends Controller
{
          public function getData(){
        return view('databaseData.projectDatabase');
        
    }

    public function fetchData(){
        $Projects = Project::all();
        return DataTables::of($Projects)
   //     ->addColumn('action', function ($Project){
     //       return '<a href="#edit-'.$Project->id.'"  style="background-color:blue; color:white; font-weight:bold; text-decoration:none;">
      //      Edit</a>'.'<a href="#delete-'.$Project->id.'" style="background-color:red; margin-left:8px; font-weight:bold; color:white; text-decoration:none;">
      //      Delete</a>';
      //  })
        ->make(true);
        
    }
}
