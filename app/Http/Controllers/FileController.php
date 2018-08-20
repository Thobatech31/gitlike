<?php

namespace App\Http\Controllers;
use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{


    public function uploadfile(){
         $filedata = File::all();
        // return view('projects.show')->with('filedata', $filedata);
        return 'file upload';
    }
    public function storefile(request $request){
        if($request->hasFile('projectfile')){
            foreach ($request->projectfile as $file){
                $filename = $file->getClientOriginalName();
                $filesize = $file->getClientSize();
                $file->storeAs('public/upload',$filename);
                $fileModel = new File;
                $fileModel->name = $filename;
                $fileModel->size = $filesize;
                $fileModel->user_id = $request->user_id;
                $fileModel->project_id = $request->project_id;
                $fileModel->save();
            }

            return 'file upload succesfully';
        }
    }

//specifying the storage directory of the file upload
    public function getFile($filename){
        return response()->download(Storage_path('app/public/upload/'.$filename),null,[],null);
    }
     public function getContent($filename){
         $fileopen = fopen('../storage/app/public/upload/'.$filename, 'r');
         $filesize = filesize('../storage/app/public/upload/'.$filename);
         $filetext = fread($fileopen,$filesize);
         fclose($fileopen);
        return $filetext;
    }
}
