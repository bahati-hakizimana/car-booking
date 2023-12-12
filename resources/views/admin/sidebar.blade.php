<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas shadow" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{url('redirect')}}"><img src="assets/images/Empower.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="{{url('redirect')}}"><img width="50" height="50" src="assets/images/Empower.png" alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('redirect')}}">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        {{-- <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url("product") }}">
            <span class="menu-icon">
              <i class="mdi mdi-plus"></i>
            </span>
            <span class="menu-title">Add New Products</span>
          </a>
        </li> --}}
        

        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('messages')}}">
            <span class="menu-icon">
              <i class="mdi mdi-message"></i>
            </span>
            <span class="menu-title">Messages</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{route('customer')}}">
            <span class="menu-icon">
              <i class="mdi mdi-account-circle"></i>
            </span>
            <span class="menu-title">Customers</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url("showproduct")}}">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Show All Products</span>
          </a>
        </li>
        
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{route('bookings')}}">
            <span class="menu-icon">
              <i class="mdi mdi-account-multiple-plus"></i>
              

            </span>
            <span class="menu-title">Booking</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('cart')}}">
            <span class="menu-icon">
              <i class="mdi mdi-cart"></i>
            </span>
            <span class="menu-title">Cart</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('payment')}}">
            <span class="menu-icon">
              <i class="mdi mdi-pandora"></i>
            </span>
            <span class="menu-title">Payment</span>
          </a>
        </li>
      </ul>
    </nav>