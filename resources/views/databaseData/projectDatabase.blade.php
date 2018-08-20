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
        
            

            <div class="row">
                 <div class="col-sm-12 col-xs-12 col-md-12">
                             <table id="project_table" class="table table-bordered" style=" background-color:#0EBFE9; color:white"> 
                                <thead> 
                                    <tr> 
                                       
                                         <th>Name</th> 
                                         <th>Description</th> 
                                         <th>Created At</th> 
                                        
                                         <th>Updated At</th>
                                         
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
                    $('#project_table').DataTable({
                        "processing": true,
                        "serverSide": true,
                        "ajax": "{{ route('projectDatabase.fetchData') }}",
                        "columns":[
                            
                             { "data": "name" },
                            { "data": "description" },
                            { "data": "created_at" }, 
                          { "data": "updated_at" },                                          
                           
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

