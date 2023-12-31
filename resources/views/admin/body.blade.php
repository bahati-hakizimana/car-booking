<div class="main-panele" style="background: white; width:100%; margin-top:2rem;">
    <div class="content-wrapper bg-white mt-10 p-10">
      <div class="row mt-3">
        <div class="col-12 grid-margin stretch-card">
          <div class="card corona-gradient-card" >
            <div class="card-body py-0 px-0 px-sm-3">
              <div class="row align-items-center">
                <div class="col-4 col-sm-3 col-xl-2">
                  
                </div>
                <div class="col-5 col-sm-7 col-xl-8 p-0">
                  <h4 class="mb-1 mb-sm-0">Empower Africa Now</h4>
                </div>
                <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                  <span>
                    <a href="#" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Generate Report</a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card shadow" style="background: white;">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">$12.34</h3>
                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Potential growth</h6>
            </div>
          </div>
        </div>
        {{-- <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card shadow" style="background: white;">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">$17.34</h3>
                    <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Revenue current</h6>
            </div>
          </div>
        </div> --}}
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card shadow" style="background: white;">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    {{-- <h3 class="mb-0">$17.34</h3> --}}
                    <p class="text-success ms-2 mb-0 font-weight-medium">{{$totalProduct}}</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Cars</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card shadow" style="background: white;">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <h6 class="text-muted font-weight-normal">Total Payments</h6>
                  <div class="d-flex align-items-center align-self-start">
                    <a href="#" class="text-danger ms-2 mb-0 font-weight-medium">{{$totalPayments}}</a>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-danger">
                    <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Amounts</h6>
              <h3 class="mb-0 text-dark mt-2">${{$totalAmount}}</h3>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card shadow" style="background: white;">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    
                    <p class="text-success ms-2 mb-0 font-weight-medium">{{$totalBookings}}</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">TotalBookings</h6>
            </div>
          </div>
        </div>
        
      
      <div class="row">
        <div class="col-sm-4 grid-margin">
          <div class="card shadow" style="background: white;">
            <div class="card-body">
              <h5>Revenue</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <p class="text-success ms-2 mb-0 font-weight-medium">{{$todayBookings}}</p>
                  </div>
                  <h6 class="text-muted font-weight-normal">To day Bookings</h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 grid-margin">
          <div class="card shadow" style="background: white;">
            <div class="card-body">
              <h5>Sales</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    {{-- <h2 class="mb-0">$45850</h2> --}}
                    <p class="text-success ms-2 mb-0 font-weight-medium">{{$thisMontsBookings}}</p>
                  </div>
                  <h6 class="text-muted font-weight-normal"> This Month Bookings</h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 grid-margin">
          <div class="card shadow" style="background: white;">
            <div class="card-body">
              {{-- <h5>Purchase</h5> --}}
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    {{-- <h2 class="mb-0">$2039</h2> --}}
                    <p class="text-danger ms-2 mb-0 font-weight-medium">{{$thisYearBookings}}</p>
                  </div>
                  <h6 class="text-muted font-weight-normal">Year Bookings</h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer shadow text-center mt-3 bg-white">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block text-dark">Copyright © Empower Africa Now 2023</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-dark"> Empower <a href="#" target="_blank">Africa</a> Now</span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->