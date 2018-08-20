<!--@extends('layouts.app')
@section('content')
    <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
               

                
            </div>
        </div>     
    </div>
@endsection -->


<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>{{config('app.name', 'CovenHub')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Description Here">
                <link href="{{asset('externalFolder')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

        <link href="{{asset('externalFolder')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
                <link href="{{asset('externalFolder')}}/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/custom.css" rel="stylesheet" type="text/css" media="all" />
     
        <script src="{{asset('externalFolder')}}/js/jquery.min.js"></script>
          
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
    </head>
    <body class=" ">
        <a id="start"></a>
       
         <div class="container pos-vertical-center" style="margin-top:50px;">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-xs-4" style=" margin-left:-90px;"> 
                                             <a href="/" style="color:white; font-weight:bold; text-decoration:none;"><img style="width:30px" src="{{asset('externalFolder')}}/img/homepage2.jpg" />Home</a>
                                    </div>
                                    
                                      <div class="col-sm-4 col-md-4 col-xs-4">
                                                                    <center> <img src="{{asset('externalFolder')}}/img/coven3.png" style="width: 50px;"></center>

                                    </div>

                                     <div class="col-sm-4 col-md-4 col-xs-4">
                                    
                                    </div>
                                </div>
                            </div>
        
            <div class="container-fluid">
                     <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12">
                            <table id="training_table" class="table table-bordered" style="width:120%; margin-left:-10%; background-color:#0EBFE9; color:white"> 
                                <thead> 
                                    <tr> 
                                       
                                         <th>Name</th> 
                                         <th>Email</th> 
                                         <th>Phone_No</th> 
                                         <th>Address</th> 
                                         <th>TrainingType</th>
                                         <th>Status</th>
                                         <th>CheckIn Time</th>
                                         <!--<th>Update Time</th>-->
                                         <th>Checkout Time</th>
                                         <!--<th>Action</th>-->
                                         
                                    </tr>
                                </thead> 
                                
                                <tbody> 
                                   
                                
                                </tbody> 
                            </table>
                </div>
            </div>
        </div>
            </div>
                    

            <script type="text/javascript">
                $(document).ready(function(){
                    $('#training_table').DataTable({
                        "processing": true,
                        "serverSide": true,
                        "ajax": "{{ route('trainingtabledata.fetchData') }}",
                        "columns":[
                            
                             { "data": "name" },
                            { "data": "email" },
                            { "data": "phoneNo" },
                            { "data": "address" },
                            { "data": "trainingType" },
                            { "data": "Status" },
                            { "data": "created_at" }, 
                         //   { "data": "updated_at" },                                          
                            { "data": "Checkout_time" },
                         //   { "data": "action" }
                        ]
                    });
                });


                
            </script>

         <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
               

        <script src="{{asset('externalFolder')}}/js/jquery-3.1.1.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/jquery.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/bootstrap.min.js"></script>
          <script src="{{asset('externalFolder')}}/js/jquery.dataTables.min.js"></script>
              <script src="{{asset('externalFolder')}}/js/dataTables.bootstrap.min.js"></script>
              <script src="{{asset('externalFolder')}}/js/dataTables.bootstrap4.min.js"></script>

        <script src="{{asset('externalFolder')}}/js/flickity.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/easypiechart.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/parallax.js"></script>
        <script src="{{asset('externalFolder')}}/js/typed.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/datepicker.js"></script>
        <script src="{{asset('externalFolder')}}/js/isotope.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/ytplayer.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/lightbox.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/granim.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/jquery.steps.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/countdown.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/twitterfetcher.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/spectragram.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/smooth-scroll.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/scripts.js"></script>
    </body>
</html>

