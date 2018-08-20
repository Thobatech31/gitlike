@extends('layouts.app')

@section('content')
<br/>
<center>
        <h3 style=" font-family: 'Goudy Bookletter 1911', serif;">Admin Page</h3>
            <p style="font-family: 'Goudy Bookletter 1911', serif;">Whether you’re building a web application, mobile application, DevHub has your design needs covered.</p>

</center>
<br/><br/><br/>
 <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-xs-12">
                            <img alt="Image" src="{{asset('externalFolder')}}/img/artt.jpg" />
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <h3 style=" font-family: 'Goudy Bookletter 1911', serif;">Streamline Your Workflow</h3>
                                <p style=" font-family: 'Goudy Bookletter 1911', serif;">
                                    Launching an attractive and scalable project quickly, DevHub offers massive value without looking 'bargain-bin'.
                                </p>
                             <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                             
                                 <a class="btn btn--primary" id="homepage_button" href="{{url('adminfolder/deleteUser')}}">
                                    <span class="btn__text" id="btn__text">
                                        Delete User's
                                    </span>
                                </a>
                            
                                <!--end of modal instance-->
                            </div>
                        
                         
                        </div>

                        <!--end of row-->
                        <BR/><BR/>

                     


                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                 <a class="btn btn--primary" id="homepage_button" href="{{url('adminfolder/runProject')}}">
                                    <span class="btn__text" id="btn__text">
                                        Run Project
                                    </span>
                                </a>
                                
                            </div>
                        
                        </div>

                               
                             
                            
                        </div>
                    </div>
                    <!--end of row-->
                </div>
          <br/><br/>  

                       
   
                
@endsection
