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
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Booking details</h4>
                            
                            <div class="form-group">
                                <label for="first_name">FirstName: {{$booking->first_name}}</label>
                            </div>
                            <div class="form-group">
                                <label for="last_name">LastName: {{$booking->last_name}}</label>
                            </div>
                            <div class="form-group">
                            <div class="form-group">
                                <label for="last_name">Email: {{$booking->email}}</label>
                            </div>
                            <div class="form-group">
                                <label for="phone">PhoneNumber: {{$booking->phone}}</label>
                            </div>
                            <div class="form-group">
                                <label for="address">Address: {{$booking->address}}</label>
                            </div>
                            <div class="form-group">
                                <label for="id_passport">Id/Passport: {{$booking->id_passport}}</label>
                            </div>
                            <div class="form-group">
                                <label for="pickup_date">PickUp_Date: {{$booking->pickup_date}}</label>
                            </div>
                            <div class="form-group">
                                <label for="dropoff_date">DropOff_Date: {{$booking->dropoff_date}}</label>
                            </div>
                            <div class="form-group">
                                <label for="total_days">Total_Days: {{$booking->total_days}}</label>
                            </div>
                            <div class="form-group">
                                <label for="total_price">Total_Price: {{$booking->total_price}}</label>
                            </div>
                            <div class="form-group">
                                <label for="driver_status">Driver_status: {{$booking->driver_status}}</label>
                            </div>
                            <div class="form-group">
                                <label for="terms_condition">Terms&Contions: {{$booking->terms_condition}}</label>
                            </div>
                            <div class="form-group">
                                <label for="payment_number">Payment_Number: {{$booking->payment_number}}</label>
                            </div>
                            <div class="form-group">
                                <label for="ref">ref_id: {{$payment->ref}}</label>
                            </div>
                            <div class="form-group">
                                <label for="kind">kind: {{$payment->kind}}</label>
                            </div>
                            <div class="form-group">
                                <label for="provider">Provider: {{$payment->provider}}</label>
                            </div>
                            <div class="form-group">
                                <label for="status">Status: {{$payment->status}}</label>
                            </div>
                            <div class="form-group">
                                <label for="created_at">Created_at: {{$payment->created_at}}</label>
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