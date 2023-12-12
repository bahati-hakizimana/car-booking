<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Empower Africa Car Booking</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    {{-- css --}}
    <style type="text/css">
      .logo{
        width: 200px;
        height: 50px;
      }

      .collapse{
        visibility: visible !important;
      }
      .about{
        font-weight: 400;
        font-size: medium;
        color: black;
      }
      .product-item
      {
        margin-left: 2rem;
      }
      .read-more-container{
    display: flex;
    flex-direction: column;
    color: #111;
    gap: 1rem;
    margin-right: 4rem;
}

.container-para{
    padding: 2rem;
    background-color: #fff;
    border-radius: 2px;
    line-height: 1.4rem;
    box-shadow: 0 0 1rem rgba(0,0,0,.1);
}

.read-more-btn{
    color: #0984e3;
}

.read-more-text{
    display: none;
}

.read-more-text--show{
    display: inline;
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
     
    </header>

    
    <!-- Banner Starts Here -->
    <div class="banner header-text mb-3">
       
      </div>
    
  
        <div class="row mt-3">
            <div class="col-md-12">
                <h5 class="text-center mt-4" style="font-size: 500; font-wait:bold;">Read More About Empower Africa Car Rental</h5>
                <div class="inner-content text-center mt-4 d-flex">
                   
                    <div class="product-item shadow" style="margin-right: 2rem;">
                        <img src="./assets/images/p2.jpg" width="400" height="400" alt="">
                        
                    </div>
                    <div class="read-more-container">

                      <div class="container-para shadow">
                        <h2 class="mb-2">About us</h2>
                          <p>
                            Empower Africa Now Ltd is a fully registered company in Rwanda. <br>
                            The idea came about during a vacation in Rwanda with family in 2019. <br>
                             We had the chance to visit the countryside, <br>
                             particularly the safari- Akagera park, about 2 hours’  <br>
                             drive from the city of Kigali. <br>
                              <span class="read-more-text">
                                Not knowing anyone in the country and not having properly researched the country, <br>
                                we struggled with mobility. Being an in-land country, characterized by <br>
                                 ‘a thousand hills’ transportation is mostly by means of moto -bikes. <br>
                                  This couldn’t be an option for a family of six. <br>
                                   Finding a car rental service to hire a vehicle as difficult. <br>
                                    With a seemingly well-organized brokerage system (third party) <br>
                                    aka “commissioners” to help will finding services such as <br>
                                     rental properties or rental cars, everything seemed difficult. <br>
                              </span>
                          </p>
                          <span class="read-more-btn text-danger">Read More...</span>
                      </div>
              
                      <div class="container-para">
                        <h2 class="mb-2">Cont.....</h2>
                          <p>
                            Despite all of that our stay was fantastic and the kids wanted to come back some day. <br>
                            We thought it would be great to have some kind of commitment in-country that serve cement <br>
                            us to the country. That let to the birth of Empower Africa Now Ltd. A not so obvious name <br>
                            to register a company. We thought that any business activity we undertake should empower <br>
                            people by way of providing solutions to problems in Africa and beyond. Thus our numerous <br>
                            activities in transportation solutions, pharmaceutical products, real estate solutions, <br>
                              <span class="read-more-text">
                                IT solutions and agriculture. We started with transportation, engaging several youths to  <br>
                                run moto-bikes based on a “balance and own concept”, subsequently we introduced car rental  <br>
                                services and have since scaled to include numerous other businesses. We thing we are only  <br>
                                beginning and there is much more to come.Thank you for visiting our page and patronizing our <br>
                               business. As you do you are helping us Empower Africa Now andf the world at large
                              </span>
                          </p>
                          <span class="read-more-btn text-danger">Read More...</span>
                      </div>
              
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









            






