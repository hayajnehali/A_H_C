<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--css-->
    <link rel="stylesheet" href="{{asset("css/cssfile.css")}}">
    <!--fontawsom-->
    <link rel="stylesheet" href="{{asset("css/all.min.css")}}">
    <!--Bootstrab-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
    <title name="header">Document</title>

</head>
<body onscroll="n()">

    <nav class="navbar navbar-expand-lg navbar-light bg " id="navsss" >
        <div class="nav" >
            <a class="navbar-brand" href="{{'index'}}">A-H-C</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto" style="margin-right: 4rem;">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('index')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('index')}}">Cars <span class="sr-only">(current)</span></a>
                  </li>
                @auth
                  <li class="nav-item">
                      <a class="nav-link disabled" href="{{url('/dashboard')}}" tabindex="-1" aria-disabled="true">Admin</a>
                  </li>


                    @else
                    <li class="nav-item">
                        <a class="nav-link disabled" href="{{'login'}}" tabindex="-1" aria-disabled="true">Login</a>
                      </li>

                @endauth

            </ul>


            </div>
        </div>
      </nav>






      @yield("contant")






        <!-- Footer -->
  <footer
            class="text-center text-lg-start text-white"
            style="background-color: #1c2331"
  >
<!-- Section: Social media -->
<section
     class="d-flex justify-content-between p-4"
     style="background-color: #fbb710"
>
      <!-- Left -->
<div class="me-5">
     <span>Get connected with us on social networks:</span>
</div>
<!-- Left -->

<!-- Right -->
<div>
    <a href="" class="text-white me-4">
       <i class="fab fa-facebook-f"></i>
    </a>
    <a href="" class="text-white me-4">
       <i class="fab fa-twitter"></i>
    </a>
    <a href="" class="text-white me-4">
        <i class="fab fa-google"></i>
    </a>
    <a href="" class="text-white me-4">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
    </a>
<a href="" class="text-white me-4">
  <i class="fab fa-github"></i>
</a>
</div>
<!-- Right -->
</section>
<!-- Section: Social media -->

<!-- Section: Links  -->
<section class="">
<div class="container text-center text-md-start mt-5">
<!-- Grid row -->
<div class="row mt-3">
  <!-- Grid column -->
    <div class="col-md-5 col-lg-6 col-xl-5 mx-auto mb-8" id="map">


    </div>





  <!-- Grid column -->
  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
    <!-- Links -->
    <h6 class="text-uppercase fw-bold">Useful links</h6>
    <hr
        class="mb-4 mt-0 d-inline-block mx-auto"
        style="width: 60px; background-color: #7c4dff; height: 2px"
        />
    <p>
      <a href="#!" class="text-white">Your Account</a>
    </p>
    <p>
      <a href="#!" class="text-white">Become an Affiliate</a>
    </p>
    <p>
      <a href="#!" class="text-white">Shipping Rates</a>
    </p>
    <p>
      <a href="#!" class="text-white">Help</a>
    </p>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
    <!-- Links -->
    <h6 class="text-uppercase fw-bold">Contact</h6>
    <hr
        class="mb-4 mt-0 d-inline-block mx-auto"
        style="width: 60px; background-color: #7c4dff; height: 2px"
        />
    <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
    <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
  </div>
  <!-- Grid column -->
</div>
<!-- Grid row -->
</div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div
 class="text-center p-3"
 style="background-color: #fbb710"
 >
© 2020 Copyright:
<a class="text-white" href="https://mdbootstrap.com/"
 >MDBootstrap.com</a
>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jsfile.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>



    <!--google map-->
  <script
  src="https://maps.googleapis.com/maps/api/js?AIzaSyDHaP4ZjXY6iiYfKFjtavMpx_aBhwRHQ-Q&callback=initMap&v=weekly"
  defer
></script>
</html>
