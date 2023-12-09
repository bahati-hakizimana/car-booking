

<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- css --}}
    @include('admin.css')
  </head>
  <body class="bg-white">
    {{-- sidebar --}}

    @include('admin.sidebar')
      <!-- Navbar -->
      @include('admin.navbar')
      
      <div class="container-fluid page-body-wrapper mt-3  bg-white">
        <div class="container" align="center">
            @if(session()->has('message'))
                <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
                
                @endif
            <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card shadow" style="background: white;">
                    <div class="card-body">
                      <h4 class="card-title text-dark">cart in Cart</h4>
                      <div class="table-responsive">
                        <table class="table">
                          
                            <tr>
                              <th>Id</th>
                              <th>first_name</th>
                              <th>last_name</th>
                              <th>phone</th>
                              <th>address</th>
                              <th>product_name</th>
                              <th>product_id</th>
                              <th>quantity</th>
                              <th>Price </th>
                              <th>Actions </th>
                            </tr>
                          
                           
                            @foreach($data as $cart)
                            <tr>
                                <td>{{$cart->id}}</td>
                              <td>{{$cart->first_name}}</td>
                              <td>{{$cart->last_name}}</td>
                              <td>{{$cart->phone}}</td>
                              <td>{{$cart->address}}</td>
                              <td>{{$cart->product_name}}</td>
                              <td>{{$cart->product_id}}</td>
                              <td>{{$cart->quantity}}</td>
                              <td>{{$cart->price}}</td>
                              {{-- <td>
                                <a class="btn btn-success" href="{{url('updatecart',$cart->id)}}">Update</a>
                                <a class="btn btn-danger" href="{{ url('deletecart',$cart->id) }}">Delete</a>
                              </td> --}}
                            
                                
                              
                            </tr>
                            @endforeach 
                          
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

        </div>
      </div>
      

    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>