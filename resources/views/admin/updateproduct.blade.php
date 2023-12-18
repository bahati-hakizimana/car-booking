<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    {{-- css --}}
    @include('admin.css')
  </head>
  <body class="bg-white">
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
                    <div class="col-md-6 grid-margin stretch-card" style="width: 100%;">
                        <div class="card shadow" style="background: white;width:75%;">
                          <div class="card-body">
                            <h4 class="card-title text-dark">Update Product</h4>
                            
                            <form action="{{url('newproduct',$data->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                              <div class="form-group row">
                                <label for="productname" class="col-sm-3 col-form-label text-dark">Name</label>
                                <div class="col-sm-9">
                                  <input type="text" style="border: none; border-bottom:1px solid #000;" class="form-control text-dark" name="name" value="{{$data->name}}" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="productprice" class="col-sm-3 col-form-label text-dark">Price</label>
                                <div class="col-sm-9">
                                  <input type="number" style="border: none; border-bottom:1px solid #000;" class="form-control text-dark" name="price" value="{{$data->price}}" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="productprice" class="col-sm-3 col-form-label text-dark">Plate Number</label>
                                <div class="col-sm-9">
                                  <input type="text" style="border: none; border-bottom:1px solid #000;" class="form-control text-dark" name="plate_number" value="{{$data->plate_number}}" required>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="productprice" class="col-sm-3 col-form-label text-dark">Total Seatings</label>
                                <div class="col-sm-9">
                                  <input type="number" style="border: none; border-bottom:1px solid #000;" class="form-control text-dark" name="total_seating" value="{{$data->total_seating}}" required>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="productdescription" class="col-sm-3 col-form-label text-dark">Desc</label>
                                <div class="col-sm-9">
                                  <input type="text" style="border: none; border-bottom:1px solid #000;" class="form-control text-dark" name="desc" value="{{$data->description}}" required>
                                </div>
                            </div>
                              <div class="form-group row">
                                <label for="productimage" class="col-sm-3 col-form-label text-dark">Old Image</label>
                                <div class="col-sm-9">
                                    {{-- <img height="100" width="100" src="/storage/productimage/{{$data->image}}" alt=""> --}}
                                    <img height="100px" width="100px" src="/storage/productimage/{{$data->image}}" alt="">
                                </div>
                            </div>
                              <div class="form-group row">
                                <label for="productimage" class="col-sm-3 col-form-label text-dark">Old inner Image</label>
                                <div class="col-sm-9">
                                    {{-- <img height="100" width="100" src="/productinner_image/{{$data->inner_image}}" alt="inner"> --}}
                                    <img height="100px" width="100px" src="/storage/productinner_image/{{$data->inner_image}}" alt="innerimage">
                                </div>
                            </div>
                              <div class="form-group row">
                                <label for="productimage" class="col-sm-3 col-form-label text-dark">ChangeImage</label>
                                <div class="col-sm-9">
                                    
                                  <input type="file" class="form-control" name="file" required>
                                </div>
                              <div class="form-group row">
                                <label for="productimage" class="col-sm-3 col-form-label text-dark">Change Inner Image</label>
                                <div class="col-sm-9">
                                    
                                  <input type="file" class="form-control" name="inner_image" required>
                                </div>
                            </div>
                              <button type="submit" class="btn btn-success bg-success  me-2">Update Product</button>
                              
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