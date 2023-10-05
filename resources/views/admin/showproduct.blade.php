

<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- css --}}
    @include('admin.css')
  </head>
  <body>
    {{-- sidebar --}}

    @include('admin.sidebar')
      <!-- Navbar -->
      @include('admin.navbar')
      
      <div class="container-fluid page-body-wrapper mt-3">
        <div class="container" align="center">
            @if(session()->has('message'))
                <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
                
                @endif
            <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Show All Products</h4>
                      <div class="table-responsive">
                        <table class="table">
                          
                            <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Description </th>
                              <th>Price </th>
                              <th>Image </th>
                              <th>Actions </th>
                            </tr>
                          
                           
                            @foreach($data as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                              <td>{{$product->name}}</td>
                              <td>{{$product->description}}</td>
                              <td>{{$product->price}}</td>
                              <td><img height="100px" width="100px" src="/productimage/{{$product->image}}" alt=""></td>
                              <td>
                                <a class="btn btn-success" href="{{url('updateproduct',$product->id)}}">Update</a>
                                <a class="btn btn-danger" href="{{ url('deleteproduct',$product->id) }}">Delete</a>
                              </td>
                            
                                
                              
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