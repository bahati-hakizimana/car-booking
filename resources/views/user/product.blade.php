<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>
            <a href="#">view all products <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        
      
        @foreach($data as $product)
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img width="150" height="300"  src="/productimage/{{$product->image}}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>{{$product->name}}</h4></a>
              <h6>${{$product->price}}</h6>
              <p>{{$product->description}}</p>
              {{-- <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul> --}}
            <a class="btn btn-danger" href="#">Book Now</a>
              <span>Avairable</span>
            </div>
          </div>
        </div>

        @endforeach

        <div class="d-flex justify-content-center">
          {!! $data->links() !!}
        </div>
        
       
      </div>
    </div>
  </div>

  <div class="best-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>About Empower Africa Now</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4>Looking for the best products?</h4>
            <p><a rel="nofollow" href="#" target="_parent">Empower Africa</a> vist our Websit for more information.</p>
            <ul class="featured-list">
              <li><a href="#">Lorem ipsum dolor sit amet</a></li>
              <li><a href="#">Consectetur an adipisicing elit</a></li>
              <li><a href="#">It aquecorporis nulla aspernatur</a></li>
              <li><a href="#">Corporis, omnis doloremque</a></li>
              <li><a href="#">Non cum id reprehenderit</a></li>
            </ul>
            <a href="#" class="filled-button">Read More</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <img src="assets/images/feature-image.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-md-8">
                <h4>Creative &amp; Unique <em>Empower Africa</em> Products</h4>
                <p>Empower Africa Now.</p>
              </div>
              <div class="col-md-4">
                <a href="#" class="filled-button">Vist Us Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Copyright &copy; 2023 Empower Africa Now.
          
          car: <a rel="nofollow noopener" href="#" target="_blank">booking</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


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