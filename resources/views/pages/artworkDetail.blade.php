@extends('layouts.header')

@section('content')
<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">
        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">
            <!--Card content-->
            <div class="card-body justify-content-between">
                <div class="row">
                    <div class="col text-center">
                        <img src="/storage/images/{{$arts->Image}}"" alt="" style="width:450px; height:300px;">
                    </div>
                    <div class="col">
                        <hr>
                        <p class="grey-text">Title</p>
                        <h2>{{$arts->Name}}</h2>
                        <p>2005</p>
                        <hr>
                        <p class="grey-text">Artist</p>
                        <h4>{{$arts->Artist}}</h4>
                    </div>
                </div>
                <br/><br/>
                <hr style="background-color: #0a0a0a"/>
                <h3>Details</h3>
                <!-- Accession Number Status Temperature Humidity Luminosity Building -->
                @if(!empty($arts->trackers))
               
                <div class="row">
                    <div class="col">
                        <hr>
                        <p class="grey-text">Accession Number</p>
                        <p>{{$arts->Accession_number}}</p>
                    </div>
                    <div class="col">
                        <hr>
                        <p class="grey-text">Status</p>
                        <p>Indoor</p>
                    </div>
                    <div class="col">
                        <hr>
                        <p class="grey-text">Building</p>
                        <p>{{$arts->Location}}</p>
                    </div>
                </div>
                <div class="row">
                        
                    <div class="col">
                        <hr>
                        <p class="grey-text">Temperature</p>
                        @if(($arts->trackers->Temperature)>30)
                        <p class="important">{{$arts->trackers->Temperature}}</p>
                        @else
                        <p>{{$arts->trackers->Temperature}}</p>
                        @endif
                    </div>
                    <div class="col">
                        <hr>
                        <p class="grey-text">Light</p>
                        @if(($arts->trackers->Light)<20)
                        <p class="important">{{$arts->trackers->Light}}</p>
                        @else
                        <p>{{$arts->trackers->Light}}</p>
                        @endif
                    </div>
                    <div class="col">
                        <hr>
                        <p class="grey-text">Illumination</p>
                        @if(($arts->trackers->illumination)>10)
                        <p class="important">{{$arts->trackers->illumination}}</p>
                        @else
                        <p>{{$arts->trackers->illumination}}</p>
                        @endif
                    </div>
                </div>
                <hr style="background-color: #0a0a0a"/>
                <h3>Location</h3>
               
                <div id="mapdiv" class="mapdiv"  ></div>
                <script id="iframe" src="http://www.openlayers.org/api/OpenLayers.js"></script>
                <script>
                  map = new OpenLayers.Map("mapdiv");
                  map.addLayer(new OpenLayers.Layer.OSM());
                  var lonLat = new OpenLayers.LonLat( {{$arts->trackers->Longtitude}} ,{{$arts->trackers->Latitude}})
                       .transform(
                           new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
                          map.getProjectionObject() // to Spherical Mercator Projection
            );
                  var zoom=18;
                  var markers = new OpenLayers.Layer.Markers( "Markers" );
                     map.addLayer(markers);
                     markers.addMarker(new OpenLayers.Marker(lonLat));
                  map.setCenter (lonLat, zoom);
                 </script>
                <!--<img src="{{asset('assets/img/map.png')}}" alt="" style="width:1000px;"/> -->
            </div>
        </div>
    </div>
            
            @else
            
                <div class="row">
                        <div class="col">
                            <hr>
                            <p class="grey-text">Accession Number</p>
                            <p>{{$arts->Accession_number}}</p>
                        </div>
                        <div class="col">
                            <hr>
                            <p class="grey-text">Status</p>
                            <p>Indoor</p>
                        </div>
                        <div class="col">
                            <hr>
                            <p class="grey-text">Building</p>
                            <p>{{$arts->Location}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <hr>
                            <p class="grey-text">Temperature</p>
                            <p class="important">Unconnected</p>
                        </div>
                        <div class="col">
                            <hr>
                            <p class="grey-text">Light</p>
                            <p class="important">Unconnected</p>
                        </div>
                        <div class="col">
                            <hr>
                            <p class="grey-text">Luminosity</p>
                            <p class="important">Unconnected</p>
                        </div>
                    </div>
                    <hr style="background-color: #0a0a0a"/>
                <h3 style="color:red">Location Unconnected</h3>
            
            @endif
                
               
               

</main>
@endsection
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>