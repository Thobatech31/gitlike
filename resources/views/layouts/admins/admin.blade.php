@extends('layouts.app')

@section('content')
<br/>
<center>
        <h3 style=" font-family: 'Goudy Bookletter 1911', serif;">Build Something Brilliant.</h3>
            <p style="font-family: 'Goudy Bookletter 1911', serif;">Whether you’re building a web application, mobile application, DevHub has your design needs covered.</p>

</center>
<br/><br/><br/>
 <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-xs-12">
                            <img alt="Image" src="{{asset('externalFolder')}}/img/artt.jpg" />
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="switchable__text">
                                <h3 style=" font-family: 'Goudy Bookletter 1911', serif;">Streamline Your Workflow</h3>
                                <p style=" font-family: 'Goudy Bookletter 1911', serif;">
                                    Launching an attractive and scalable project quickly and affordably is important for modern startups &mdash; DevHub offers massive value without looking 'bargain-bin'.
                                </p>
                                 <a class="btn btn--primary type--uppercase" href="#" style="background-color:purple; border:1px solid purple">
                                       <span class="btn__text">
                                                            Learn More
                                            </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
          <br/><br/>  
   
                
@endsection
