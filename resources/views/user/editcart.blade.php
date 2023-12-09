<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Empower Africa Car Booking</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    {{-- Paypal sdk javascript --}}
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>



    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="/assets/css/owl.css">

    {{-- css --}}
    <style type="text/css">
        .logo {
            width: 200px;
            height: 50px;
        }

        .collapse {
            visibility: visible !important;
        }

        .main {
            display: flex;
            flex-direction: column-reverse;
        }
    </style>

</head>

<body>


    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="{{ route('homepage') }}"><img class="logo" src="/assets/images/Empower.PNG"
                        alt="logo"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('homepage') }}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('aboutus') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('login'))

                                @auth

                                    <x-app-layout>

                                    </x-app-layout>
                                @else
                            <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                            @if (Route::has('register'))
                                <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth

                        @endif

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->

    <div class="banner header-text">
    </div>
    <div class="container mt-4">
      
        <h5 class="text-center mt3 mb-3">Book your favolite car</h5>
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4" style="width: 50%;">
                <div class="card shadow">
                    @if(\Session::has('error'))
              <div class="alert alert-danger">
                {{\Session::get('error')}}
              </div>
              {{\Session::forget('error')}}
              @endif
              @if(\Session::has('success'))
              <div class="alert alert-success">
                {{\Session::get('success')}}
              </div>
              {{\Session::forget('success')}}
              @endif

                    <div class="card-body">
                      

                        <form class="form-sample" action="{{ route('updatecart', $cart->id) }}" method="POST">
                          
                            @csrf
                            @method('POST')

                            {{-- Section 1 --}}
                            <div class="form-section" id="section1">
                                <div class="form-floating mb-2">
                                    <select class="form-select" id="selAirport" name="airport">
                                        <option value="no">---------</option>
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    <label for="selAirport" class="form-label">Would you like us to pick you from the
                                        airport:</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <select class="form-select" id="selDriver" name="driver_status">
                                        <option>-------</option>
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    <label for="selDriver" class="form-label">Would You Need a Driver:</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <select class="form-select" id="selDestination" name="destination">
                                        <option>------</option>
                                        <option value="Kigali">Kigali</option>
                                        <option value="east">East</option>
                                        <option value="north">North</option>
                                        <option value="west">West</option>
                                    </select>
                                    <label for="selDestination" class="form-label">Please select the
                                        destination:</label>
                                </div>

                                <!-- Other fields for section 1 -->
                                <div class="mb-3 mt-3" hidden="">
                                    <label for="productId" class="form-label">Product ID:</label>
                                    <input type="number" class="form-control" id="productId"
                                        placeholder="Enter product ID" name="product_id" value="{{ $product->id }}"
                                        required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="mb-3 mt-3" hidden="">
                                    <label for="productName" class="form-label">Product Name:</label>
                                    <input type="text" class="form-control" id="productName"
                                        placeholder="Enter product name" name="product_name" value="{{ $product->name }}"
                                        required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="mb-3 mt-3" hidden="">
                                    <label for="productName" class="form-label">Product Quantity:</label>
                                    <input type="text" class="form-control" id="productName"
                                        placeholder="Enter product name" name="quantity" value="1" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="price" class="form-label">Price/day:</label>
                                    <input type="number" class="form-control" id="price"
                                        placeholder="Enter the price per day" name="price"
                                        value="{{ $product->price }}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="pickupDate" class="form-label">PickUp Date:</label>
                                    <input type="date" class="form-control" id="pickupDate" name="pickup_date"
                                        required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please Pick Up PickUp Date.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="dropoffDate" class="form-label">Drop off Date:</label>
                                    <input type="date" class="form-control" id="dropoffDate" name="dropoff_date"
                                        required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please Pick Up drop off date.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="totalDays" class="form-label">Total Days:</label>
                                    <input type="number" class="form-control" id="totalDays"
                                        placeholder="Total days" name="days" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>


                            </div>

                            {{-- Next button --}}
                            <div>
                                <button type="button" id="nextButton" class="btn btn-primary">Next</button>
                                <button type="button" id="backButton" class="btn btn-secondary">Back</button>

                            </div>

                            {{-- Section 2 --}}
                            <div class="form-section" id="section2" style="display: none;">
                                <!-- Fields for section 2 -->


                                <div class="mb-3">
                                    <label for="totalPrice" class="form-label">Total Price:</label>
                                    <input type="number" class="form-control" id="totalPrice"
                                        placeholder="Total price" name="totalprice" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div id="paypackFields" class="mb-3 mt-3" style="display: none;">
                                  <label for="paypackNumber" class="form-label">Mtn/airtel/tigo:</label>
                                  <input type="number" class="form-control" id="paypackNumber" placeholder="Enter your Mtn or aitel tigo number" name="payment" />
                                  <div class="valid-feedback">Valid.</div>
                                  <div class="invalid-feedback">Please fill out this field.</div>
                              </div>
                                <div class="mb-3 mt-3">
                                    <label for="firstName" class="form-label">First Name:</label>
                                    <input type="text" class="form-control" id="firstName"
                                        placeholder="Enter your first Name" name="first_name" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="lastName" class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" id="lastName"
                                        placeholder="Enter your last name" name="last_name" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="lastName" class="form-label">PhoneNumber:</label>
                                    <input type="number" class="form-control" id="lastName"
                                        placeholder="Enter your phone number" name="phone" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="text" class="form-control" id="email"
                                        placeholder="Enter your email address" name="email" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="idPassport" class="form-label">Id/Passport:</label>
                                    <input type="number" class="form-control" id="idPassport"
                                        placeholder="Enter ID or Passport" name="id_passport" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>



                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="myCheck"
                                    name="terms_condition" value="Agreed" required>
                                <label class="form-check-label" for="myCheck">By checking this box you agree to the
                                    terms and condtions. <a href="#">Read here</a></label>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Check this checkbox to continue.</div>
                            </div>
                            <div class="form-floating mb-2">
                              <select class="form-select" id="payment_method" name="payment_method" onchange="togglePaypackField()">
                                <option>-------</option>
                                <option value="paypal">Paypal</option>
                                <option value="paypack">Paypack (Mobile Money)</option>
                            </select>
                            <label for="payment_method" class="form-label">Payment Method:</label>
                            </div>
                            <button type="submit" class="btn btn-dark" style="width: 100%" onclick="calculateTotalPrice()">Book Now</button>
                        </form>

                       
    </div>
                </div>
    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <!-- Additional Scripts -->
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/owl.js"></script>
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/accordions.js"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0;

        function clearField(t) {
            if (!cleared[t.id]) {
                cleared[t.id] = 1;
                t.value = '';
                t.style.color = '#fff';
            }
        }
    </script>

  

    
  


  



</body>

</html>
