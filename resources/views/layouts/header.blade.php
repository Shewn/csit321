<!DOCTYPE html>
<html lang="en">

<head>
        <base href="/public">
       
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UOW Art Collection</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('assets/css/mdb.css')}}" rel="stylesheet">
    <!-- WYSIWYG -->
    <link href="{{asset('assets/css/wysiwyg.css')}}" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="{{asset('assets/css/addons/datatables.css')}}" rel="stylesheet">
    <!-- DataTables Select CSS -->
    <link href="{{asset('assets/css/addons/datatables-select.css')}}" rel="stylesheet">
    <!-- Directives -->
    <link href="{{asset('assets/css/addons/directives.css')}}" rel="stylesheet">
    <!-- Full Calendar -->
    <link href="{{asset('assets/css/addons/fullcalendar.min.css')}}" rel="stylesheet">
    <!-- File Upload -->
    <link href="{{asset('assets/css/addons/mdb-file-upload.css')}}" rel="stylesheet">
    <!-- DataTables Editor CSS -->
    <link href="{{asset('assets/css/addons/table-editor.css')}}" rel="stylesheet">
    <!-- MDBootstrap Card Extended -->
    <link href="{{asset('assets/css/addons-pro/cards-extended.css')}}" rel="stylesheet">
    <!-- MDBootstrap Chat -->
    <link href="{{asset('assets/css/addons-pro/chat.css')}}" rel="stylesheet">
    <!-- MDBootstrap Multiple Range -->
    <link href="{{asset('assets/css/addons-pro/muli-range.css')}}" rel="stylesheet">
    <!-- MDBootstrap Stepper -->
    <link href="{{asset('assets/css/addons-pro/stepper.css')}}" rel="stylesheet">
    <!-- MDBootstrap Steppers -->
    <link href="{{asset('assets/css/addons-pro/steppers.css')}}" rel="stylesheet">
    <!-- MDBootstrap Timeline -->
    <link href="{{asset('assets/css/addons-pro/timeline.css')}}" rel="stylesheet">
    <!-- MDBootstrap Accordion -->
    <link href="{{asset('assets/css/modules/accordion-extended.css')}}" rel="stylesheet">
    <!-- MDBootstrap Animations -->
    <link href="{{asset('assets/css/modules/animations-extended.css')}}" rel="stylesheet">
    <!-- MDBootstrap Charts -->
    <link href="{{asset('assets/css/modules/charts.css')}}" rel="stylesheet">
    <!-- MDBootstrap Light Box -->
    <link href="{{asset('assets/css/modules/lightbox.css')}}" rel="stylesheet">
    <!-- MDBootstrap Mega Menu -->
    <link href="{{asset('assets/css/modules/megamenu.css')}}" rel="stylesheet">
    <!-- MDBootstrap Parallax -->
    <link href="{{asset('assets/css/modules/parallax.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('untitled%20folder/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/myStyle.css')}}" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <style>
        html
        {
            height: 100%;
            margin: 0;
            
        }
        body{
            height: 100%;
            margin: 0;
            overflow: visible;
            pointer-events: auto;
        }

        button{

        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f1f1f1;
            font-size: 20px;
        }
        .card-body justify-content-between{
            overflow: hidden;
            
        }
        #sublink{
            font-size: 13px;
        }
        p.important {
        color: red;
        }
        #mapdiv {
      
              
        }
        
        #iframe {
         
            
        }



    </style>
</head>

<body class="grey lighten-3">
       
<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                   <!-- <li class="nav-item">
                        <a class="nav-link waves-effect" href="#">Home
                               
                            <span class="sr-only">(current)</span>
                           
                        </a>
                        
                    </li> -->
                    @include('inc.messages') 
                </ul>

                <!-- Right -->
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">


       <!-- <img src="{{asset('assets/img/logo.png')}}" class="img-fluid mt-2" style="width:500px; height:65px;" alt=""> -->
        <img src="{{asset('assets/img/logo2.png')}}" class="img-fluid mt-2" style="width:600px; height:80px;" alt="">


        <div class="list-group list-group-flush mt-3">
            <a href="home" id="blue" class="list-group-item waves-effect text-white">
                <i class="fas fa-chart-pie mr-3 "></i>Dashboard
            </a>
            <a href="home" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-home mr-3"></i>Home</a>
            <a id="toggleArrow" class="list-group-item list-group-item-action waves-effect"
               data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="test">
                <i class="far fa-image mr-3"></i>Artwork
                <img id="arrow" src="{{asset('assets/img/arrow-right.svg')}}" alt="" style="width:10px; height:10px; margin-left:30%;">
                <img id="arrow" src="{{asset('assets/img/arrow-down.svg')}}" alt="" style="width:10px; height:10px; margin-left:30%; display:none;">
            </a>
            <div class="collapse" id="collapseExample">
                <div class="list-group list-group-flush mt-1">
                    <a id="sublink" href="artwork" class="list-group-item list-group-item-action waves-effect">
                        Current Artwork</a>
                    <a id="sublink" href="addArtwork" class="list-group-item list-group-item-action waves-effect">
                        Add Artwork</a>
                    <a id="sublink" href="artworkArchive" class="list-group-item list-group-item-action waves-effect">
                        Artwork Archive</a>
                </div>
            </div>
            <a href="map" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-map mr-3"></i>Maps</a>
            <a href="home" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-battery-full mr-3"></i>Battery</a>

        </div>



    </div>
    <!-- Sidebar -->

</header>
<!--Main Navigation-->

@yield('content')
<script>
    $(document).ready(function(){
        $("#toggleArrow").click(function(){
            $(this).find("img").toggle();
        });
        $('.mapdiv').click(function () {
    $('body').css("overflow", "hidden");
});

$( '.mapdiv' ).mouseleave(function() {
  $('body').css("overflow", "hidden"); 
});
    });
   
    
</script>
<script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>


