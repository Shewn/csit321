@extends('layouts.header')
  <!--Main layout-->
  @section('content')
 
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body justify-content-between">

            <div class="row">
                <div class="col text-center">
                    <a style="color:#00668D;" href="artwork">
                        <i class="far fa-image fa-3x"></i>
                        <h4>Artwork</h4>
                    </a>
                </div>

                <div class="col text-center blue-grey-text" >
                    <a style="color:#00668D;" href="map">
                        <i id="colorBlue" class="fas fa-map-marker-alt fa-3x"></i>
                        <h4>Map</h4>
                    </a>
                </div>

                <div class="col text-center blue-grey-text" >
                    <a style="color:#00668D;" href="home">
                        <i id="colorBlue" class="fas fa-history fa-3x"></i>
                        <h4>History</h4>
                    </a>
                </div>

                <div class="col text-center blue-grey-text">
                    <a style="color:#00668D;" href="home">
                        <i id="colorBlue" class="fas fa-battery-full fa-3x"></i>
                        <h4>Battery</h4>
                    </a>
                </div>
            </div>

        </div>

      </div>
      <!-- Heading -->


      <!--Grid row-->
      <div class="row wow fadeIn">
        <!--Grid column-->
        <div class="col-md-12 mb-6 mt-3">

          <!--Card-->
          <div class="card">
              <div class="row">
                  <div class="col-sm">
                      <i id="colorRed" class="fas fa-exclamation-circle fa-2x mt-3 ml-4"></i>
                  </div>
                  <div style="margin-left:-1255px; margin-top:20px; position:relative;">
                      <h5>Notification</h5>
                  </div>
              </div>

              <!--Card content-->
            <div class="card-body">

              <!-- Table  -->
              <table class="table table-hover text-center">
                <!-- Table head -->
                <thead id="blue" class="text-white lighten-4" >
                  <tr>
                    <th>Date/Time</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                  <tr>
                    <td>06-05-2019  1:35PM</td>
                    <td>Tracker(id : 001)  Alert warning</td>
                    <td><button id="blue" class="btn-sm text-white" onclick="window.location.href = '/a'";>See Detail</button></td>


                  </tr>
                  <tr>
                    <td>06-05-2019  1:35PM</td>
                    <td>Tracker(id : 001)  Alert warning</td>
                      <td><button id="blue" class="btn-sm text-white" style="background-color:#27658A;" onclick="window.location.href = '/a'"; >See Detail</button></td>


                  </tr>
                  <tr>
                    <td>06-05-2019  1:35PM</td>
                    <td>Tracker(id : 001)  Alert warning</td>
                      <td><button id="blue" class="btn-sm text-white" style="background-color:#27658A;" onclick="window.location.href = '/a'";>See Detail</button></td>


                  </tr>

                </tbody>
                <!-- Table body -->
              </table>
              <!-- Table  -->

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

</body>

@endsection
</html>
