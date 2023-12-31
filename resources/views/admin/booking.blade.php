

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
                      <h4 class="card-title text-dark">Cars Bookings</h4>
                      <div class="form-group">
                        <label for="data_filiter">filiter by date:</label>
                        <form action="{{ url('booking') }}" method="get" class="form-inline" style="width:50%; padding:30px;">
                          <div class="input-group">
                              <select name="date_filter" id="" class="form-select">
                                  <option value="">All Dates</option>
                                  <option value="today">Today</option>
                                  <option value="yesterday">Yesterday</option>
                                  <option value="this_week">This Week</option>
                                  <option value="last_week">Last week</option>
                                  <option value="this_month">This month</option>
                                  <option value="last_month">Last month</option>
                                  <option value="this_year">This year</option>
                                  <option value="last_year">Last year</option>
                              </select>
                              <button type="submit" class="btn bg-success btn-success">Filter by date</button>
                          </div>
                      </form>
                      
                      </div>
                      <div class="table-responsive">
                        <table class="table ">
                          
                            <tr>
                              <th>Id</th>
                              <th>First_Name</th>
                              <th>Last_Name</th>
                              <th>Email</th>
                              <th>PhoneNumber</th>
                              <th>Id_Passport</th>
                              <th>airport</th>
                              <th>Destination</th>
                              <th>Driver_status</th>
                              <th>Deposite/Car</th>
                              <th>Total Deposite</th>
                              <th>Product_id</th>
                              <th>quantity</th>
                              <th>Price/day</th>
                              <th>PickUp Date</th>
                              <th>DropOff Date</th>
                              <th>Total_days</th>
                              <th>Total_price</th>
                              <th>payment_method</th>
                              <th>Terms_Conditions</th>
                              <th>Availability_Status</th>
                              <th>Date Created</th>
                              <th>Action</th>

                              
                            </tr>
                          
                           
                            @foreach($bookings ?? [] as $booking)
                            <tr>
                                <td>{{$booking->id}}</td>
                              <td>{{$booking->first_name}}</td>
                              <td>{{$booking->last_name}}</td>
                              <td>{{$booking->email}}</td>
                              <td>{{$booking->phone}}</td>
                              <td>{{$booking->id_passport}}</td>
                              <td>{{$booking->airport}}</td>
                              <td>{{$booking->destination}}</td>
                              <td>{{$booking->driver_status}}</td>
                              <td>{{$booking->deposit}}</td>
                              <td>{{$booking->totaldeposit}}</td>
                              <td>{{$booking->product_id}}</td>
                              <td>{{$booking->quantity}}</td>
                              <td>{{$booking->price}}</td>
                              <td>{{$booking->pickup_date}}</td>
                              <td>{{$booking->dropoff_date}}</td>
                              <td>{{$booking->total_days}}</td>
                              <td>{{$booking->total_price}}</td>
                              <td>{{$booking->payment_method}}</td>
                              <td>{{$booking->terms_condition}}</td>
                              <td>{{$booking->availability_status}}</td>
                              <td>{{$booking->created_at->format('y-m-d H:1:s')}}</td>
                              
                              <td>
                                <a class="btn btn-success" href="{{url('showdetails',$booking->id)}}">show details</a>
                                <a class="btn btn-danger" href="{{route('deletebooking',$booking->id)}}">Delete booking</a>
                              </td>
                            
                                
                              
                            </tr>
                            @endforeach 
                            @if(method_exists($bookings, 'links'))

                            <div class="d-flex justify-content- mb-3">
                                {!! $bookings->appends(['date_filter' => $date])->links() !!}
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