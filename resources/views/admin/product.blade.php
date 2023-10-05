

<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- css --}}
    @include('admin.css')
    <style type="text/css">
       .title
       {
        color: white;
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
    </style>
  </head>
  <body>
    {{-- sidebar --}}

    @include('admin.sidebar')
      <!-- Navbar -->
      @include('admin.navbar')
      
        <!-- body -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="title">Add Product</h1>
                {{-- @if(session()->has('message'))
                <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
                
                @endif --}}

                <form action="{{ url('uploadproduct') }}" method="POST" enctype="multipart/form-data">
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
            </div>
            
        </div>
    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>