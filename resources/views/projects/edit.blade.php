@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-md-1 col-sm-1 col-xs-1">
            </div>
        <div class="col-md-6 col-sm-6 col-xs-6 pull-left" style="background-color:white;">
            <h1>Update Project</h1>
          

      
                    <form method="post" action="{{ route('projects.update', [$project->id]) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group">
                                    <label for="project-name">Name<span class="required">*</span></label>
                                    <input placeholder="Enter Name" id="project-Name" required name="name" spellcheck="false" class="form-control" value="{{ $project->name }}" />
                            </div>

                            <div class="form-group">
                                <label for="project-content">Description</label>
                                <textarea placeholder="Enter description"
                                        style="resize:vertical"
                                        id="project-content"
                                        name="description"
                                        rows="5" spellcheck="false"
                                        class="form-control autosize-target text-left">
                                        {{ $project->description }}
                                        </textarea>
                            </div>
                            
                            <div class="form-group">
                                <input style="background-color:purple; color:white;" type="submit" class="btn btn-primary" value="submit"/>
                            </div>
                    </form>
            </div>

             <div class="col-md-2 col-sm-2 col-xs-2">
            </div>
   

        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <div class="sidebar-module">
                
                <h4>Actions</h4>
                <ol class="list-unstyled">
                    <li><a href="projects/{{$project->id}}">View projects</a></li>
                    <li><a href="projects">All projects</a></li>                </ol>
            </div>

           <!--   <div class="sidebar-module">
                <h4>Members</h4>
                <ol class="list-unstyled">
                    <li><a href=""#>January</a></li>
                    <li><a href=""#>February</a></li>
                    <li><a href=""#>Match</a></li>
                    <li><a href=""#>January</a></li>
                    <li><a href=""#>February</a></li>
                    <li><a href=""#>Match</a></li>
                    <li><a href=""#>January</a></li>
                    <li><a href=""#>February</a></li>
                    <li><a href=""#>Match</a></li>
                </ol>
            </div> -->
            
        </div>
    </div>
@endsection