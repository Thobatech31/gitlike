<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DevHub') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="description" content="Site Description Here">
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

        <style type="text/css">
                       #header_items{
                cursor: pointer;
            }

            #navitem{
                color:white;
                font-family: 'Goudy Bookletter 1911', serif;
                
            }

             #navitem li a{
                color:white;
                font-size:16px;
                font-family: 'Goudy Bookletter 1911', serif;
                
            }

            #navitemdropdown li a{
                 color:white;
                 font-weight: bold;
                font-family: 'Goudy Bookletter 1911', serif;
            }

              #homepage_button{
                background:purple;
                border-radius:8px;
                font-family: Roboto;
                cursor:pointer;
                transition: all 0.5s;
                box-shadow:3px 3px;
                color:white;
                
              font-size:18px;
            }

            #homepage_button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
                
                }

                #homepage_button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
                }

                #homepage_button:hover span {
                padding-right: 25px;
                
                }
             #homepage_button:hover{
                padding-right: 25px;
                background:linear-gradient(45deg,#0EBFE9 50%,black 50%);

                }

                #homepage_button:hover span:after {
                opacity: 1;
                right: 0;
                
                }

             #btn__text{
                font-weight:100; 
                font-size:20px; 
                font-style:normal;
                font-family: 'Goudy Bookletter 1911', serif;
            }


 #navitemdropdownpro li a{
                 color:gray;
                 font-weight: bold;
                font-family: 'Goudy Bookletter 1911', serif;
            }


h4{
     color:white;
                 font-weight: bold;
                font-family: 'Goudy Bookletter 1911', serif;
}
              #navitemdropdown{
                 background-color: purple;
                 text-decoration: none;
            }
         
        </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: purple;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" id="navitem">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" id="navitem">
                        <!-- Authentication Links -->
                        @guest
                            <li><a style="margin-left:900px;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else

                           <!-- <li><a class="nav-link" href="{{ route('companies.index') }}">Companies</a></li> -->
                           
                           <li><a style="margin-left:170px;" class="nav-link" href="{{ route('projects.index') }}">Documentation</a></li>
                           <li><a class="nav-link" href="{{ route('projects.index') }}">Overview</a></li>
                           <li><a class="nav-link" href="{{ route('projects.index') }}">Resources</a></li>
                           <li><a class="nav-link" href="{{ route('projects.index') }}">Metrics</a></li>                                                      
                            <li><a class="nav-link" href="{{ route('projects.index') }}">Projects</a></li>
                            <li><a class="nav-link" href="{{ route('tasks.index') }}">Tasks</a></li>

                                    <form>
                                                    <input type="search" placeholder="Search site" name="query"  />
                                                </form>

                                @if(Auth::user()->role_id == 1)
                                    <li class="dropdown" style="margin-top:7px;" id="navitem">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                          Admin  <i class="fa fa-user" aria-hidden="true"></a>
                                        </a>

                                        <ul class="dropdown-menu" role="menu" id="navitemdropdown">
                                                <li><a href="{{ route('projects.index')}}"><i class="fa fa-briefcase" aria-hidden="tru"></i>All Projects</li>
                                                 <li><a href="{{ route('users.index')}}"><i class="fa fa-briefcase" aria-hidden="tru"></i>All Users</li>
                                                  <li><a href="{{ route('tasks.index')}}"><i class="fa fa-briefcase" aria-hidden="tru"></i>All Tasks</li>
                                                 <li><a href="{{ route('companies.index')}}"><i class="fa fa-briefcase" aria-hidden="tru"></i>All Companies</li>
                                                <li><a href="{{ route('roles.index')}}"><i class="fa fa-briefcase" aria-hidden="tru"></i>All Roles</li>


                                        </ul>
                                    </li>
                                @endif

 
                                                
                                            

                            <li class="nav-item dropdown" id="navitem" style="margin-left:20px;">

                                <a  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                <div  class="dropdown-menu" aria-labelledby="navbarDropdown" id="navitemdropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @include('partials.errors')
        @include('partials.success')
        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer-6 unpad--bottom  bg--dark" style="background-color:purple;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-8">
                                            <center>
                                            <h6 class="type--uppercase">About Us</h6>
                                            </center>
                                            <p>DevHub is a development platform inspired by the way you work. From open source to business, you can host and review code, manage projects, and build software alongside millions of other developers. </p>
                                            
                                        </div>

                                    
                                        <div class="col-sm-6 col-md-2">
                                            <center>
                                            <h6 class="type--uppercase">Social Media Pages</h6>
                                                <p><a href="https://www.facebook.com/caccffuta">Facebook Page</a></p>
                                            <div class="instafeed instafeed--gapless" data-user-name="mediumrarethemes" data-amount="6" data-grid="3"></div>
                                            <licenter>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                        <center><img alt="Image" src="{{asset('externalFolder')}}/img/language.jpg" class="border--round"/ style="width: auto; height: 150px;"></center> 
                                        </div>
                                    </div>
                                    <!--end of row-->
                                </div>
                                <!--end of container-->
                                <div class="footer__lower text-center-xs">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <span class="type--fine-print">&copy;
                                                    <span class="update-year"></span> projectThobatech  All Rights Reserved</span>
                                            </div>
                                            <div class="col-sm-6 text-right text-center-xs">
                                                <ul class="social-list list-inline">
                                                    <li>
                                                        <a href="https://www.">
                                                            <i class="socicon socicon-google icon icon--xs"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.">
                                                            <i class="socicon socicon-twitter icon icon--xs"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.facebook.com/caccffuta">
                                                            <i class="socicon socicon-facebook icon icon--xs"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.">
                                                            <i class="socicon socicon-instagram icon icon--xs"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end of row-->
                                    </div>
                                    <!--end of container-->
                                </div>
                            </footer>
    </div>
    
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
