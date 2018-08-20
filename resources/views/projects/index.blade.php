@extends('layouts.app')
@section('content')

             <div class="container" style="background-image: url('{{asset('externalFolder')}}/img/Art.jpg');">
               
                    <!--end of row-->
                    <div class="row">
                        
                        <div class="col-sm-5">
                            <div class="feature feature--featured feature-1 boxed boxed--border bg--white">
                                <h5>DevHub for the programmers</h5>
                                  <ul class="list-group">
                                        @foreach($projects as $project)
                                            <li class="list-group-item"> <a style="color:black; font-size:17px; font-weight:bold;  font-family: 'Goudy Bookletter 1911', serif;" href="projects/{{ $project->id }}">{{ $project->name }} </a></li>
                                        @endforeach
                                    </ul>
                                <span class="label" id="navitemdropdown"> <a class="pull-right btn btn-primary btn-sm" id="navitemdropdown" href="{{url ('projects/create')}}">Create new App</a></span>
                            </div>
                            <!--end feature-->
                        </div>
                      <div class="col-sm-2">
                            <!--   <div class="feature feature-1 boxed boxed--border bg--white">
                                <h5>Environmental Statement</h5>
                                <p>
                                    10 January, 2017
                                </p>
                                <a href="#">
                                    Read Story
                                </a>
                            </div> -->
                            <!--end feature-->
                        </div>
                            <div class="col-sm-2">
                            <!--   <div class="feature feature-1 boxed boxed--border bg--white">
                                <h5>Environmental Statement</h5>
                                <p>
                                    10 January, 2017
                                </p>
                                <a href="#">
                                    Read Story
                                </a>
                            </div> -->
                            <!--end feature-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/>
@endsection