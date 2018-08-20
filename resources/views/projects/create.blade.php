@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-md-1 col-sm-1 col-xs-1">
            </div>
        <div class="col-md-6 col-sm-6 col-xs-6 pull-left" style="background-color:white;">
            <h1>Create New Project</h1>
          

      
                    <form method="post" action="{{ route('projects.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                    <label for="project-name">Name<span class="required">*</span></label>
                                    <input placeholder="Enter Name" id="project-Name" required name="name" spellcheck="false" class="form-control"/>
                            </div>

                    <!--       <input type="hidden" name="company_id" value="{{$company_id}}"/>

                            @if($companies != null)
                           <div class="form-group">
                               <label for="company-content">Select Programming Language</label>
                               <select name="company_id" class="form-control">
                                   @foreach($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                   @endforeach
                                </select>
                            </div>
                            @endif -->

                            <div class="form-group">
                                <label for="project-content">Description</label>
                                <textarea placeholder="Enter description"
                                        style="resize:vertical"
                                        id="project-content"
                                        name="description"
                                        rows="5" spellcheck="false"
                                        class="form-control autosize-target text-left">
                                       
                                        </textarea>
                            </div>
                            
                            <div class="form-group">
                                <input type="submit"  value="Create app" style="background-color:purple; width:120px;"/>
                            </div>
                    </form>
            </div>

             <div class="col-md-2 col-sm-2 col-xs-2">
            </div>
   

        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <div class="sidebar-module">
                
                <h4>Actions</h4>
                <ol class="list-unstyled">
                    <li><a href="{{ url ('projects') }}">My projects</a></li>
                </ol>
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