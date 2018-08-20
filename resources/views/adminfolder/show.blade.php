@extends('layouts.app')
@section('content')

       <div class="container">
           <div style="background-color:purple; width:250px; border-radius:15px;">
                <center><h3 style="color:white; font-family: 'Goudy Bookletter 1911', serif;">{{$project->name}}</h3> </center>
            </div>
               <p style=" font-family: 'Goudy Bookletter 1911', serif;">{{$project->description}}</p>
                                 
                    <!--end of row-->

                    
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="feature feature--featured feature-1 boxed boxed--border bg--white">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                              <center><h3 style="font-weight:bold; font-family: 'Goudy Bookletter 1911', serif">Upload a project</h3></center>
                                                <form method="post" enctype="multipart/form-data"  action="{{ url('store') }}">
                                                        {{ csrf_field() }}
                                                    <input  type="file" name="projectfile[]" multiple><br/>
                                                    <input type="submit" value="Upload!" style="background-color:purple;">
                                                </form>

                                                <br/>
                                                <h3 style=" font-family: 'Goudy Bookletter 1911', serif;">Show File</h3>
                                               <!-- <img src="{{ asset('storage/upload/pp.jpg') }}"> -->
                                             <!--  {{ asset('storage/upload') }} -->
                                             @foreach($filedata as $row)
                                                <div style="background-color:purple; width:150px; border-radius:5px;">
                                                <!--    <a href="{{ asset('../storage/app/public/upload/'.$row->name) }}">{{$row->name}}</a>
                                                    <center><a style="text-decoration:none; color:white;" href="{{ url('/getContent/'.$row->name) }}">{{$row->name}}</a></center>-->
                                                    <span class="readBytesButtons">
                                                        <button onclick="readBlob(null, null)">view File</button>
                                                    </span>
                                               <center><a style="text-decoration:none; color:white;" id="get" onclick="getfile()">{{$row->name}}</a></center>
                                                </div>
                                            @endforeach
                                            <script>
                                               // function getfile(){
                                                 
                                                 var filename ='../storage/app/public/upload/'+ document.getElementById('get').text;
                                                 

                                             //   }

                                                
                                                function readBlob(opt_startByte, opt_stopByte) {
                                                    alert(1);
                                                   // var files = document.getElementById('files').files;
                                                  //  if (!files.length) {
                                                  //  alert('Please select a file!');
                                                   // return;
                                                   // }
                                                var file = new File([""], filename);
                                                var start = parseInt(opt_startByte) || 0;
                                                var stop = parseInt(opt_stopByte) || file.size - 1;

                                                var reader = new FileReader();

                                                // If we use onloadend, we need to check the readyState.
                                                reader.onloadend = function(evt) {
                                                if (evt.target.readyState == FileReader.DONE) { // DONE == 2
                                                    document.getElementById('byte_content').textContent = evt.target.result;
                                                  //  document.getElementById('byte_range').textContent = 
                                                  //      ['Read bytes: ', start + 1, ' - ', stop + 1,
                                                  //      ' of ', file.size, ' byte file'].join('');
                                                }
                                                };
                                                 var blob = file.slice(start, stop + 1);
                                                reader.readAsBinaryString(blob);
                                            }

                                           
                                                </script>
                                                   
                            
                                        </div>

                                        <div id="byte_content">
                        gghffff
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

                                                      <div class="form-group">
                                                        <label for="comment-content">Proof of work done (Url/Photos)</label>
                                                        <textarea placeholder="Enter url or screenshots"
                                                                style="resize:vertical"
                                                                id="comment-content"
                                                                name="url"
                                                                rows="2" spellcheck="false"
                                                                class="form-control autosize-target text-left">
                                                               
                                                                </textarea>
                                                    </div>
                                                    
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