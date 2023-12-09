

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
                      <h4 class="card-title text-dark">Show All messages</h4>
                      <div class="table-responsive">
                        <table class="table">
                          
                            <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Email </th>
                              <th>Phone</th>
                              <th>Subject</th>
                              <th>Messages</th>
                              <th>Actions </th>
                            </tr>
                          
                           
                            @foreach($data as $contact)
                            <tr>
                                <td>{{$contact->id}}</td>
                              <td>{{$contact->name}}</td>
                              <td>{{$contact->email}}</td>
                              <td>{{$contact->phone}}</td>
                              <td>{{$contact->subject}}</td>
                              <td>{{$contact->message}}</td>
                              <td>
                                <a class="btn btn-success" href="#">show Message</a>
                                <a class="btn btn-danger" href="#">Reply Message</a>
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