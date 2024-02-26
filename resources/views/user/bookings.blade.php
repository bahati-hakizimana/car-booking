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
                <a href="{{ route('homepage') }}"><img class="logo" src="/assets/images/Empower.png"
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
    <div class="container mt3">
      
        <h5 class="text-center mt3 mb-3">Book your favolite car</h5>
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4" style="width: 50%;">
              
                <div class="card shadow">
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            {{-- <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button> --}}
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/storage/productimage/{{ $data->image }}" alt="image" class="card-img-top">
                            </div>
                            <div class="carousel-item">
                                <img src="/storage/productinner_image/{{$data->inner_image}}" alt="innerimage" class="card-img-top">
                               
                            </div>
                            
                        </div>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Car Name</h5>
                        <p class="card-text text-center">
                            {{ $data->name }}
                        </p>
                        <!-- <h5 class="card-title text-center">Car description</h5>
                        <p class="card-text text-center">
                            {{ $data->description }}
                        </p> -->
                        <h5 class="card-title text-center">Total Seatings</h5>
                        <p class="card-text text-center">

                            {{ $data->total_siting }}
                        </p>
                        <!-- <h5 class="card-title text-center">Plate Number</h5>
                        <p class="card-text text-center">
                            {{ $data->plate_number }}
                        </p> -->
                        <h5 class="card-title text-center">Car Price per Day</h5>
                        <p class="card-text text-center">

                            $ {{ $data->price }}
                        </p>
                        <h5 class="card-title text-center">Ca Availability Status</h5>
                        <p class="card-text text-center">

                           
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4" style="width: 50%;">
                <div>
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
                </div>
                <div class="card shadow">

                    <div class="card-body">
                      

                        <form class="form-sample" action="{{ route('book', $data->id) }}" method="POST">
                          
                            @csrf
                            @method('POST')

                            {{-- Section 1 --}}
                            <div class="form-section" id="section1">
                                <div class="form-floating mb-2">
                                    <select class="form-select" id="selAirport" name="airport">
                                        
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    <label for="selAirport" class="form-label">Would you like us to pick you from the
                                        airport:</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <select class="form-select" id="selDriver" name="driver_status">
                                        
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    <label for="selDriver" class="form-label">Would You Need a Driver:</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <select class="form-select" id="selDestination" name="destination">
                                        <!-- <option>------</option> -->
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
                                        placeholder="Enter product ID" name="product_id" value="{{ $data->id }}"
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
                                    <label for="price" class="form-label">Price/day $:</label>
                                    <input class="form-control" id="price" name="price" 
                                        value="{{ $data->price }}" $ required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="deposit" class="form-element">Deposit/$:</label>
                                    <input type="text" class="form-control" id=""
                                          name="deposit"
                                        value="25" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="TotalDeposit" class="form-label">Total Deposite/$:</label>
                                    <input type="text" class="form-control" id="deposite"
                                          name="totaldeposit"
                                        value="25" required>
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
                                    <label for="phone" class="form-label">PhoneNumber:</label>
                                    <input type="number" class="form-control" id="phone"
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

                                <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="myCheck"
                                    name="terms_condition" value="Agreed" required>
                                <label class="form-check-label" for="myCheck">By checking this box you agree to the
                                    terms and condtions. <a href="{{route('read-terms-condition')}}">Read here</a></label>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Check this checkbox to continue.</div>
                            </div>
                            <div class="form-floating mb-2">
                              <select class="form-select" id="payment_method" name="payment_method" onchange="togglePaypackField()">
                                <option>-------</option>
                                <option value="paypal">Paypal</option>
                                <option value="paypack">Mobile Money</option>
                            </select>
                            <label for="payment_method" class="form-label">Payment Method:</label>
                            </div>
                            <button type="submit" class="btn btn-danger" style="width: 100%" >Book Now</button>

                            </div>
                            
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

  

    <script>
        $(document).ready(function() {
            var currentSection = 1;

            function showSection(sectionNumber) {
                $('.form-section').hide();
                $('#section' + sectionNumber).show();
            }

            function showNextSection() {
                if (currentSection < 3) {
                    currentSection++;
                    showSection(currentSection);
                }
            }

            function showPreviousSection() {
                if (currentSection > 1) {
                    currentSection--;
                    showSection(currentSection);
                }
            }

            

            // Initial setup
            showSection(currentSection);

            // Event listeners
            $('#nextButton').click(showNextSection);
            $('#backButton').click(showPreviousSection);
            // $('#paymentGateway').change(showPaymentFields);
        });
    </script>
<script>
    function togglePaypackField() {
    var paypackFields = document.getElementById('paypackFields');
    var paymentMethod = document.getElementById('payment_method').value;

    // Show/hide paypackFields based on payment method selection
    if (paymentMethod === 'paypack') {
        paypackFields.style.display = 'block';
    } else {
        paypackFields.style.display = 'none';
    }
    updateTotalPrice();
}
function convertToRWF(totalPrice) {
    
    const conversionRate = 1280; 
    return totalPrice * conversionRate;
}


function updateTotalPrice() {
    let pricePerDay = parseFloat(document.getElementById('price').value) || 0;

    // Parse pickup and dropoff dates
    let pickupDate = new Date(document.getElementById('pickupDate').value);
    let dropoffDate = new Date(document.getElementById('dropoffDate').value);

    // Calculate total days
    let oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
    let totalDays = Math.round(Math.abs((pickupDate - dropoffDate) / oneDay)) || 1;

    // Additional fees
    let additionalFees = 0;

    // Add 10k if airport is selected
    if (document.getElementById('selAirport').value === 'yes') {
        additionalFees += 10;
    }

    // Add 10k if driver is selected
    if (document.getElementById('selDriver').value === 'yes') {
        additionalFees += 10;
    }

    // Add 5k if destination is 'east', 'west', or 'north'
    if (['east', 'west', 'north'].includes(document.getElementById('selDestination').value)) {
        additionalFees += 5;
    }

    // Get deposit value
    let deposit = parseFloat(document.getElementById('deposite').value) || 0;

    // Calculate total price including deposit
    let totalPrice = (pricePerDay + additionalFees) * totalDays + deposit;

    if (document.getElementById('payment_method').value === 'paypack') {
        totalPrice = convertToRWF(totalPrice);
    }

    // Update total days and total price fields
    document.getElementById('totalDays').value = totalDays;
    // document.getElementById('totalPrice').value = totalPrice.toFixed(2);
    document.getElementById('totalPrice').value = (totalPrice.toFixed(2)).toLocaleString('en-US', {
        style: 'currency',
        currency: document.getElementById('payment_method').value === 'paypack' ? 'RWF' : 'USD'
    });
}

// Attach the function to form inputs' change events
document.getElementById('selAirport').addEventListener('change', updateTotalPrice);
document.getElementById('selDriver').addEventListener('change', updateTotalPrice);
document.getElementById('selDestination').addEventListener('change', updateTotalPrice);
document.getElementById('price').addEventListener('input', updateTotalPrice);
document.getElementById('pickupDate').addEventListener('change', updateTotalPrice);
document.getElementById('dropoffDate').addEventListener('change', updateTotalPrice);
document.getElementById('deposite').addEventListener('input', updateTotalPrice);

// Initial update
updateTotalPrice();

// Function to calculate total price (including deposit) and update the form field
function calculateTotalPrice() {
    updateTotalPrice();
    // You can add any additional logic or processing here if needed
}

</script>



  



</body>

</html>
