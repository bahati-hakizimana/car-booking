

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
            <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card shadow" style="background: white;">
                    <div class="card-body">
                      <h4 class="card-title text-dark ">Show All Paymets</h4>
                      <div class="table-responsive">
                        <table class="table">
                          
                            <tr>
                              <th>Id</th>
                              <th>Amount</th>
                              <th>Provider </th>
                              <th>Kind</th>
                              <th>Status</th>
                              <th>Ref</th>
                              <th>created_at</th>
                              {{-- <th>Actions </th> --}}
                            </tr>
                          
                           
                            @foreach($data as $payment)
                            <tr>
                                <td>{{$payment->id}}</td>
                              <td>{{$payment->amount}}</td>
                              <td>{{$payment->provider}}</td>
                              <td>{{$payment->kind}}</td>
                              <td>{{$payment->status}}</td>
                              <td>{{$payment->ref}}</td>
                              <td>{{$payment->created_at}}</td>
                              {{-- <td>
                                <a class="btn btn-success" href="{{url('updatepayment',$payment->id)}}">Update</a>
                                <a class="btn btn-danger" href="{{ url('deletepayment',$payment->id) }}">Delete</a>
                              </td> --}}
                            
                                
                              
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