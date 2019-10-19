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
                        <img src="assets/img/artwork.jpg" alt="" style="width:450px; height:300px;">
                    </div>
                    <div class="col">
                        <hr>
                        <p class="grey-text">Title</p>
                        <h2>Planned Obsolescence</h2>
                        <p>2005</p>
                        <hr>
                        <p class="grey-text">Artist</p>
                        <h4>Jeff Cancelosi</h4>
                    </div>
                </div>
                <br/><br/>
                <hr style="background-color: #0a0a0a"/>
                <h3>Details</h3>
                <!-- Accession Number Status Temperature Humidity Luminosity Building -->
                <div class="row">
                    <div class="col">
                        <hr>
                        <p class="grey-text">Accession Number</p>
                        <p>001</p>
                    </div>
                    <div class="col">
                        <hr>
                        <p class="grey-text">Status</p>
                        <p>Indoor</p>
                    </div>
                    <div class="col">
                        <hr>
                        <p class="grey-text">Building</p>
                        <p>17</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr>
                        <p class="grey-text">Temperature</p>
                        <p>13°C</p>
                    </div>
                    <div class="col">
                        <hr>
                        <p class="grey-text">Humidity</p>
                        <p>20%</p>
                    </div>
                    <div class="col">
                        <hr>
                        <p class="grey-text">Luminosity</p>
                        <p>3000Lux</p>
                    </div>
                </div>
                <hr style="background-color: #0a0a0a"/>
                <h3>Location</h3>
                <img src="assets/img/map.png" alt="" style="width:1000px;"/>
            </div>
        </div>
    </div>

</main>
@endsection
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="assets/js/mdb.min.js"></script>