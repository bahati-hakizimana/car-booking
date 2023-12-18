

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
      
      <div class="container-fluid page-body-wrapper mt-3 bg-white">
        <div class="container " align="center">
            @if(session()->has('message'))
                <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
                
                @endif
                <a href="{{ url("product") }}" class="btn btn-success">Add Product</a>
            <div class="row mt-2">
                <div class="col-12 grid-margin">
                  <div class="card shadow" style="background: white;">
                    <div class="card-body">
                      <h4 class="card-title ">Show All Products</h4>
                      <div class="table-responsive">
                        <table class="table">
                          
                            <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Description </th>
                              <th>Price </th>
                              <th>Plate Number </th>
                              <th>Total Seats </th>
                              <th>Image </th>
                              <th>Inner Image </th>
                              <th>Actions </th>
                            </tr>
                          
                           
                            @foreach($data as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                              <td>{{$product->name}}</td>
                              <td>{{$product->description}}</td>
                              <td>{{$product->price}}</td>
                              <td>{{$product->plate_number}}</td>
                              <td>{{$product->total_seating}}</td>
                              <td><img height="100px" width="100px" src="/storage/productimage/{{$product->image}}" alt=""></td>
                              <td><img height="100px" width="100px" src="/storage/productinner_image/{{$product->inner_image}}" alt="innerimage"></td>
                              <td>
                                <a class="btn btn-success" href="{{url('updateproduct',$product->id)}}">Update</a>
                                <a class="btn btn-danger" href="{{ url('deleteproduct',$product->id) }}">Delete</a>
                              </td>
                            
                                
                              
                            </tr>
                            @endforeach
                            @if(method_exists($data,'links'))

                            <div class="d-flex justify-content-center">
                              {!! $data->links() !!}
                            </div>
                      
                            @endif
                           
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