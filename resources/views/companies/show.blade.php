@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-md-9 col-sm-9 col-xs-9 pull-left">
            <div class="jumbotron">
                <h1>{{$company->name}}</h1>
                <p class="lead">{{$company->description}}</p>
            <!--  <p><a class="btn btn-lg btn-success" hef="#" role="button">mememe</a></p> -->
            </div>
                         <a href="projects/create/{{ $company->id }}" class="btn btn-default btn-sm pull-right">Add Project</a>

            <div class="row" style="background-color:white; margin:10px;">
                    @foreach($company-> projects as $project)
                        <div class="col-lg-4">
                            <h2>{{$project->name}}</h2>
                            <p class="text-danger">{{$project->description}}</p>
                            <p><a class="btn btn-primary" href="{{url ('projects') }}/{{$project->id}} " role="button">view Details</a></p>
                        </div>
                    @endforeach
            </div>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <div class="sidebar-module">
                
                <h4>Actions</h4>
                <ol class="list-unstyled">
                    <li><a href="{{$company->id}}/edit">Edit</a></li>
                    <li><a href="projects/create/{{ $company->id }}">Add Project</a></li>
                    <li><a href="{{url ('companies')}}">My Companies</a></li>
                    <li><a href="{{url ('companies/create')}}">Create new Company</a></li>
                    <li>
                        <a
                        href="#"
                            onclick="
                            var result = confirm('Are You Sure You Want To Delete This Project');
                                if( result ){
                                    event.preventDefault();
                                    document.getElementById('delete-form').submit();
                                }
                            "
                        >
                        Delete
                        </a>

                        <form id="delete-form" action="{{ route('companies.destroy',[$company->id])}}"
                            method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                        </form>
                    </li>
                   <!-- <li><a href="">Add new Memeber</a></li> -->
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