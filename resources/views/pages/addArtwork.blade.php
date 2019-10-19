@extends('layouts.header')

@section('content')
<!--Main layout-->
<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5" style="position:relative; z-index:1;">
        <div style="background-color: white">
            {{ Form::open(['action' => 'PagesController@store', 'method' => 'POST', 
            'enctype'=> 'multipart/form-data', 'class'=>"text-center border border-light p-5"]) }}

                <p class="h4 mb-4" style="color:#27658A;">Add New Artwork</p>
                <div class="form-group">
                    
                    {{Form::text('accession','', ['class' => 'form-control mb-4', 'placeholder' => 'Accession Number'])}}
                </div>
                <div class="form-group">
                   
                    {{Form::text('name','', ['class' => 'form-control mb-4', 'placeholder' => 'Artwork Name'])}}
                </div>
                <div class="form-group">
                   
                    {{Form::text('artist','', ['class' => 'form-control mb-4', 'placeholder' => 'Artist'])}}
                </div>
                <div class="form-group">
                   
                    {{Form::text('building','', ['class' => 'form-control mb-4', 'placeholder' => 'Building Number'])}}
                </div>
                <div class="form-group">
                   
                    {{Form::hidden('archieve','', ['class' => 'form-control mb-4', 'placeholder' => 'Archieve'])}}
                </div>
                <div class="form-group">
                   
                    {{Form::hidden('tracker_id','', ['class' => 'form-control mb-4', 'placeholder' => 'Tracker ID'])}}
                </div>
              
                <!-- Accession 
                <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Accession Number">

                 Artwork Name 
                <input type="text" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="Artwork Name">

                 Artist 
                <input type="text" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="Artist">

                Building Number 
                <input type="email" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="Building Number"> -->

                
                    {{Form::file('image')}}
                    
                    
                
                        
                <br/>
                <br/>

                <!-- Submit button -->
                <button class="btn btn-block" type="submit" style="background-color:#27658A; color:white">Submit</button>


                {{ Form::submit('Submit', ['class'=>'btn btn-block','style'=>'blackground-color:#27658A; color:white'])}}
                {{ Form::close() }}
        </div>
    </div>
</main>
<!--Main layout-->

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

</script>

<!-- Charts -->
<script>

</script>

<!--Google Maps-->
<script src="https://maps.google.com/maps/api/js"></script>
<script>
    // Regular map
    function regular_map() {
        var var_location = new google.maps.LatLng(40.725118, -73.997699);

        var var_mapoptions = {
            center: var_location,
            zoom: 14
        };

        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: "New York"
        });
    }

    new Chart(document.getElementById("horizontalBar"), {
        "type": "horizontalBar",
        "data": {
            "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
            "datasets": [{
                "label": "My First Dataset",
                "data": [22, 33, 55, 12, 86, 23, 14],
                "fill": false,
                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
                ],
                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)"
                ],
                "borderWidth": 1
            }]
        },
        "options": {
            "scales": {
                "xAxes": [{
                    "ticks": {
                        "beginAtZero": true
                    }
                }]
            }
        }
    });

</script>
</body>
@endsection
</html>

