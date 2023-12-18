

<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- css --}}
    @include('admin.css')
    <style type="text/css">
       .title
       {
      
        padding-top:25px;
        font-size: 25px;
       }
       .form
       {
        padding:15px;
       }
       label
       {
        display: inline-block;
        width: 200px;
       }
       .files
       {
        margin-left: 15rem;
       }
    </style>
  </head>
  <body class="bg-white">
    {{-- sidebar --}}

    @include('admin.sidebar')
      <!-- Navbar -->
      @include('admin.navbar')
      
        <!-- body -->
        {{-- <div class="container-fluid bg-black page-body-wrapper mt-3">
            <div class="container" align="center">
                <h1 class="title">Add Product</h1>
                {{-- @if(session()->has('message'))
                <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
                
                @endif --}}

                {{-- <form action="{{ url('uploadproduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Product Name</label>
                        <input style="color: black;" type="text" name="name" placeholder="Enter Product Name" class="form-controll" required>
                    </div>
                    <div class="form-group">
                        <label>Product Price</label>
                        <input style="color: black;" type="number" name="price" placeholder="Enter Product price" class="form-controll" required>
                    </div>
                    <div class="form-group">
                        <label>Product Description</label>
                        <input style="color: black;" type="text" name="des" placeholder="Enter Product desc" class="form-controll" required>
                    </div>
                    <div class="form-group">
                        
                        <input type="file" name="file" class="form-controll" required>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Submit Product">
                    </div>
                </form>
            </div> --}}
            
        {{-- </div> --}} --}}


        <div class="container-fluid page-body-wrapper mt-3">
            <div class="container" align="center">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}
                    </div>
                    
                    @endif
                <div class="row ">
                    <div class="col-md-6 grid-margin stretch-card" style="width: 100%;">
                      <div class="card shadow" style="background: white;width:75%;">
                        <div class="card-body">
                          <h4 class="card-title text-dark">Add a Car</h4>

                        <form action="{{ url('uploadproduct') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                        <div class="form-group row">
                          <label for="productname" class="col-sm-3 col-form-label text-dark">Name</label>
                          <div class="col-sm-9">
                            <input type="text" style="border: none; border-bottom:1px solid #fff;" class="form-control text-dark bg-white" placeholder="enter Car Name" name="name"  required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="productprice" class="col-sm-3 col-form-label text-dark">Price</label>
                          <div class="col-sm-9">
                            <input type="number" style="border: none; border-bottom:1px solid #fff;" class="form-control text-dark bg-white" placeholder="enter Car price per day" name="price"  required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="productprice" class="col-sm-3 col-form-label text-dark">Plate Number</label>
                          <div class="col-sm-9">
                            <input type="text" style="border: none; border-bottom:1px solid #fff;" class="form-control text-dark bg-white" placeholder="enter Car plate number" name="plate_number"  required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="productprice" class="col-sm-3 col-form-label text-dark">Total Seatings</label>
                          <div class="col-sm-9">
                            <input type="number" style="border: none; border-bottom:1px solid #fff;" class="form-control text-dark bg-white" placeholder="enter Car Total seatings" name="total_seating" required>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="productdescription" class="col-sm-3 col-form-label text-dark">Desc</label>
                          <div class="col-sm-9">
                            <input type="text" style="border: none; border-bottom:1px solid #fff;" class="form-control text-dark bg-white" placeholder="enter Car Description" name="desc"  required>
                          </div>
                      </div>
                        
                       
                        <div class="form-group row">
                          <label for="productimage" class="col-sm-3 col-form-label text-dark">CarImage</label>
                          <div class="col-sm-9">
                              
                            <input type="file"  class="form-control" name="image" required>
                          </div>
                        <div class="form-group row">
                          <label for="productimage" class="col-sm-3 col-form-label text-dark">Inner Image</label>
                          <div class="col-sm-9">
                              
                            <input type="file"  class="form-control" name="inner_image" required>
                          </div>
                      </div>
                        <button type="submit" class="btn btn-success bg-success  me-2">Add Ne Product</button>
                        
                      </form>
                          
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