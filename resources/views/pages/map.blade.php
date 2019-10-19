@extends('layouts.header')
@section('content')

    <div id="mapdiv"></div>
    <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
    <script>
      map = new OpenLayers.Map("mapdiv");
      map.addLayer(new OpenLayers.Layer.OSM());
      var index=0;
      var lonLat = [];
      var markers = [];
      @if(count($arts) > 0)
      @foreach($arts as $art)
      @if(!empty($art->trackers))
      lonLat[index] = new OpenLayers.LonLat( {{$art->trackers->Longtitude}} ,{{$art->trackers->Latitude}} )
            .transform(
              new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
              map.getProjectionObject() // to Spherical Mercator Projection
            );
  
      markers[index] = new OpenLayers.Layer.Markers( "Markers" );
      map.addLayer(markers[index]);
      markers[index].addMarker(new OpenLayers.Marker(lonLat[index]));
      index = index + 1;
      @endif
      @endforeach
      @endif
      
      var zoom=16;
  
    
      
     
  
      map.setCenter (lonLat[1], zoom);
    </script>
  </body>
  @endsection
  </html>
