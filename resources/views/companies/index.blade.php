@extends('layouts.app')
@section('content')


             <div class="container">
               
                    <!--end of row-->
                    <div class="row">
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
                        <div class="col-sm-8">
                            <div class="feature feature--featured feature-1 boxed boxed--border bg--white">
                                <h5>DevHub for the programmers</h5>
                                  <ul class="list-group">
                                    @foreach($companies as $company)
                                        <li class="list-group-item"> <a href="companies/{{ $company->id }}">{{ $company->name }} </a></li>
                                    @endforeach
                                </ul>                                
                                <span class="label" id="navitemdropdown"><a class="pull-right btn btn-primary btn-lg" id="navitemdropdown"  href="{{url ('companies/create')}}">Create new Company</a></span>
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
                    </div>
                    <!--end of row-->
                </div>

@endsection