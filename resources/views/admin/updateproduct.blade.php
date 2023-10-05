<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Update Product</h4>
                            
                            <form action="{{url('newproduct',$data->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                              <div class="form-group row">
                                <label for="productname" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control text-dark" name="name" value="{{$data->name}}" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="productprice" class="col-sm-3 col-form-label">Price</label>
                                <div class="col-sm-9">
                                  <input type="number" class="form-control text-dark" name="price" value="{{$data->price}}" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="productdescription" class="col-sm-3 col-form-label">Desc</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control text-dark" name="desc" value="{{$data->description}}" required>
                                </div>
                            </div>
                              <div class="form-group row">
                                <label for="productimage" class="col-sm-3 col-form-label">Old Image</label>
                                <div class="col-sm-9">
                                    <img height="100" width="100" src="/productimage/{{$data->image}}" alt="">
                                </div>
                            </div>
                              <div class="form-group row">
                                <label for="productimage" class="col-sm-3 col-form-label">ChangeImage</label>
                                <div class="col-sm-9">
                                    
                                  <input type="file" class="form-control" name="file" required>
                                </div>
                            </div>
                              <button type="submit" class="btn btn-success me-2">Update Product</button>
                              
                            </form>
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