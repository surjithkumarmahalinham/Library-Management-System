@extends('layouts.master')

@section('css')
@endsection

@section('content')
<style>
  .mb-4, .my-4 {
    margin-bottom: -0.5rem!important;
  }
  .metismenu > li {
    border-bottom:1px solid #eee;
  }

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container-fluid">

  <div class="row">
    <div class="col-sm-12">
      <div class="page-title-box">
        <h4 class="page-title">Dashboard</h4>
        <ol class="breadcrumb">

        </ol>

      </div>
    </div>
  </div>
  <!-- end row -->

  <div class="row" style="margin-top: 10px;">
              <div class="col-md-4">
                <a href="" style="text-decoration: none;">
                  <div class="card newrad mini-stat bg-danger">
                      <div class="card-body mini-stat-img">
                          <div class="mini-stat-icon">
                             <i class="fa fa-building float-right"></i>
                          </div>
                          <div class="text-white">
                              <h6 class="text-uppercase mb-3">Books</h6>
                              <h4 class="mb-4">
                               
                              </h4>
                              </span>
                          </div>
                      </div>
                  </div>
                </a>
              </div>


              <div class="col-md-4">
                <a href="" style="text-decoration: none;">
                  <div class="card newrad mini-stat bg-primary">
                      <div class="card-body mini-stat-img">
                          <div class="mini-stat-icon">
                              <i class="fa fa-clipboard-list float-right"></i>
                          </div>
                          <div class="text-white">
                              <h6 class="text-uppercase mb-3">Subscribers</h6>
                              <h4 class="mb-4">
                                
                              </h4>
                            </span>
                          </div>
                      </div>
                  </div>
                </a>
              </div>
              
            
                          



<!-- Modal -->
<!-- 
          <div>
        </div>
      </div>
</div>



<div class="container-fluid">
<div class="row">
  <div class="col-md-6">

    <div class="row">
      <div class="col-md-3">
        <a href="dashboard/animalstock/index">
          <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center"><br>
               <img src="assets/images/pawprint.svg"><br>
               <h6 style="font-size: 16px;">Animals</a></h6>
             </div>

           </div>

         </div>
       </div>
     </div>
     <div class="col-md-3">
      <a href="dashboard/foodstock/index">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center"><br>
             <img src="assets/images/bar-chart.svg"><br>
             <h6   style="font-size: 16px;">Stock Statistics</h6>
           </div></a>

         </div>

       </div>
     </div>
   </div>

   <div class="col-md-3">
    <a href="dashboard/staff/index">
    <div class="stats-small stats-small--1 card card-small">
      <div class="card-body p-0 d-flex">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center"><br>
           <img src="assets/images/group.svg" ><br>
           <h6  style="font-size: 16px;">Employees</h6>
         </div></a>

       </div>

     </div>
   </div>
 </div>


 <div class="col-md-3">
  <a href="dashboard/entrylogs/index">
  <div class="stats-small stats-small--1 card card-small">
    <div class="card-body p-0 d-flex">
      <div class="d-flex flex-column m-auto">
        <div class="stats-small__data text-center"><br>
          <img src="assets/images/log-in.svg"><br>
          <h6  style="font-size: 16px;">Entry Logs</h6>
        </div></a>

      </div>

    </div>
  </div>
</div>
</div>
</div> -->
<!--  <div class="row"> -->
 <!--  <div class="col-md-6">
   <div class="row">

     <div class="col-md-3">
      <a href="dashboard/sales/index">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center"><br>
              <img src="assets/images/milk.svg"><br>
              <h6  style="font-size: 16px;">Milk Statistics</h6>
            </div></a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <a href="dashboard/feed/index">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center"><br>
              <img src="assets/images/bar-chart-reload.svg"><br>
              <h6  style="font-size: 16px;">Feed Chart</h6>
            </div></a>

          </div>

        </div>
      </div>
    </div>


    <div class="col-md-3">
      <a href="dashboard/staffattendance/index">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center"><br>
              <img src="assets/images/shopping-list.svg"><br>
              <h6  style="font-size: 16px;">Attendence</h6>
            </div></a>

          </div>

        </div>
      </div>
    </div>

    <div class="col-md-3">
      <a href="dashboard/complaint/index">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center"><br>
              <img src="assets/images/check-list.svg"><br>
              <h6   style="font-size: 16px;">Complaints</h6>
            </div></a>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>


<div class="row">
  <div class="col-md-6">

    <div class="row">

      <div class="col-md-3">
        <a href="dashboard/sales/index">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center"><br>
                <img src="assets/images/get-money.svg"><br>
                <h6 style="font-size: 16px;">Sales</h6>
              </div></a>

            </div>

          </div>
        </div>
      </div>



      <div class="col-md-3">
        <a href="dashboard">
        <div class="stats-small stats-small--1 card card-small" style="height: 104px;">
          <div class="card-body p-0 d-flex" >
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center"><br>
                <img src="assets/images/bar-chart.svg"><br>
                <h6   style="font-size: 16px;">Expense</h6>
              </div></a>

            </div>

          </div>
        </div>
      </div>
      <div class="col-md-3">
        <a href="dashboard/cell/index">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex" style="    margin-top: -3px;">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center"><br>
                <img src="assets/images/account.svg"><br>
                <h6 style="font-size: 16px;">Division</h6>
              </div></a>

            </div>

          </div>
        </div>
      </div>
       <div class="col-md-3">
        <a href="dashboard/cell/index">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center"><br>
                <img src="assets/images/write-board.svg"><br>
                <h6 style="font-size: 16px;">Cell Box </h6>
              </div></a>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

        <div class="col-md-6">

    <div class="row">
       <div class="col-md-3">
        <a href="dashboard/payslip/index">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center"><br>
                <img src="assets/images/write-board.svg"><br>
                <h6 style="font-size: 16px;">Payslips</h6>
              </div></a>

            </div>

          </div>
        </div>
      </div>
       <div class="col-md-3">
        <a href="dashboard/vendor/index">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center"><br>
                <img src="assets/images/write-board.svg"><br>
                <h6 style="font-size: 16px;">Vendors</h6>
              </div></a>

            </div>

          </div>
        </div>
      </div>
      <div class="col-md-3">
        <a href="dashboard/vehicalreports/index">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center"><br>
                <img src="assets/images/write-board.svg"><br>
                <h6 style="font-size: 16px;">Vehicles</h6>
              </div></a>

            </div>

          </div>
        </div>
      </div>

       <div class="col-md-3">
        <a href="dashboard">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center"><br>
                <img src="assets/images/write-board.svg"><br>
                <h6 style="font-size: 16px;">Notice Board</h6>
              </div></a>

            </div>

          </div>
        </div>
      </div>
    </div> -->



  </div>

</div>

                          


<!-- end row -->

<!-- container-fluid -->
@endsection

@section('script')

<script src="{{ URL::asset('assets/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js')}}"></script>
@endsection
