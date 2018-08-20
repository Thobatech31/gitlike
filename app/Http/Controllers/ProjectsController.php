<?php

namespace App\Http\Controllers;

use App\Project;
use App\Company;
use App\ProjectUser;
use App\User;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $projects=Project::where('user_id', Auth::user()->id)->get();
        return view('projects.index', ['projects'=>$projects]);
        }
            return view('auth.login');
    }


    public function adduser(Request $request){
        //add user project

        //take a project and add a user to it
        $project = Project::find($request->input('project_id'));

        if(Auth::user()->id == $project->user_id){

        $user = User::where('email', $request->input('email'))->first(); // single record

        //check if user already added to the project
                $projectUser = ProjectUser::where('user_id',$user->id)
                                            ->where('project_id',$project->id)
                                            ->first();

            if($projectUser){
                //if user already exist
                return redirect()->route('projects.show', ['project'=> $project->id])
            ->with('success' , $request->input('email'). ' is already a memeber of this project');
            }
        
             if($user && $project){
            $project->users()->attach($user->id);
            return redirect()->route('projects.show', ['project'=> $project->id])
            ->with('success' , $request->input('email'). 'was added to the project succesfully');
            }
        }
            return redirect()->route('projects.show', ['project'=> $project->id])
            ->with('errors' , 'Error adding user to project');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $company_id = null )
    {
        //
        $companies = null;
        if(!$company_id){
                    $companies=Company::where('user_id', Auth::user()->id)->get();
        }

        return view('projects.create', ['company_id'=>$company_id, 'companies'=>$companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Auth::check()){
            $project = Project::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'company_id' => $request->input('company_id'),
                'user_id' => Auth::user()->id
            ]);

            if($project){
                return redirect()->route('projects.show', ['project'=> $project->id])
                ->with('success' , 'project Created Successfully');
            }
        }

        return back()->withInput()->with('errors', 'Error creating new project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        //$project=Project::where('id', $project->id);
     $project=Project::find($project->id);

     $comments=$project->comments;
              $filedata = File::where('project_id', $project->id)->get();

       return view('projects.show', ['project'=>$project, 'comments'=>$comments, 'filedata'=>$filedata]);
    }

    public function displaycode(Request $request,$filename)
    {
    
       return view('projects.displaycode', ['file_name'=>$filename]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $project=Project::find($project->id);
        return view('projects.edit', ['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
        $projectUpdate = Project::where('id', $project->id)
        ->update([
            'name'=> $request->input('name'),
            'description'=> $request->input('description')
        ]);

    if($projectUpdate){
        return redirect()->route('projects.show', ['project'=> $project->id])
        ->with('success', 'project Updated Successfully');
    }

        //redirect
        return back()->withInput();
    }

    

    /**
     * Remove the specified resource from storage.
     * v
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $findproject = Project::find( $project->id);
        if($findproject->delete()){
            return redirect()->route('projects.index')
            ->with('success' , 'project deleted successfully');
        }

        return back()->withInput()->with('error' , 'project Could Not Be Deleted');
    }
}
