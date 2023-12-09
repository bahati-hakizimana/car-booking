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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    {{-- css --}}
    <style type="text/css">
        .logo {
            width: 200px;
            height: 50px;
        }

        .collapse {
            visibility: visible !important;
        }
    </style>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="shadow">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="{{ route('homepage') }}"><img class="logo" src="assets/images/Empower.png"
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

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showcart') }}">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Cart[{{ $count }}]</a>

                            </li>

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
        @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}
            </div>
        @endif
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">

    </div>
    <!-- cart booking -->
    {{-- @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
        </div>
    @endif --}}

    <div class="container-fluid" style="padding: 100px;" align="center">
        <div class="col-sm">
            <h5 class="text-center mb-4">Welcome to your booking dashboard</h5>
        </div>

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
            <div class="card shadow">
                <div class="card-body">

                    <form action="{{ route('confirmbookings') }}" method="POST">
                        @csrf
                        <table class="bg-white table table-bordered" style="width: 100%;">
                            <tr style="background-color: white;" class="bg-white">
                                <td style="padding: 10px;font-size:20px">ProductName</td>
                                <td style="padding: 10px;font-size:20px">ProductId</td>
                                <td style="padding: 10px;font-size:20px">Quantity</td>
                                <td style="padding: 10px;font-size:20px">ProductPrice</td>
                                <td style="padding: 10px;font-size:20px">Action</td>
                            </tr>

                            <div style="display: flex">
                                <div>
                                    @foreach ($cart as $carts)
                                        <tr class=" text-dark">
                                            <td style="padding: 10px;font-size:20px">
                                                <input type="text" name="productname[]"
                                                    value=" 
                                                   {{ $carts->product_name }}"
                                                    hidden="">
                                                {{ $carts->product_name }}
                                            </td>
                                            <td style="padding: 10px;font-size:20px">
                                                <input type="text" name="productid[]"
                                                    value=" 
                                              {{ $carts->product_id }}"
                                                    hidden="">
                                                {{ $carts->product_id }}
                                            </td>
                                            <td style="padding: 10px;font-size:20px">
                                                <input type="text" name="quantity[]"
                                                    value="
                                                    {{ $carts->quantity }}"
                                                    hidden="">
                                                {{ $carts->quantity }}
                                            </td>
                                            <td style="padding: 10px;font-size:20px">
                                                <input type="text" id="price" name="price[]"
                                                    value=" 
                                                         {{ $carts->price }}"
                                                    hidden="">
                                                {{ $carts->price }}
                                            </td>
                                            <td style="padding: 10px;">
                                                <a class="btn btn-dark"
                                                    href="{{ route('deletecart', $carts->id) }}"><i
                                                        class="fa fa-trash" aria-hidden="true"></i></a>
                                                <a class="btn btn-danger" href="#"><i
                                                        class="fa fa-edit"></i></a>
                                                {{-- <a class="btn btn-success" href="{{ route('editcart', $carts->id) }}"><i class="fa fa-edit"></i></a> --}}
                                            </td>

                                        </tr>
                                    @endforeach
                                </div>
                        </table>

                </div>
            </div>

            <div class="card shadow mt-2" style="height: 85vh;">
                <div class="card-body">
                    <div class="form-group mt-3">
                        <label>PickUp Date</label>
                        <input style="width: 600px; border: none;border-bottom: 1px solid gray;" type="date"
                        input type="date" id="pickupDate" name="pickupDate" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <label>Drop off Date</label>
                        <input style="width: 600px;border: none;border-bottom: 1px solid gray;" type="date"
                            id="dropoffDate" name="dropoffDate" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <label>Total Days</label>
                        <input style="width: 600px;border: none;border-bottom: 1px solid gray;" type="number"
                            name="days" id="totalDays" class="form-control" required>
                    </div>
                    <div class="form-group mt-3" hidden="">
                        <label>Deposite(cotion) Rwf/Car</label>
                        <input style="width: 600px;border: none;border-bottom: 1px solid gray;" type="number"
                            name="deposit" id="deposite" class="form-control" value="5" required>
                    </div>
                    <div class="form-group mt-3">
                        <label>Total Deposite</label>
                        <input style="width: 600px;border: none;border-bottom: 1px solid gray;" type="number"
                            name="totaldeposit" id="TotalDeposite" class="form-control" value="" required>
                    </div>
                    <div class="form-group mt-3">
                        <label>Subtotal</label>
                        <input style="width: 600px;border: none;border-bottom: 1px solid gray;" type="text"
                            id="subtotal" name="amount" class="form-control" value="">
                    </div>



                </div>

            </div>

            <div class="card shadow mt-2" style="height:85vh;">
                <div class="form-group mt-3">
                    <label>Total Price</label>
                    <input style="width: 600px;border: none;border-bottom: 1px solid gray;" type="number"
                        id="totalPrice" name="totalprice" class="form-control" value="">
                </div>
                <div id="mobilemoneyFields" class=" mt-3" style="display: none;">
                    <label for="paypackNumber" class="form-label">Mtn/airtel/tigo:</label>
                    <input type="number" class="form-control" id="paypackNumber" placeholder="Enter your Mtn or aitel tigo number" name="payment" />
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                {{-- <div class="mobilemoney mt-1" id="mobilemoneyFields" style=" display: none;">
                    <input type="number" class="form-control" name="mobilemoney" id="mobilemoney" placeholder="Enter Mtn or airtel number to pay" required style="width: 600px;">


                </div> --}}
                <div class="form-group mt-3 mb-2">
                    <label>Id/Passport number</label>
                    <input style="width: 600px;border: none;border-bottom: 1px solid gray;" type="number"
                        id="idPassport" name="id_passport" class="form-control"
                        placeholder="Enter your valid Id or Passport">
                </div>
                {{-- megor --}}
                <div class="card-title">
                    <h5 class="mt-3">Would you need our driver</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <select name="driver" id="selDriver"
                            style="width: 600px;border: none;border-bottom: 1px solid gray;" class="form-control">
                            <option>select .......</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>

                    </div>

                </div>
                <div class="cad-tile">
                    <h5 class="mt-3">Select Destination</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <select name="destination" id="selDestination"
                            style="width: 600px;border: none;border-bottom: 1px solid gray;" class="form-control">
                            <option>select .......</option>
                            <option value="kigali">kigaki</option>
                            <option value="east">East</option>
                            <option value="west">West</option>
                            <option value="north">North</option>
                        </select>

                    </div>
                </div>

            </div>



        </div>


        <div class="form-group">
            <div class="card shadow mt-2" style="height:65vh;">
                <div class="card-title">
                    <h5 class="mt-3">Would you like us to pick up you from the airport</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <select name="airport" id="selAirport"
                            style="width: 600px;border: none;border-bottom: 1px solid gray;" class="form-control">
                            <option>select .......</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>

                        </select>
                    </div>
                    <div class="card-title">
                        <h5 class="mt-3">Select your favolite peyment methode</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select id="payment_method" name="payment_method" onchange="togglePaymentField()" style="width: 600px;border: none;border-bottom: 1px solid gray;" class="form-control" required>


                                 <option>select .......</option>
                                <option value="paypack">mobilemoney</option>
                                <option value="paypal">Paypal</option>
                                   
                            </select>

                        </div>
                        

                        <div class="form-check mt-5">
                            <label class="col-sm-3 form-check-label">
                                <input name="terms_condition" value="Agreed" type="checkbox" id="termsCheckbox"
                                    class="form-check-input">Yes Igree to the terms and
                                conditions <a class="text-info" href="#">Click here to read</a>.

                            </label>
                        </div>
                        <button type="submit" class="btn btn-danger bg-danger mt-2" style="width: 50%" onclick="calculateTotalPrice()">Book Now</button>

                    </div>

                </div>



            </div>










            </form>

        </div>





    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language="text/Javascript">
        cleagray[0] = cleagray[1] = cleagray[2] = 0;
        if (!cleagray[t.id]) {
            t.value = '';
            t.style.color = '#fff';
        }
        
    </script>

{{-- <script>
    function toggleMobilemoneyField() {
        var mobilemoneyFields = document.getElementById('mobilemoneyFields');
        var paymentMethod = document.getElementById('payment_method').value;
  
        // Show/hide paypackFields based on payment method selection
        if (paymentMethod === 'paypack') {
            mobilemoneyFields.style.display = 'block';
        } else {
            mobilemoneyFields.style.display = 'none';
        }
    }
    const mobileMoneyInput = document.getElementsByName("mobilemoney")[0];

  if (mobileMoneyInput && !mobileMoneyInput.disabled) {
    mobileMoneyInput.focus();
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
        additionalFees += 5000;
      }
  
      // Add 10k if driver is selected
      if (document.getElementById('selDriver').value === 'yes') {
        additionalFees += 10000;
      }
  
      // Add 5k if destination is 'east'
      if (document.getElementById('selDestination').value === 'east') {
        additionalFees += 5000;
      }
      if (document.getElementById('selDestination').value === 'west') {
        additionalFees += 5000;
      }
      if (document.getElementById('selDestination').value === 'north') {
        additionalFees += 5000;
      }
  
      // Calculate total price
      let totalPrice = (pricePerDay + additionalFees) * totalDays;
  
      // Update total days and total price fields
      document.getElementById('totalDays').value = totalDays;
      document.getElementById('totalPrice').value = totalPrice.toFixed(2);
    }
  
    // Attach the function to form inputs' change events
    document.getElementById('selAirport').addEventListener('change', updateTotalPrice);
    document.getElementById('selDriver').addEventListener('change', updateTotalPrice);
    document.getElementById('selDestination').addEventListener('change', updateTotalPrice);
    document.getElementById('price').addEventListener('input', updateTotalPrice);
    document.getElementById('pickupDate').addEventListener('change', updateTotalPrice);
    document.getElementById('dropoffDate').addEventListener('change', updateTotalPrice);
  
    // Initial update
    updateTotalPrice();
  
  
  
  </script> --}}
<script>
    function togglePaymentField() {
      var mobileFields = document.getElementById('mobilemoneyFields');
      var paymentMethod = document.getElementById('payment_method').value;

      // Show/hide paypackFields based on payment method selection
      if (paymentMethod === 'paypack') {
          mobilemoneyFields.style.display = 'block';
      } else {
          mobilemoneyFields.style.display = 'none';
      }
  }

document.addEventListener("DOMContentLoaded", function() {
    const pickupDateInput = document.getElementById("pickupDate");
    const dropoffDateInput = document.getElementById("dropoffDate");
    const totalDaysInput = document.getElementById("totalDays");
    const quantityInputs = document.getElementsByName('quantity[]');
    const priceInputs = document.getElementsByName('price[]');
    const depositeInput = document.getElementById("deposite");
    const selAirportInput = document.getElementById("selAirport");
    const selDriverInput = document.getElementById("selDriver");
    const selDestinationInput = document.getElementById("selDestination");
    const subtotalInput = document.getElementById("subtotal");
    const totalPriceInput = document.getElementById("totalPrice");
    const totalDepositeInput = document.getElementById("TotalDeposite");
    // const paymentMethodInput = document.getElementById("payment_method");
    // const MobilemoneyFields = document.getElementById("mobilemoneyFields");
    // const paypackNumberInput = document.getElementById("paypackNumber");

    pickupDateInput.addEventListener("change", updateTotalDaysAndPrice);
    dropoffDateInput.addEventListener("change", updateTotalDaysAndPrice);
    subtotalInput.addEventListener("input", updateTotal);
    depositeInput.addEventListener("input", updateTotal);
    selAirportInput.addEventListener("change", updateTotal);
    selDriverInput.addEventListener("change", updateTotal);
    selDestinationInput.addEventListener("change", updateTotal);
    // paymentMethodInput.addEventListener("change", togglePaymentFields);

    // Calculate subtotal
    function calculateSubtotal() {
        let subtotal = 0;
        for (let i = 0; i < quantityInputs.length; i++) {
            const quantity = parseInt(quantityInputs[i].value) || 0;
            const price = parseFloat(priceInputs[i].value) || 0;
            subtotal += quantity * price;
        }
        return subtotal;
    }

    function updateTotal() {
        // Get values from the form
        const totalDays = parseFloat(totalDaysInput.value) || 0;
        const deposite = parseFloat(depositeInput.value) || 0;
        const selAirport = selAirportInput.value;
        const selDriver = selDriverInput.value;
        const selDestination = selDestinationInput.value;

        // Calculate total deposit for each product
        let totalDeposite = 0;
        for (let i = 0; i < quantityInputs.length; i++) {
            const quantity = parseInt(quantityInputs[i].value) || 0;
            totalDeposite += quantity * deposite;
        }

        // Calculate subtotal
        let subtotal = calculateSubtotal() + totalDeposite;

        // Calculate additional fees based on user selections
        let additionalFees = 0;

        if (selAirport === 'yes') {
            additionalFees += 5000;
        }

        if (selDriver === 'yes') {
            additionalFees += 10000;
        }

        if (selDestination === 'east' || selDestination === 'north' || selDestination === 'west') {
            additionalFees += 5000;
        }

        // Calculate total price
        const totalPrice = totalDays * (subtotal + additionalFees);

        // Update the form fields
        totalDepositeInput.value = totalDeposite.toFixed(2);
        subtotalInput.value = subtotal.toFixed(2);
        totalPriceInput.value = totalPrice.toFixed(2);
    }

    function updateTotalDaysAndPrice() {
        const pickupDate = new Date(pickupDateInput.value);
        const dropoffDate = new Date(dropoffDateInput.value);

        console.log("pickupDate:", pickupDate);
    console.log("dropoffDate:", dropoffDate);

    // Check if both dates are valid
    if (!isNaN(pickupDate.getTime()) && !isNaN(dropoffDate.getTime()) && pickupDate < dropoffDate) {
        // Dates are valid, proceed with calculations
        const timeDiff = dropoffDate - pickupDate;
        const totalDays = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));
        totalDaysInput.value = totalDays;

        updateTotal();
    } else {
        // Handle invalid date format or range
        totalDaysInput.value = '';
        subtotalInput.value = '';
        totalPriceInput.value = '';
        // console.error("Invalid date format or range");
    }
}






// Function definition
// function togglePaymentFields() {
//     var mobileMoneyFields = document.getElementById('mobilemoneyFields');
//     var paymentMethod = document.getElementById('payment_method').value;

//     // Show/hide mobileMoneyFields based on payment method selection
//     if (paymentMethod === 'paypack') {
//         mobileMoneyFields.style.display = 'block';
//     } else {
//         mobileMoneyFields.style.display = 'none';
//     }
// }

// document.addEventListener("DOMContentLoaded", function() {
//     // ... (your existing code)

//     // Attach the event listener after the function is defined
//     paymentMethodInput.addEventListener("change", togglePaymentFields);

//     // ... (rest of your code)
// });

// // Move this line outside the DOMContentLoaded event listener
// paymentMethodInput.addEventListener("change", togglePaymentFields);

// function toggleMobilemoneyFields() {
//       var mobilemoneyFields = document.getElementById('mobilemoneyFields');
//       var paymentMethod = document.getElementById('payment_method').value;

//       // Show/hide paypackFields based on payment method selection
//       if (paymentMethod === 'paypack') {
//           mobilemoneyFields.style.display = 'block';
//       } else {
//           mobilemoneyFields.style.display = 'none';
//       }
//   }

// ... (other functions)

// Function definition
// function togglePaymentField() {
//     var mobileMoneyFields = document.getElementById('mobilemoneyFields');
//     var paymentMethod = document.getElementById('payment_method').value;

//     // Show/hide mobileMoneyFields based on payment method selection
//     if (paymentMethod === 'paypack') {
//         mobileMoneyFields.style.display = 'block';
        
//         // Check if the mobilemoney input exists and is not disabled
//         const mobileMoneyInput = document.getElementById('mobilemoney');
//         if (mobileMoneyInput && !mobileMoneyInput.disabled) {
//             mobileMoneyInput.focus();
//         }
//     } else {
//         mobileMoneyFields.style.display = 'none';
//     }
// }

// Attach the event listener
// paymentMethodInput.addEventListener("change", togglePaymentFields);






    // Form Validation
    function validateForm() {
        const isChecked = document.getElementById("termsCheckbox").checked;
        const idPassportValue = document.getElementById("idPassport").value.trim();
        if (!isChecked) {
            alert("Please agree to the terms and conditions to submit the form.");
            return false;
        }
        if (idPassportValue === "") {
            alert("Please enter your Id/Passport number.");
            return false;
        }
        return true;
    }

    const form = document.querySelector("form");
    form.addEventListener("submit", function(e) {
        if (!validateForm()) {
            e.preventDefault();
        }
    });
});
</script>




















</body>

</html>
