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
   </head>
   <body>

      <!-- Wrapper Start -->
      <div class="wrapper ">
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
               @include('include.list')

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
                              <h4 class="card-title">Add Books</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                                @include('include.massege')
                                @if(count($books) > 0)
                             @foreach($books as $book)
                           <form method="POST" action="{{ action('controlController@update',$book->id) }}">
                               <input type="hidden" name="requestName" value="edit-book"/>
                               @csrf
                              <div class="form-group">
                                 <label>Book Name:</label>
                                 <input type="TEXT" name="NAME" class="form-control" value="{{$book->name}}">
                              </div>
                               <div class="form-group">
                                 <label>Book ISBN:</label>
                                 <input type="text" name="ISBN" class="form-control"  value="{{$book->isbn}}"readonly>
                              </div>
                              <div class="form-group">
                                 <label>Book Category:</label>
                                 <select class="form-control" id="exampleFormControlSelect1" name="bookCategory" readonnly>
                                    <option selected="" disabled="">Book Category</option>
                                        <option >{{$book->Categorie->name}}</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Book Author:</label>
                                 <select class="form-control" id="exampleFormControlSelect2" name="bookAuthor" readonly>
                                    <option selected="" disabled="">Book Author</option>
                                     <option>{{$book->author->name}}</option>
                                    </option>
                                 </select>
                              </div>
                                <div class="form-group">
                                 <label>Book publishing home:</label>
                                 <select class="form-control" id="exampleFormControlSelect2" name="bookpublishinghome" readonly>
                                    <option selected="" disabled="" >publishing home</option>
                                                         <option>{{$book->PublishingHouse->publishingHouseName}}</option>
                                    </option>
                                 </select>
                              </div>
  @endforeach
                   @endif

@method('PUT')
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
      <script src="{{ asset('admin/js/maps.jsjs/maps.js') }}"></script>
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
