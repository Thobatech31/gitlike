<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usertable;
use DataTables;

class UserDatabaseController extends Controller
{
     public function getData(){
        return view('databaseData.trainingtabledata');
        
    }

     public function fetchData(){
        $trainingtable = trainingtable::all();
        return DataTables::of($trainingtable)
     //   ->addColumn('action', function ($trainingtable){
     //       return '<a href="#edit-'.$trainingtable->id.'"  style="background-color:blue; color:white; font-weight:bold; text-decoration:none;">
     //       Edit</a>'.'<a href="#delete-'.$trainingtable->id.'" style="background-color:red; margin-left:8px; font-weight:bold; color:white; text-decoration:none;">
     //       Delete</a>';
     //   })
        ->make(true);
        
    }
}
