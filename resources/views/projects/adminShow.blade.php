@extends('layouts.app')
@section('content')

       <div class="container">
           <div>
                <h4 style="color:black; font-family: 'Goudy Bookletter 1911', serif;">{{$project->name}}</h4> 
                        <p style=" margin-top:-25px; font-family: 'Goudy Bookletter 1911', serif;">{{$project->description}}</p>
            </div>
       
                                 
                    <!--end of row-->

                    
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="feature feature--featured feature-1 boxed boxed--border bg--white">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                              <center><h3 style="font-weight:bold; font-family: 'Goudy Bookletter 1911', serif">Upload a project</h3></center>
                                                <form method="post" enctype="multipart/form-data" style="margin-top:-20px;"  action="{{ url('store') }}">
                                                        {{ csrf_field() }}
                                                    <input  type="file" name="projectfile[]" multiple><br/>
                                                    <input  type="hidden" name="project_id" value="{{$project->id}}"><br/>
                                                     <input  type="hidden" name="user_id" value="{{Auth::user()->role_id}}"><br/>
                                                    <input type="submit"  value="Upload!" style="background-color:purple; width:100px;">
                                                </form>

                                                <br/>
                                               <!-- <img src="{{ asset('storage/upload/pp.jpg') }}"> -->
                                             <!--  {{ asset('storage/upload') }} -->
                                        <div class="col-md-12 col-sm-12 col-xs-12" style="border:1px solid purple; border-radius:10px; background-color:purple"> 
                                             
                                             @foreach($filedata as $row)
                                                <div style="background-color:gray; width:150px; border-radius:5px; margin:10px 10px">
                                                <!--    <a href="{{ asset('../storage/app/public/upload/'.$row->name) }}">{{$row->name}}</a>
                                                    <center><a style="text-decoration:none; color:white;" href="{{ url('/getContent/'.$row->name) }}">{{$row->name}}</a></center>-->
                                                  
                                               <center><a style="text-decoration:none; color:white;" id="get" href="{{url('projects/displaycode/'.$row->name)}}">{{pathinfo($row)['filename']->name}}</a></center>
                                                
                                            </div>
                                            @endforeach
                                            </center>
                                        </div>
                                       
                                            
                                        </div>


                                        
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                        </div>
                                    </div>

                                  <div class="row">
                                         <form method="post" action="{{ route('comments.store') }}">
                                                    {{ csrf_field() }}
                                                    
                                                 <input type="hidden" name="commentable_type" value="App\Project">
                                                 <input type="hidden" name="commentable_id" value="{{$project->id}}">

                                                    <div class="form-group">
                                                        <label for="comment-content">Comment</label>
                                                        <textarea placeholder="Enter comment"
                                                                style="resize:vertical"
                                                                id="comment-content"
                                                                name="body"
                                                                rows="3" cols="50" spellcheck="false"
                                                                class="form-control autosize-target text-left">
                                                               
                                                                </textarea>
                                                    </div>

                                                  <!--    <div class="form-group">
                                                        <label for="comment-content">Proof of work done (Url/Photos)</label>
                                                        <textarea placeholder="Enter url or screenshots"
                                                                style="resize:vertical"
                                                                id="comment-content"
                                                                name="url"
                                                                rows="2" spellcheck="false"
                                                                class="form-control autosize-target text-left">
                                                               
                                                                </textarea>
                                                    </div> -->
                                                    
                                                    <div class="form-group">
                                                        <input type="submit" style="width:80px; background-color: purple;" class="btn btn-primary" value="submit"/>
                                                    </div>
                                            </form>

                                             <span class="label" id="navitemdropdown"> <a class="pull-right btn btn-primary btn-sm" id="navitemdropdown" href="{{url ('projects/create')}}"> Add Projects</a></span>
                                    </div>
<hr/>
                        @include('partials.comments')
                            </div>
                            <!--end feature-->
                        </div>
                     
                            <div class="col-sm-3">
                             <div class="feature feature-1 boxed boxed--border bg--white" style="background-color: purple">
                                 <h4 style="color:white">Actions</h4>
                                    <ul class="list-unstyled" id="navitemdropdownpro">
                                        <li><a href="{{$project->id}}/edit">Edit</a></li>
                                        <li><a href="{{url ('projects')}}">My projects</a></li>
                                        <li><a href="{{url ('projects/create')}}">Create new project</a></li>

                                    @if($project->user_id == Auth::user()->id)
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

                                            <form id="delete-form" action="{{ route('projects.destroy',[$project->id])}}"
                                                method="POST" style="display: none;">
                                                <input type="hidden" name="_method" value="delete">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    @endif
                                       <!-- <li><a href="">Add new Memeber</a></li> -->
                                    </ul>

                                        <hr/>
                                  
                                        <h4 style="color:white">Add Collaborator </h4>
                                    <form id="add-user" action="{{ route('projects.adduser')}}" method="POST">
                                                {{ csrf_field() }}
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="email" placeholder="Email">
                                            <input  type="hidden" name="project_id" value="{{$project->id}}" class="form-control">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="submit">Add!</button>
                                            </div>
                                        </div>
                                    </form>

                                    <hr/>
                                    <h4 style="color:white">Collaborators</h4>
                                    <ul class="list-unstyled" id="navitemdropdownpro">
                                        @foreach($project-> users as $user)
                                        <li><a href="#">{{$user->email}}</a></li>
                                        @endforeach
                                    </ul>

                            </div> 
                            <!--end feature-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>

@endsection