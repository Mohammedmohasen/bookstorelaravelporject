<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Booksto - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/css/dataTables.bootstrap4.min.css') }}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('admin/css/typography.css') }}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('admin/css/responsive.css') }}">

      <link rel="stylesheet" href="{{ asset('admin/css/remixicon.css') }}">

   


   </head>
   <body>
      <!-- loader Start -->
      <div>
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="index.html" class="header-logo">
                  <img class="img-fluid rounded-normal" alt="">
                  <div class="logo-title">
                     <span class="text-primary text-uppercase"></span>
                  </div>
               </a>
               <div class="iq-menu-bt-sidebar">
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li>
                        <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Shop</span></i></a>
                        <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="index.html"><i class="las la-house-damage"></i>BOOKS</a></li>
                           <li><a href="category.html"><i class="ri-function-line"></i>Category</a></li>
                           <li><a href="book-page.html"><i class="ri-book-line"></i>AUTHER</a></li>
                           <li><a href="book-pdf.html"><i class="ri-file-pdf-line"></i>publishing house</a></li>
                           <li><a href="Checkout.html"><i class="ri-checkbox-multiple-blank-line"></i>COMMETNT</a></li>

                        </ul>
                     </li>
                     <li class="active active-menu">
                        <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Admin</span></i></a>
                        <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                           <li><a href="admin-dashboard.html"><i class="las la-house-damage"></i>ADD publishing house</a></li>
                           <li><a href="{{ route('add-category')}}">ADD Books Category</a></li>
                           <li class="active"><a href="admin-author.html"><i class="ri-book-line"></i>ADD Author</a></li>
                           <li><a href="admin-books.html"><i class="ri-file-pdf-line"></i>ADD Books</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>

            </div>
         </div>
         <!-- TOP Nav Bar -->

         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add Author</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                             @include('include.massege')
                           <form method="POST" action="{{ action('controlController@store') }}">

                                  @csrf
                               <input type="hidden" name="requestName" value="add-author-form"/>
                              <div class="form-group">
                                 <label>Author Name:</label>
                                 <input type="text"  name="Name" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Author Age:</label>

                                    <input type="number" name="Age"  class="form-control">


                              </div>
                              <div class="form-group">
                                 <label>Author Email:</label>
                                 <input type="email" name="Email" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Author State:</label>
                                 <input type="checkbox"name="State" class="form-control">
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <button type="reset" class="btn btn-danger">Reset</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright 2020 <a href="#">Booksto</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
      <script src="{{ asset('admin/js/popper.min.js') }}"></script>
      <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('admin/js/dataTables.bootstrap4.min.js') }}"></script>
      <!-- Appear JavaScript -->
      <script src="{{ asset('admin/js/jquery.appear.js') }}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{ asset('admin/js/countdown.min.js') }}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{ asset('admin/js/waypoints.min.js') }}"></script>
      <script src="{{ asset('admin/js/jquery.counterup.min.js') }}"></script>
      <!-- Wow JavaScript -->
      <script src="{{ asset('admin/js/wow.min.js') }}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{ asset('admin/js/apexcharts.js') }}"></script>
      <!-- Slick JavaScript -->
      <script src="{{ asset('admin/js/slick.min.js') }}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{ asset('admin/js/select2.min.js') }}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{ asset('admin/js/jquery.magnific-popup.min.js') }}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ asset('admin/js/smooth-scrollbar.js') }}"></script>
      <!-- lottie JavaScript -->
      <script src="{{ asset('admin/js/lottie.js') }}"></script>
      <!-- am core JavaScript -->
      <script src="{{ asset('admin/js/core.js') }}"></script>
      <!-- am charts JavaScript -->
      <script src="{{ asset('admin/js/charts.js') }}"></script>
      <!-- am animated JavaScript -->
      <script src="{{ asset('admin/js/animated.js') }}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{ asset('admin/js/kelly.js') }}"></script>
      <!-- am maps JavaScript -->
      <script src="{{ asset('admin/js/maps.js') }}"></script>
      <!-- am worldLow JavaScript -->
      <script src="{{ asset('admin/js/worldLow.js') }}"></script>
      <!-- Raphael-min JavaScript -->
      <script src="{{ asset('admin/js/raphael-min.js') }}"></script>
      <!-- Morris JavaScript -->
      <script src="{{ asset('admin/js/morris.js') }}"></script>
      <!-- Morris min JavaScript -->
      <script src="{{ asset('admin/js/morris.min.js') }}"></script>
      <!-- Flatpicker Js -->
      <script src="{{ asset('admin/js/flatpickr.js') }}"></script>
      <!-- Style Customizer -->
      <script src="{{ asset('admin/js/style-customizer.js') }}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{ asset('admin/js/chart-custom.js') }}"></script>
      <!-- Custom JavaScript -->
      <script src="{{ asset('admin/js/custom.js') }}"></script>
   </body>
</html>
