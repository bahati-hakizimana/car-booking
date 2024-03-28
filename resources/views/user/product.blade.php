

<div class="latest-products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h5 class="text-center mb-4">Book with us on affordable price</h5>
          <form action="{{Route('search')}}" method="" class="form-inline mb-3" style="float: right; padding:10px;">
            @csrf
            <input class="form-control" type="search" name="search" placeholder="search product">
            <input type="submit" value="search" class="btn btn-primary bg-primary "> 
          </form>
        </div>
      </div>
      
    
      @foreach($data as $product)
      <div class="col-md-4">
        <div class="product-item shadow">
          <a class="product"  href="{{url('bookings',$product->id)}}"><img width="150" height="300"  src="/storage/productimage/{{$product->image}}" alt=""></a>
          <div class="down-content">
            <a href="#"><h4>{{$product->name}}</h4></a>
            <h6>${{$product->price}}/day</h6>
            <a class="btn btn-primary" href="{{url('bookings',$product->id)}}">Book Now</a>
            {{-- <form action="{{route('addcart',$product->id)}}" method="POST" class="mt-2">
              @csrf
              <input type="number" name="quantity" class="mt-2 form-control" 
              value="1" min="1" style="width: 100px;">
              <br>
              <input class="btn btn-dark bg-dark"  type="submit" value="Add cart">
            </form> --}}
            <span>{{$product->availability_status}}</span>
          </div>
        </div>
      </div>

      @endforeach

      @if(method_exists($data,'links'))

      <div class="d-flex justify-content-center">
        {!! $data->links() !!}
      </div>

      @endif
      
     
    </div>
  </div>
</div>

<div class="best-features">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h4 class="text-center">Check Our Important links to Know much of Our diffrent services</h4>
        </div>
      </div>
      <div class="col-md-6">
        <div class="left-content">
          <h4>Looking for the best servises?</h4>
          <p><a rel="nofollow" href="#" target="_parent">Empower Africa</a> vist our Websit for more information.</p>
          <ul class="featured-list">
            <li><a href="#">We provide Pharmacy Services</a></li>
            <li><a href="#">Business advertising</a></li>
            <li><a href="#">Real Estate</a></li>
            <li><a href="#">Pharmacy</a></li>
            <li><a href="#">Consulting</a></li>
          </ul>
          
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-image">
          <img src="assets/images/p8.avif" alt="">
        </div>
      </div>
    </div>
  </div>
</div>


{{-- <div class="call-to-action">
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
</div> --}}
{{-- @endsection --}}

  
  