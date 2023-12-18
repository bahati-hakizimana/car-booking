<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Empower Africa Car Booking</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/contact.css">

    {{-- css --}}
    <style>
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
                <a class="nav-link" href="#">Contact Us</a>
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
        {{-- <div class="owl-banner owl-carousel">
          <div class="banner-item-01">
            <div class="text-content">
              <h4>Please</h4>
              <h2>Contact Empower Africa Now</h2>
            </div>
          </div>
          <div class="banner-item-02">
            <div class="text-content">
              <h4>Flash Deals</h4>
              <h2>Get your best products</h2>
            </div>
          </div>
          <div class="banner-item-03">
            <div class="text-content">
              <h4>Last Minute</h4>
              <h2>Grab last minute deals</h2>
            </div>
          </div>
        </div> --}}
      </div>
      
      <div class="form-area">
        <h4 class="text-center mb-3"> Contact Us</h4>
        <div class="container">
            <div class="row single-form g-0">
                <div class="col-sm-12 col-lg-6">
                    <div class="left">
                        <h2><span>Contact Us for</span> <br>Business Enquies</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="right">
                       <i class="fa fa-caret-left"></i>
                        <form class="contact-form" action="{{route('store.message')}}" method="POST">
                          @csrf
                          <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                          </div>
                          <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                          </div>
                          <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label">subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                          </div>
                          <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                            <input type="number" id="phone" name="phone">
                          </div>
                          <div class="mb-1">
                            <label for="exampleInputPassword1" class="form-label">Message</label>
                              <textarea type="text" name="message" class="form-control" id="message"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      {{-- <div class="col-md-12">
        <div class="read-more-container">
          
        <div class="row">
            
                <div class="inner-content text-center mt-4">

                      <div class="container-para">
                        
                        <form class="contact-form" action="{{route('store.message')}}" method="POST">
                            <h2>Contact Us</h2>
                            @csrf
                            <div class="form-flex d-flex">
                                <div class="first-part">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="second-part">
                                    <div class="form-group">
                                        <label for="phone">Phone:</label>
                                        <input type="number" id="phone" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject:</label>
                                        <input type="text" id="subject" name="subject" required>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea id="message" name="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="submit-button btn btn-danger">Send Message</button>
                        </form>
                      </div>
              
                      
              
                  </div>
                </div>
                
            </div>
        </div>
   
   
      </div> --}}
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
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                   
      if(! cleared[t.id]){                     
          cleared[t.id] = 1; 
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>
    <script>
      const parentContainer =  document.querySelector('.read-more-container');

       parentContainer.addEventListener('click', event=>{

    const current = event.target;

    const isReadMoreBtn = current.className.includes('read-more-btn');

    if(!isReadMoreBtn) return;

    const currentText = event.target.parentNode.querySelector('.read-more-text');

    currentText.classList.toggle('read-more-text--show');

    current.textContent = current.textContent.includes('Read More') ? "Read Less..." : "Read More...";

})
    </script>

    


  </body>

</html>
