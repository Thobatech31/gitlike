<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class UploadController extends Controller
{
    public function index(){
        return view('projects.show');
    }

    public function store(request $request){

        if($request->hasFile('projectfile')){
            $request->file('projectfile');
            //return $request->projectfile->extension();
            return $request->projectfile->storeAs('public','bitfumes.jpg');
           
           // return Storage::putFile('public/new', $request->file('projectfile'));
        }else{
            return 'No file selected';
        }
    }

    public function show(){
       return Storage::get('bitfumes.jpg');
    }
}
