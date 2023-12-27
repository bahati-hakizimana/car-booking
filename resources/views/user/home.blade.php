<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha384-rm7LJ1lC8CS9ZquFjJSKZlXvIpjmP5QSmV2P93aLlIwI69vwvc1k2t+CFwDlPgqP" crossorigin="anonymous">




    <title>Empower Africa Car Booking</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    {{-- css --}}

    {{-- @yield('css') --}}
    <style type="text/css">
      .logo{
        width: 200px;
        height: 50px;
      }

      .collapse{
        visibility: visible !important;
      }
      .product-item {
        position: relative;
      }
      .product-item {
        transition: all 0.3s;
      }
      .product-item:hover {
        transform: scale(1.15);
      }

      .product-item .image-container {
        position: relative;
        overflow: hidden;
      }

      .product-item .image-container img {
        transition: transform 0.3s ease;
      }

      .product-item .image-container:hover img {
        transform: scale(1.1); 
      }
      section.footer {
  background-color: #21d4fd;
 
  position: relative;
  font-family: "Poppins";
  padding: 25px 0px;
}
.footer__content {
  padding: 25px;
  text-align: center;
  color: #fff;
  
}
.footer__content img {
  width: 5%;
  position: absolute;
  top: -50px;
  border: 1px solid red;
}
.footer__heading {
  position: relative;
}

.footer__heading::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 45%;
  height: 5px;
  margin: 0;
  border-radius: 50px;
  width: 20%;
  transform: translate(-50%, -50%);
  /* background-color: rgb(255, 255, 255); */
}
.footer__content p {
  font-size: 12px;
  font-weight: 100;
  padding: 10px 0px;
}
ul.social__media {
  margin: 0;
  padding: 0;
  display: inline-block;
  margin-top: 15px;
}
ul.social__media li {
  list-style-type: none;
  display: inline-block;
  margin-right: 15px;
}
ul.social__media li a {
  color: #000;
  font-size: 20px;
}
ul.social__media li {
  text-align: center;
  height: 45px;
  width: 45px;
  border-radius: 50px;
  background-color: #fff;
  line-height: 40px;
  border: 2px solid #545d5d;
  box-shadow: 0px 1px #fff;
  box-shadow: 0 2px 10px -1px rgba(0, 0, 0, 0.55),
    0 0px 20px 0px rgba(0, 0, 0, 0.55);
}
 
ul.bus__list {
  padding: 0;
  margin: 0;
}
 
ul.bus__list li {
  list-style-type: none;
  margin-bottom: 5px;
}
.left-content .featured-list li{
  list-style: none;
}
   </style>

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a href="{{route('homepage')}}"><img class="logo" src="assets/images/Empower.png" alt="logo"></a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('homepage')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{url('aboutus')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contactus')}}">Contact Us</a>
              </li>
              <li class="nav-item">
              @if (Route::has('login'))
             
                  @auth

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('showcart')}}">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                      Cart[{{$count}}]</a>
                    
                  </li>
                     
                        <x-app-layout>
    
                        </x-app-layout>
                       
                  @else
                      <li><a class="nav-link"  href="{{ route('login') }}" >Log in</a></li>

                      @if (Route::has('register'))
                         <li><a class="nav-link"   href="{{ route('register') }}">Register</a></li>
                      @endif
                  @endauth
              
          @endif

              </li>
            </ul>
          </div>
        </div>
      </nav>
      @if(session()->has('message'))
                <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
                
                @endif
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
    </div>
    <!-- Banner Ends Here -->
    @include('user.product')
    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h4 class="text-center">Vist Our Office In Kigali</h4>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="left-content">
              
              <ul >
                
                <li><i class="fa fa-phone text-primary" aria-hidden="true"></i> +250780045364</li>
                <li class="mt-1"><i class="fa fa-envelope text-danger" aria-hidden="true"></i> info@empowerafricanow.com</li>
                <li class="mt-1"><i class="fa fa-phone text-primary" aria-hidden="true"></i> +250 788 908 950</li>
                <li class="mt1"><i class="fa fa-envelope text-danger" aria-hidden="true"></i> hyper100@gmail.com</li>
                <li class="mt-1"><i class="fa fa-whatsapp text-primary" aria-hidden="true"></i> +1 (403) 473-1358</li>
                <li class="mt-1"><i class="fa fa-map-marker text-danger" aria-hidden="true"></i> KICUKIRO CENTRE</li>
                <li class="mt-1"><i class="fa fa-map-marker text-danger" aria-hidden="true"></i> KK 15 RD</li>
                <li class="mt-1"><i class="fa fa-home text-primary" aria-hidden="true"></i> SANGWA PLAZA</li>
                
              </ul>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image" id="map" style="height: 400px;">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <section class="footer bg-dark mt-3">
      <div class="container bg-dark shadow">
        <div class="footer__content bg-dark">
          <div class="footer__heading">
            <h4 class="text-light">get us through our socialmedia</h4>
          </div>
          <p class="mb-0 text-light">copylight © 2023 EmpowerAfrica Now Ltd</p>
     
          <ul class="social__media">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </section>
  
  
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  
    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>
  
  
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNGNf-_xZtojxLuBctw3sGOw6bWT4Lvsc&callback=initMap" 
    async defer></script> --}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNGNf-_xZtojxLuBctw3sGOw6bWT4Lvsc&callback=initMap" async defer></script>
    <script>
      function initMap() {
          var kicukiroCenter = { lat: -1.98035, lng: 30.10775 };
          var map = new google.maps.Map(document.getElementById('map'), {
              center: kicukiroCenter,
              zoom: 12  
          });
          var marker = new google.maps.Marker({
              position: kicukiroCenter,
              map: map,
              title: 'Kicukiro, Kigali'
          });
      }
  </script>

    




    


  </body>

</html>
