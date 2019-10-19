
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Artwork</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="untitled%20folder/css/style.min.css" rel="stylesheet">
    <link href="assets/css/myStyle.css" rel="stylesheet">
    <style>
        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }

        html, body {
            height: 100%;
            margin: 0;
        }

        button{
            background-color:#00668D;
        }

        th,td{
            text-align: center;
        }

        a.mouseover-thumbnail-holder {
            position:relative;
            display:block;
            float:left;
            margin-right:10px;
        }
        .large-thumbnail-style {
            display:block;
            border:10px solid #fff;
            box-shadow:0px 0px 5px #aaa;
        }
        a.mouseover-thumbnail-holder .large-thumbnail-style {
            position:absolute;
            top:0;
            left:-9999px;
            z-index:1;
            opacity: 0;
            transition: opacity .5s ease-in-out;
            -moz-transition: opacity .5s ease-in-out;
            -webkit-transition: opacity .5s ease-in-out;
        }
        a.mouseover-thumbnail-holder:hover .large-thumbnail-style {
            top:0;
            left:105%;
            z-index:1;
            opacity:1;
        }

        .dropdown-toggle{
            z-index: 1;
        }



    </style>
   

   

</head>

<body class="grey lighten-3">

<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar" >
        <div class="container-fluid" style="position:relative; z-index:-1;">


            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <!--
                    <li class="nav-item">
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

        <img src="{{asset('assets/img/logo2.png')}}" class="img-fluid mt-2" style="width:600px; height:80px;" alt="">

        <div class="list-group list-group-flush mt-3">
            <a href="home" class="list-group-item waves-effect text-white" style="background-color:#00668D;">
                <i class="fas fa-chart-pie mr-3" style="background-color:#00668D;"></i>Dashboard
            </a>
            <a href="home" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-home mr-3"></i>Home</a>
            <a id="toggleArrow" class="list-group-item list-group-item-action waves-effect"
               data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="test">
                <i class="far fa-image mr-3"></i>Artwork
                <img id="arrow" src="assets/img/arrow-right.svg" alt="" style="width:10px; height:10px; margin-left:30%;">
                <img id="arrow" src="assets/img/arrow-down.svg" alt="" style="width:10px; height:10px; margin-left:30%; display:none;">
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
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-battery-full mr-3"></i>Battery</a>
        </div>

    </div>
    <!-- Sidebar -->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5" style="position:relative; z-index:1;">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="input-group md-form form-sm form-2 pl-0 ml-5" style="width:90%;">
                <!-- Basic dropdown -->
             
                
                        <div class="btn-group">
                                <button id="blue" class="btn dropdown-toggle text-white" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" style="margin-bottom:1%;">Accession Number<span class="caret"></span></button>
                <div class="dropdown-menu">
                       
                    <!--<li><a class="dropdown-item" name="browser" onclick="check(this.value)" value="Internet Explorer">Internet Explorer<br></li>-->
                    <li><a class="dropdown-item" href="#" onclick="check(0)">Accession Number</a></li>
                    <li><a class="dropdown-item" href="#" onclick="check(1)">Artwork Name</a></li>
                    <li><a class="dropdown-item" href="#" onclick="check(2)">Artist</a></li>
                </div> 
                        </div>
                <!--
                <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                          Dropdown <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Choice1</a></li>
                          <li><a href="#">Choice2</a></li>
                          <li><a href="#">Choice3</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Choice..</a></li>
                        </ul>
                      </div>
                    -->
                <!-- Basic dropdown -->
                <input class="form-control my-0 py-1 amber-border mb-2" 
                id="myInput" type="text" placeholder="Search" aria-label="Search" onkeyup="myFunction()">
                <div class="input-group-append">
                    <span class="input-group-text lighten-3 mb-2"  style="background-color:#00668D"><i class="text-white fas fa-search text-grey" 
                                      aria-hidden="true"></i></span>
                </div>
            </div>

        </div>
        <!-- Heading -->


        <!--Grid row-->
        <div class="row wow fadeIn" style="position:relative; z-index:-1;">

            <!--Grid column-->
            <div class="col-md-12 mb-6" >

                <!--Card-->
                <div class="card" >

                    <!--Card content-->
                    <div class="card-body" >

                        <!-- Table  -->
                        <table class="table table-hover" id="myTable">
                            <!-- Table head -->
                            <thead id="blue" class="text-white lighten-4">
                            <tr style="height: 50px; vertical-align: baseline">
                                <th>Accession Number</th>
                                <th>Image</th>
                                <th>Artwork Name</th>
                                <th>Artist</th>
                                <th>Location</th>
                                
                                <th>Tracker ID</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <!-- Table head -->

                            <!-- Table body -->
                            @if(count($arts) > 0)
                                @foreach($arts as $art)
                            <tbody>
                            <tr>
                                <td scope="row">{{$art->Accession_number}}</td>
                                <td><a class="mouseover-thumbnail-holder">
                                        <img id="tumbnail" class="rounded mx-auto d-block" src="/storage/images/{{$art->Image}}" alt="" style="width:50px; height: 30px;left:40px;position:relative"/>
                                        <img class="large-thumbnail-style" src="/storage/images/{{$art->Image}}" style="width:400px; height: 300px;" alt="">
                                    </a></td>
                                <td>{{$art->Name}}</td>
                                    
                                       <!-- <div class="col mt-1">
                                            <a class="mouseover-thumbnail-holder">
                                                <img id="tumbnail" class="rounded mx-auto d-block" src="/storage/images/{{$art->Image}}" alt="" style="width:40px; height: 30px;"/>
                                                <img class="large-thumbnail-style" src="/storage/images/{{$art->Image}}" style="width:400px; height: 300px;" alt="">
                                            </a>
                                        </div>
                                        <div class="col">
                                            {{$art->Name}}
                                        </div>
                                    </div>
                                </td> -->
                                <td>{{$art->Artist}}</td>
                                <td>{{$art->Location}}</td>
                               
                                <td>{{$art->Tracker_ID}}</td>
                                <td style="width:32%;">
                                    <button id="blue" class="text-white btn-sm" onclick="window.location.href = '/pages/{{$art->Accession_number}}';">Detail</button>
                                    <button id="blue" class="text-white btn-sm " data-toggle="modal" data-target="#modifyModal-{{$art->Accession_number}}">Modify</button>
                                    <button id="red" class="text-white btn-sm" data-toggle="modal" data-target="#removeModal-{{$art->Accession_number}}">Remove</button>
                                    <button id="blue" class="text-white btn-sm" data-toggle="modal" data-target="#connModal-{{$art->Accession_number}}">Connection</button>
                                
                                </td>

                            </tr>
                            
                           


                            </tbody>
                            @endforeach
                            
                            <!-- Table body -->
                        @else
                            <p>no post found</p>
                        @endif
                        </table>
                        <!-- Table  -->
                            <ul class="pagination pg-blue" style="margin-left:750px;">
                                <li class="page-item"><a class="page-link", href={{$arts->previousPageUrl()}}>Previous</a>
                                    </li>
                                <li class="page-item">{{ $arts->links() }}</li>
                                <li class="page-item"><a class="page-link", href={{$arts->nextPageUrl()}}>Next</a>
                                    </li>
                            </ul>

                    </div>



                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

    </div>



</main>
<!--Main layout-->
@foreach($arts as $art)
<!-- Modify Modal -->
<div class="modal fade" id="modifyModal-{{$art->Accession_number}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true" >
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title w-100" id="myModalLabel">Modify Artwork</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['action' => ['PagesController@update',$art->Accession_number], 'method' => 'POST']) !!}
                    <div class="form-group">
                        <label for="accession">Accession Number</label>
                        {{Form::text('accession',$art->Accession_number, ['class' => 'form-control mb-4', 'placeholder' => ''])}}
                        
                    </div>
                    <div class="form-group">
                        <label for="name">Artwork Name</label>
                        {{Form::text('name',$art->Name, ['class' => 'form-control mb-4', 'placeholder' => $art->Name])}}
                        
                    </div>
                    <div class="form-group">
                        <label for="artist">Artist</label>
                        {{Form::text('artist',$art->Artist, ['class' => 'form-control mb-4', 'placeholder' => $art->Artist])}}
                       
                    </div>
                    <div class="form-group">
                        <label for="building">Location</label>
                        {{Form::text('building',$art->Location, ['class' => 'form-control mb-4', 'placeholder' => $art->Location])}} `
                        
                    </div>
                    {{ Form::hidden('_method','PATCH')}}
                    {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    {!!Form::close() !!}
                    <button id="blue" type="button" class="btn text-white" data-dismiss="modal" style="width:163px;">Close</button>
                    
            </div>
            
               
               
              <!--  <button id="blue" type="button" class="btn text-white" style="margin-right:14%">Save changes</button> -->
           
                
        </div>
    </div>
</div>
<!-- Modify Modal -->
@endforeach
@foreach($arts as $art)
<!-- Remove Modal -->
<div class="modal fade" id="removeModal-{{$art->Accession_number}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true" >
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title w-100" id="myModalLabel">Confirmation</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mt-4 mb-4">
                {!! Form::open(['action' => ['PagesController@update',$art->Accession_number], 'method' => 'POST']) !!}
                <div class="form-group">
                        
                        {{Form::hidden('accession',$art->Accession_number, ['class' => 'form-control mb-4', 'placeholder' => ''])}}
                        
                    </div>
                    <div class="form-group">
                        
                        {{Form::hidden('name',$art->Name, ['class' => 'form-control mb-4', 'placeholder' => $art->Name])}}
                        
                    </div>
                    <div class="form-group">
                        
                        {{Form::hidden('artist', $art->Artist, ['class' => 'form-control mb-4', 'placeholder' => $art->Artist])}}
                       
                    </div>
                    <div class="form-group">
                        
                        {{Form::hidden('building',$art->Location, ['class' => 'form-control mb-4', 'placeholder' => $art->Location])}} 
                        
                    </div>
                    <div class="form-group">
                        
                        {{Form::hidden('archive',1, ['class' => 'form-control mb-4', 'placeholder' => $art->Archieve])}} 
                        
                    </div>
                    <h4><i class="far fa-question-circle ml-3"></i>&nbsp;&nbsp;Are you sure to archive this artwork?</h4>
                    <h5 style="text-align: center;">&nbsp;&nbsp;Accession Number: {{$art->Accession_number}}</h4>
                <div class="form-group">
                    
                    {{Form::hidden('tracker_id','', ['class' => 'form-control mb-4', 'placeholder' => $art->Tracker_ID])}} 
                    
                </div>
                
                {{ Form::hidden('_method','PATCH')}}
                <div class="modal-footer">
                        <button id="blue" type="submit" class="btn text-white" style="width:163px;">Yes</button>
                        <button id="red" type="button" class="btn text-white" data-dismiss="modal" style="width:163px;margin-right:12.5%">Cancel</button>
                        
                    </div>
               <!-- {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}} -->
                {!!Form::close() !!}
            </div>
            
        </div>
    </div>
</div>
<!-- Remove Modal -->
@endforeach
<!-- Connection Modal -->
@foreach($arts as $art)
<div class="modal fade" id="connModal-{{$art->Accession_number}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true" >
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title w-100" id="myModalLabel">Connection</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    {!! Form::open(['action' => ['PagesController@update',$art->Accession_number], 'method' => 'POST']) !!}
                    <div class="form-group">
                            
                            {{Form::hidden('accession',$art->Accession_number, ['class' => 'form-control mb-4', 'placeholder' => ''])}}
                            
                        </div>
                        <div class="form-group">
                            
                            {{Form::hidden('name',$art->Name, ['class' => 'form-control mb-4', 'placeholder' => $art->Name])}}
                            
                        </div>
                        <div class="form-group">
                            
                            {{Form::hidden('artist', $art->Artist, ['class' => 'form-control mb-4', 'placeholder' => $art->Artist])}}
                           
                        </div>
                        <div class="form-group">
                            
                            {{Form::hidden('building',$art->Location, ['class' => 'form-control mb-4', 'placeholder' => $art->Location])}} 
                            
                        </div>
                    <div class="form-group">
                        <label for="tracker_id">Tracker</label>
                        {{Form::text('tracker_id','', ['class' => 'form-control mb-4', 'placeholder' => $art->Tracker_ID])}} 
                        
                    </div>
                    {{ Form::hidden('_method','PATCH')}}
                    <div class="modal-footer">
                        @if(!empty($art->Tracker_ID))
                            <button id="blue" type="submit" class="btn text-white" style="width:163px;">Connect</button>
                            <button id="red" type="button" class="btn text-white" data-toggle="modal"  data-target="#DisconnModal-{{$art->Accession_number}}" style="width:163px;margin-right:12.5%">Disconnect</button>
                        @else
                            <button id="blue" type="submit" class="btn text-white" style="width:163px;margin-right:32%">Connect</button>
                        @endif
                        </div>
                   <!-- {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}} -->
                    {!!Form::close() !!}
            </div>
          
        </div>
    </div>
</div>
<!-- Connection Modal -->
@endforeach
<!-- Dis-Connection Modal -->
@foreach($arts as $art)
<div class="modal fade" id="DisconnModal-{{$art->Accession_number}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true" >
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title w-100" id="myModalLabel">Disconnection</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    {!! Form::open(['action' => ['PagesController@update',$art->Accession_number], 'method' => 'POST']) !!}
                    <div class="form-group">
                            
                            {{Form::hidden('accession',$art->Accession_number, ['class' => 'form-control mb-4', 'placeholder' => ''])}}
                            
                        </div>
                        <div class="form-group">
                            
                            {{Form::hidden('name',$art->Name, ['class' => 'form-control mb-4', 'placeholder' => $art->Name])}}
                            
                        </div>
                        <div class="form-group">
                            
                            {{Form::hidden('artist', $art->Artist, ['class' => 'form-control mb-4', 'placeholder' => $art->Artist])}}
                           
                        </div>
                        <div class="form-group">
                            
                            {{Form::hidden('building',$art->Location, ['class' => 'form-control mb-4', 'placeholder' => $art->Location])}} 
                            
                        </div>
                        <h4><i class="far fa-question-circle ml-3"></i>&nbsp;&nbsp;Are you sure to disconnect from this tracker?</h4>
                        <h5 style="text-align: center;">&nbsp;&nbsp;Tracker ID: {{$art->Tracker_ID}}</h4>
                    <div class="form-group">
                        
                        {{Form::hidden('tracker_id','', ['class' => 'form-control mb-4', 'placeholder' => $art->Tracker_ID])}} 
                        
                    </div>
                    
                    {{ Form::hidden('_method','PATCH')}}
                    <div class="modal-footer">
                            <button id="blue" type="submit" class="btn text-white" style="width:163px;">Yes</button>
                            <button id="red" type="button" class="btn text-white" data-dismiss="modal" style="width:163px;margin-right:12.5%">No</button>
                            
                        </div>
                   <!-- {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}} -->
                    {!!Form::close() !!}
            </div>
          
        </div>
    </div>
</div>
<!-- Dis-Connection Modal -->
@endforeach
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="assets/js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();
var global=0;
    $(document).ready(function(){
        $("#toggleArrow").click(function(){
            $(this).find("img").toggle();
        });
        $(".dropdown-menu li a").click(function(){
  
  $(".btn:first-child").html($(this).text()+' <span class="caret"></span>');
  
})
    });
    function check(browser)
        {
            global=browser;
        }
        
    function myFunction()
        {
            if (global==0)
            {
            var input,filter,table,tr,td,i,txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (i=0; i<tr.length; i++)
            {
                td = tr[i].getElementsByTagName("td")[0];
                if(td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) >-1)
                    {
                        tr[i].style.display = "";
                    }
                    else {
                        tr[i].style.display = "none";
                    }
                }
            }
            }
            if (global==1)
            {
            var input,filter,table,tr,td,i,txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (i=0; i<tr.length; i++)
            {
                td = tr[i].getElementsByTagName("td")[2];
                if(td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) >-1)
                    {
                        tr[i].style.display = "";
                    }
                    else {
                        tr[i].style.display = "none";
                    }
                }
            }
            }
            if (global==2)
            {
            var input,filter,table,tr,td,i,txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (i=0; i<tr.length; i++)
            {
                td = tr[i].getElementsByTagName("td")[3];
                if(td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) >-1)
                    {
                        tr[i].style.display = "";
                    }
                    else {
                        tr[i].style.display = "none";
                    }
                }
            }
            }
        }
</script>
</body>
</html>
