<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

             <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="description" content="Site Description Here">
        <link href="{{asset('externalFolder')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <script src="{{asset('externalFolder')}}/js/jquery-3.1.1.min.js"></script>
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
        </style> <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="description" content="Site Description Here">
        <link href="{{asset('externalFolder')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('externalFolder')}}/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <script src="{{asset('externalFolder')}}/js/jquery-3.1.1.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">

      
         
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

        



             #header{
                
                font-family: 'Goudy Bookletter 1911', serif;
                font-size:18px;
                cursor:pointer;
            }

            h1{
                font-family: 'Goudy Bookletter 1911', serif;
                font-size:18px;
            }

             h2{
                font-family: 'Goudy Bookletter 1911', serif;
                font-size:20px;
            }

             p{
                font-family: 'Rancho Regular', serif;
                font-size:18px;
            }

            #header_items{
                
                font-family: 'Goudy Bookletter 1911', serif;
                font-size:18px;
            }
        </style>
    </head>
    <body>
       <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif -->

            <div class="content">
                <a id="start"></a>

                        <div class="nav-container ">
                            <div class="bar bar--sm visible-xs" >
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-xs-3 col-sm-2">
                                            <a href="{{ url('/home') }}">
                                                <img class="" alt="logo" src="{{asset('externalFolder')}}/img/fellownew1.jpg" />
                                            </a>
                                        </div>
                                        <div class="col-xs-9 col-sm-10 text-right">
                                            <a href="#" class="hamburger-toggle" data-toggle-class="#;hidden-xs" >
                                                <i class="icon icon--sm stack-interface stack-menu"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end of row-->
                                </div>
                                <!--end of container-->
                            </div>
                            <!--end bar-->

            
                            
                                <nav id="" class="bar bar-1 hidden-xs bar--transparent bar--absolute" data-scroll-class='90vh:pos-fixed' >
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-md-1 hidden-xs hidden-sm" >
                                            <div class="bar__module">
                                                <a href="index.html">
                                                    <img class="logo logo-dark" alt="logo" src="{{asset('externalFolder')}}/img/project.jpg" />
                                                    <img class="logo logo-light" alt="logo" src="{{asset('externalFolder')}}/img/project.jpg" />
                                                </a>
                                            </div>
                                            <!--end module-->
                                        </div>
                                        
                                        <!--end columns-->
                                        <div class="col-md-5">
                                            <div class="bar__module">
                                                <ul class="menu-horizontal">
                                                
                                                   
                                                    <li class="dropdown">
                                                        <span id="header">
                                                            Features
                                                        </span>
                                                       
                                                    </li>

                                                    <li class="dropdown">
                                                        <span id="header">
                                                            Marketplace
                                                        </span>
                                                       
                                                    </li>

                                                    <li class="dropdown">
                                                        <span id="header">
                                                            Pricing
                                                        </span>
                                                        
                                                    </li>

                                                    <li class="dropdown">
                                                        <span id="header">
                                                            Documentation
                                                        </span>
                                                      
                                                    </li>

                                                    <li class="dropdown text-left">
                                                        <span id="header">
                                                            More
                                                        </span>
                                                        <div class="dropdown__container">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="dropdown__content dropdown__content--lg col-md-8">
                                                                        <div class="pos-absolute col-md-5 imagebg hidden-sm hidden-xs" data-overlay="6">
                                                                            <div class="background-image-holder">
                                                                                <img alt="background" src="{{asset('externalFolder')}}/img/language.jpg" />
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="col-md-6 col-md-offset-6">
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <ul class="menu-vertical">
                                                                                        <li>
                                                                                            <a href="#">
                                                                                                Services
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="#">
                                                                                                Services
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="#">
                                                                                                 Services
                                                                                            </a>
                                                                                        </li>
                                                                                    
                                                                                    
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <ul class="menu-vertical">
                                                                                        <li>
                                                                                            <a href="#">
                                                                                                project Layouts
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="#">
                                                                                                project Layouts
                                                                                            </a>
                                                                                        </li>
                                                                                    
                                                                                        <li>
                                                                                            <a href="#">
                                                                                                project Layouts
                                                                                            </a>
                                                                                        </li>
                                                                                       

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <!--end of row-->
                                                                        </div>
                                                                    </div>
                                                                    <!--end dropdown content-->
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                            <!--end container-->
                                                        </div>
                                                        <!--end dropdown container-->
                                                    </li>
                                                
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="bar__module">
                                                <form>
                                                    <input type="search" placeholder="Search site" name="query"  />
                                                </form>
                                            </div>
                                        </div>
                                        <!--end columns-->
                                        <div class="col-md-3 text-right text-left-xs">

                                               <!--      @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif -->
                                        @if (Route::has('login'))
                                            <div class="bar__module">
                                             @auth
                                           <!--    <a href="{{ url('/home') }}" style="color:white; background-color:purple;">Home</a> -->
                                            <a href="{{ route('projects.index') }}" style=" font-size:16px; text-decoration:none;">Home</a>

                                             @else
                                                <a class="btn btn--sm type--uppercase" href="{{ route('login') }}">
                                                    <span class="btn__text">
                                                        Login
                                                    </span>
                                                </a>
                                                <a class="btn btn--primary btn--sm type--uppercase"  style="background-color:purple; border:1px solid purple;" href="{{ route('register') }}">
                                                    <span class="btn__text">
                                                        Register
                                                    </span>
                                                </a>
                                            @endauth
                                            </div>
                                        @endif
                                            <!--end module-->
                                        </div>
                                        <!--end columns-->
                                    </div>
                                    <!--end of row-->
                                </div>
                                <!--end of container-->
                            </nav>
                            <!--end bar-->
                        </div>
                        
                        <div class="main-container" >
                        <section class="cover height-70 imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
                                
                                <ul class="slides">
                                    <li class="imagebg" data-overlay="4">
                                        <div class="background-image-holder background--top">
                                                <img class="" alt="logo" src="{{asset('externalFolder')}}/img/recruitment-1.jpg" />
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-8 col-xs-8 col-md-8" style="margin-top: 60px;">
                                                    <h1>
                                                        <img class="" alt="logo" src="{{asset('externalFolder')}}/img/capture11.png" />
                                                    </h1>
                                                </div>

                                                <div class="col-sm-4 col-xs-4 col-md-4" style="margin-top: 110px; margin-left: -30px;">
                                                    <h2>Build for Developers</h2>
                                                    <p>DevHub is a development platform inspired by the way you work. From open source to business, you can host and review code, manage projects, and build software alongside millions of other developers.</p>
                                                
                                                    <a class="btn btn--primary type--uppercase" href="#" style="background-color:purple; border:1px solid purple">
                                                        <span class="btn__text">
                                                            Learn More
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end of row-->
                                        </div>
                                        <!--end of container-->
                                    </li>


                                <li class="imagebg" data-overlay="4">
                                        <div class="background-image-holder background--top">
                                                <img class="" alt="logo" src="{{asset('externalFolder')}}/img/code2.jpg" />
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-8 col-xs-8 col-md-8" style="margin-top: 60px;">
                                                    <h1>
                                                        <img class="" alt="logo" src="{{asset('externalFolder')}}/img/capture111.png" />
                                                    </h1>
                                                </div>

                                                <div class="col-sm-4 col-xs-4 col-md-4" style="margin-top: 110px; margin-left: -30px;">
                                                <h2> Focus on your apps</h2>
                                                        <p>Invest in apps, not ops. DevHub handles the hard stuff — patching and upgrading, 24/7 ops and security, build systems, failovers, and more — so your developers can stay focused on building great apps.</p>
                                                
                                                    <a class="btn btn--primary type--uppercase" href="#" style="background-color:purple; border:1px solid purple">
                                                        <span class="btn__text">
                                                            Learn More
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end of row-->
                                        </div>
                                        <!--end of container-->
                                    </li>

                                    
                                    <li class="imagebg" data-overlay="4">
                                        <div class="background-image-holder background--top">
                                                <img class="" alt="logo" src="{{asset('externalFolder')}}/img/code4.jpg" />
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-8 col-xs-8 col-md-8" style="margin-top: 60px;">
                                                    <h1>
                                                        <img class="" alt="logo" src="{{asset('externalFolder')}}/img/capture1.png" />
                                                    </h1>
                                                </div>

                                                <div class="col-sm-4 col-xs-4 col-md-4" style="margin-top: 110px; margin-left: -30px;">
                                                            <h2>Create an account</h2>
                                                    <p>Complete sign-up, and start building applications in the DevHub Cloud</p>
                                                
                                                    <a class="btn btn--primary type--uppercase" href="#" style="background-color:purple; border:1px solid purple">
                                                        <span class="btn__text">
                                                            Learn More
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end of row-->
                                        </div>
                                        <!--end of container-->
                                    </li>

                                    <li class="imagebg" data-overlay="4">
                                        <div class="background-image-holder background--top">
                                                <img class="" alt="logo" src="{{asset('externalFolder')}}/img/code5.jpg" />
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-8 col-xs-8 col-md-8" style="margin-top: 60px;">
                                                    <h1>
                                                        <img class="" alt="logo" src="{{asset('externalFolder')}}/img/capturev.png" />
                                                    </h1>
                                                </div>

                                                <div class="col-sm-4 col-xs-4 col-md-4" style="margin-top: 110px; margin-left: -30px;">
                                                <h2> Turn your project into an apps project</h2>
                                                <p>Today every project needs apps to engage their customers and run their businesses. Step up your ability to build, manage, and deploy great apps at scale with DevHub.</p>
                                                
                                                    <a class="btn btn--primary type--uppercase" href="#" style="background-color:purple; border:1px solid purple">
                                                        <span class="btn__text">
                                                            Learn More
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end of row-->
                                        </div>
                                        <!--end of container-->
                                    </li>

                                    <li class="imagebg" data-overlay="4">
                                        <div class="background-image-holder background--top">
                                                <img class="" alt="logo" src="{{asset('externalFolder')}}/img/recruitment-1.jpg" />
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-8 col-xs-8 col-md-8" style="margin-top: 60px;">
                                                    <h1>
                                                        <img class="" alt="logo" src="{{asset('externalFolder')}}/img/captureiv.png" />
                                                    </h1>
                                                </div>

                                                <div class="col-sm-4 col-xs-4 col-md-4" style="margin-top: 110px; margin-left: -30px;">
                                                    <h2>Best for you</h2>
                                                    <p>Technology as we know today has come a long way in changing
                                                                    different aspect of lives and helping in human efficiency and
                                                        accuracy. There is a growing need for educators and stakeholders
                                                                to explore other means of assessment of students using different
                                                        medium to help students.</p>
                                                
                                                    <a class="btn btn--primary type--uppercase" href="#" style="background-color:purple; border:1px solid purple">
                                                        <span class="btn__text">
                                                            Learn More
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end of row-->
                                        </div>
                                        <!--end of container-->
                                    </li>

                                </ul>
                            </section>
                            
                    

                        <section class="text-center" style="margin-top: -40px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                                            <h2>All the tools you'll need</h2>
                                            <p class="lead">
                                            DevHub's fully-managed platform gives you the simplest path to delivering apps quickly. DevHub has your design needs covered.
                                            </p>
                                        </div>
                                    </div>
                                    <!--end of row-->
                                </div>
                                <!--end of container-->
                            </section>

                            <section>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
                                                <i class="icon icon--lg icon-Mail-3"></i>
                                            <h4>Embracing the Cloud</h4>
                                            <p> DevHub is all in on cloud and uses a wide breadth of cloud services to provide the elasticity it needs to handle highly seasonal traffic patterns.</p>
                                                <a href="#" style="color:purple">
                                                    Learn More
                                                </a>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
                                                <i class="icon icon--lg icon-Air-Balloon"></i>
                                                <h4>Powering Prosperity</h4>
                                                    <p>DevHub continues to develop and enhance products to serve its mission: to power prosperity for its developers around the world.</p>
                                                  <a href="#" style="color:purple">                                                                                     
                                                    Learn More
                                                </a>
                                                <span class="label" style="background-color:purple">New</span>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
                                                <i class="icon icon--lg icon-Bacteria"></i>
                                            <h4>Storage</h4>
                                                        <p>Durable, cost-effective options for backup, disaster recovery, and data archiving at petabyte scale.</p>
                                                  <a href="#" style="color:purple">                        
                                                    Learn More
                                                </a>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    </div>
                                    <!--end of row-->
                                </div>
                                <!--end of container-->
                            </section>


                

                            <section class="cover height-80 imagebg switchable" data-overlay="8">
                                <div class="background-image-holder">
                                                <img class="" alt="logo" src="{{asset('externalFolder')}}/img/Art.jpg" />
                                </div>
                                <div class="container pos-vertical-center">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-7">
                                            <div class="switchable__text">
                                                <h1>
                                                    Streamline your workflow with DevHub
                                                </h1>
                                                <p class="lead">
                                                    Developers, teams, and businesses of all sizes use DevHub to deploy, manage, and scale apps.
                                                </p>
                                                <a class="btn btn--primary type--uppercase" style="background-color:purple; border:1px solid purple" href="index.html">
                                                    <span class="btn__text">
                                                        Learn More
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-4 col-xs-12">
                                            <div class="video-cover border--round box-shadow-wide">
                                                <div class="background-image-holder">
                                                <img class="" alt="logo" src="{{asset('externalFolder')}}/img/inner-6.jpg" />
                                                </div>
                                                <div class="video-play-icon"></div>
                                                <iframe data-src="https://www.youtube.com/embed/6p45ooZOOPo?autoplay=1" allowfullscreen="allowfullscreen"></iframe>
                                            </div>
                                            <!--end video cover-->
                                        </div>
                                    </div>
                                    <!--end of row-->
                                </div>
                                <!--end of container-->
                            </section>
<section class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="feature">
                                <div class="radial" data-value="63" data-size="208" data-bar-width="8" data-color="purple">
                                    <span class="h3 radial__label">Concept</span>
                                </div>
                                <!--end radial-->
                                <p>
                                    DevHub is built with customization and ease-of-use at its core — whether you're a seasoned developer or just starting out.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="feature">
                                <div class="radial" data-value="80" data-size="208" data-bar-width="8" data-color="purple">
                                    <span class="h3 radial__label">Plan</span>
                                </div>
                                <!--end radial-->
                                <p>
                                    Select from over 270 interface blocks, customise the look to build your perfect page.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="feature">
                                <div class="radial" data-value="100" data-size="208" data-bar-width="8" data-color="purple">
                                    <span class="h3 radial__label">Construct</span>
                                </div>
                                <!--end radial-->
                                <p>
                                    Download your page as a semantic HTML document and easily make further customisations and additions in your editor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>

                            <section class=" ">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">

                                                                <div class="col-md-2 col-md-offset-1 col-sm-4 col-xs-6 text-center">
                                                                    <img class="img-circle" style="width:150px; height:auto;" src="{{asset('externalFolder')}}/img/gad1.png" />
                                                                    <h5>&ldquo;Anifowoshe Gbenga David&rdquo;</h5>
                                                                    <span><b>Web/Mobile Front-end  Engineer</b></span>
                                                                </div>


                                                                <div class="col-md-2  col-sm-4 col-xs-6 text-center">
                                                                    <img  class="img-circle" style="width:150px; height:auto;" src="{{asset('externalFolder')}}/img/ty1.png" />
                                                                    <h5>&ldquo;Ajao Temitayo Etebo &rdquo;</h5>
                                                                    <span><b>PHP  Developer</b></span>
                                                                </div>

                                                                
                                                                <div class="col-md-2  col-sm-4 col-xs-6 text-center">
                                                                    <img  class="img-circle" style="width:150px; height:auto;" src="{{asset('externalFolder')}}/img/tobaa.png" />
                                                                    <h5>&ldquo;Owolabi Toba Samuel&rdquo;</h5>
                                                                     <span><b>Web front/back-end  Developer</b></span>
                                                                </div>

                                                                  <div class="col-md-2  col-sm-4 col-xs-6 text-center">
                                                                    <img class="img-circle" style="width:150px; height:auto;" src="{{asset('externalFolder')}}/img/ty2.png" />
                                                                    <h5>&ldquo;Olaitan Tayo Samuel&rdquo;</h5>
                                                                     <span><b>Web front/back-end  Developer</b></span>
                                                                </div>
                                                                

                                                                <div class="col-md-2  col-sm-4 col-xs-6 text-center">
                                                                    <img class="img-circle" style="width:150px; height:auto;" src="{{asset('externalFolder')}}/img/ms1.png" />
                                                                    <h5>&ldquo;Saliu Moshood Kolawole&rdquo;</h5>
                                                                    <span><b>Ogbonge Python  Developer</b></span>
                                                                </div>
     
                                                          
                                        </div>
                                    </div>
                                    <!--end of row-->
                                </div>
                                <!--end of container-->
                            </section>

                            <footer class="footer-6 unpad--bottom  bg--dark" style=" background-color:purple;">
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
                                                <ul>
                                                    <li><a href="https://www.facebook.com" style="text-decoration:none;">Facebook</a></li>
                                                     <li><a href="#" style="text-decoration:none;">twitter</a></li>
                                                      <li><a href="#" style="text-decoration:none;">instagram</a></li>
                                                    
                                                </ul>
                                                
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
            </div>
        

        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <script src="{{asset('externalFolder')}}/js/jquery-3.1.1.min.js"></script>
        <script src="{{asset('externalFolder')}}/js/jquery.min.js"></script>
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
