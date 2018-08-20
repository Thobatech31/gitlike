<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //   if(Auth::check()){
   //         $projects=Project::where('user_id', Auth::user()->id)->get();
     //   return view('projects.index', ['projects'=>$projects]);
   //     }
      //      return view('auth.login');
        return view('admin');
    }
}
