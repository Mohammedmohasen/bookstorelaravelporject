<!DOCTYPE html>
<!-- 
Template Name: Reader Book Store HTML Website Template
Version: 1.0
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8" />
<title>Reader Book Store HTML Website Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description"  content="Reader Book Store HTML Website Template"/>
<meta name="keywords" content="Books, Book Shop, Reader, offer, sale, html template">
<meta name="author"  content=""/>
<meta name="MobileOptimized" content="320">

<link rel="stylesheet" type="text/css" href="{{ asset('customer/css/animate.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('customer/css/fonts.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('customer/css/bootstrap.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('customer/css/font-awesome.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('customer/css/owl.carousel.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('customer/css/owl.theme.default.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('customer/css/jquery.fancybox.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('customer/css/woocommerce.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('customer/css/style.css') }}" />
</head>

<body>
<!--Pre loader start-->
<div id="preloader">
	<div id="status"> 
		<img src="{{ asset('customer/images/logo.png') }}" alt="" />
		<div class="loader">
			Loading...
			<div class="ball"></div>
			<div class="ball"></div>
			<div class="ball"></div>
		</div>
	</div>
</div>
<!--Header Start-->
<div class="header_top_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="analyze_logo">
					<a href="index.html"> <img src="{{ asset('customer/images/logo.png') }}" alt="Analyze logo" /> </a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="analyze_social">
					<ul>
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
						<li><a href=""><i class="fa fa-camera-retro"></i></a></li>
						<li><a href=""><i class="fa fa-google-plus"></i></a></li>	                  
					</ul>
				</div>
			</div>
		</div>
	</div>
</div> 
<div class="header_bottom_wrapper">
    <div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-7 col-sm-7">
				<div class="analyze_manu_btn" id="manu_click">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</div>
				<div class="analyze_nav_wrapper">
					<ul>
						<li><a href="index.html">home</a></li>
						<li><a href="about.html">about</a></li>
						<li class="active"><a href="book.html">books</a></li>
						<li><a href="gallery.html">gallery</a></li>
						<li><a href="multiblog.html">blog</a></li>
						<li><a href="cart.html">cart</a></li>
						<li><a href="contact.html">contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-5 col-sm-5">
				<div class="search_btn">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search">
						<span class="input-group-btn">
						<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</div>
				<div class="shopcart">
					<div class="upper_tag">2</div>
					<a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Page-title Start-->
<div class="analyze_pagetitle">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8">
				<h2>BOOKS</h2>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="analyze_breadcrumb">
					<ul>
						<li><a href="index.html">home</a></li>
						<li><a href="book.html">books</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Content start-->
<div class="analyze_book_page">
	<div class="container">
		<div class="row">
			<div class="book_maindiv">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="book_images">
						<img src="{{ asset('customer/images/books/b1.jpg') }}" alt="" />
						<div class="book_social">
							<ul>
								<li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
								<li><a href=""><i class="fa fa-heart"></i></a></li>
								<li><a href="book_inside.html"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
						<div class="book_text">
							<h3><a href="book_inside.html">Twilight</a></h3>
							<span><h5>$200</h5> <p>$150</p></span><div class="stardiv1 star-rating"><span style="width:80%;"></span></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="book_images">
						<img src="{{ asset('customer/images/books/b2.jpg') }}" alt="" />
						<div class="book_social">
							<ul>
								<li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
								<li><a href=""><i class="fa fa-heart"></i></a></li>
								<li><a href="book_inside.html"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
						<div class="book_text">
							<h3><a href="book_inside.html">Twilight</a></h3>
							<span><h5>$200</h5> <p>$150</p></span><div class="stardiv1 star-rating"><span style="width:80%;"></span></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="book_images">
						<img src="{{ asset('customer/images/books/b3.jpg') }}" alt="" />
						<div class="book_social">
							<ul>
								<li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
								<li><a href=""><i class="fa fa-heart"></i></a></li>
								<li><a href="book_inside.html"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
						<div class="book_text">
							<h3><a href="book_inside.html">Twilight</a></h3>
							<span><h5>$200</h5> <p>$150</p></span><div class="stardiv1 star-rating"><span style="width:80%;"></span></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="book_images">
						<img src="{{ asset('customer/images/books/b4.jpg') }}" alt="" />
						<div class="book_social">
							<ul>
								<li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
								<li><a href=""><i class="fa fa-heart"></i></a></li>
								<li><a href="book_inside.html"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
						<div class="book_text">
							<h3><a href="book_inside.html">Twilight</a></h3>
							<span><h5>$200</h5> <p>$150</p></span><div class="stardiv1 star-rating"><span style="width:80%;"></span></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="book_images">
						<img src="{{ asset('customer/images/books/b5.jpg') }}" alt="" />
						<div class="book_social">
							<ul>
								<li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
								<li><a href=""><i class="fa fa-heart"></i></a></li>
								<li><a href="book_inside.html"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
						<div class="book_text">
							<h3><a href="book_inside.html">Twilight</a></h3>
							<span><h5>$200</h5> <p>$150</p></span><div class="stardiv1 star-rating"><span style="width:80%;"></span></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="book_images">
						<img src="{{ asset('customer/images/books/b6.jpg') }}" alt="" />
						<div class="book_social">
							<ul>
								<li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
								<li><a href=""><i class="fa fa-heart"></i></a></li>
								<li><a href="book_inside.html"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
						<div class="book_text">
							<h3><a href="book_inside.html">Twilight</a></h3>
							<span><h5>$200</h5> <p>$150</p></span><div class="stardiv1 star-rating"><span style="width:80%;"></span></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="book_images">
						<img src="{{ asset('customer/images/books/b2.jpg') }}" alt="" />
						<div class="book_social">
							<ul>
								<li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
								<li><a href=""><i class="fa fa-heart"></i></a></li>
								<li><a href="book_inside.html"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
						<div class="book_text">
							<h3><a href="book_inside.html">Twilight</a></h3>
							<span><h5>$200</h5> <p>$150</p></span><div class="stardiv1 star-rating"><span style="width:80%;"></span></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="book_images">
						<img src="{{ asset('customer/images/books/b3.jpg') }}" alt="" />
						<div class="book_social">
							<ul>
								<li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
								<li><a href=""><i class="fa fa-heart"></i></a></li>
								<li><a href="book_inside.html"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
						<div class="book_text">
							<h3><a href="book_inside.html">Twilight</a></h3>
							<span><h5>$200</h5> <p>$150</p></span><div class="stardiv1 star-rating"><span style="width:80%;"></span></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="book_images">
						<img src="{{ asset('customer/images/books/b1.jpg') }}" alt="" />
						<div class="book_social">
							<ul>
								<li><a href=""><i class="fa fa-shopping-cart"></i></a></li>
								<li><a href=""><i class="fa fa-heart"></i></a></li>
								<li><a href="book_inside.html"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
						<div class="book_text">
							<h3><a href="book_inside.html">Twilight</a></h3>
							<span><h5>$200</h5> <p>$150</p></span><div class="stardiv1 star-rating"><span style="width:80%;"></span></div>
						</div>
					</div>
				</div>
				<div class="gallery_pagination">
					<ul>
						<li><a href="#" class="previous">Previous</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Content end-->
<!--Footer start-->
<div class="analyze_footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="footer_widget">
					<div class="footer_widget_newsletter">
						<h4>newsletter</h4>
					</div>
					<div class="footer_widget_newsletter_search_btn">
						<p>Sed gravida mauris sed augue</p>	
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Email">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="fa fa-caret-right"></i></button>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="footer_widget">
					<div class="footer_widget_center">
						<a href="index.html" class="footer_widget_logo"> <img src="{{ asset('customer/images/Analyze-footer.png') }}" alt="Reader logo" /> </a>
						<div class="footer_widget_social">
							<ul>
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
								<li><a href=""><i class="fa fa-camera-retro"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>	                  
							</ul>
						</div>
						<div class="copy_text_center">
							<p>&copy; 2018 Reader. All rights reserved</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="footer_widget">
					<div class="footer_widget_contact">
						<h4>contact info</h4>
					</div>
					<div class="footer_widget_contact_address">
						<p>Envato</p>
						<p>13/2 Elizabeth Street</p>
						<p>Melbourne VIC 3000, Australia</p>			
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--main js file start--> 
<script type="text/javascript" src="{{ asset('customer/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('customer/js/plugin/smoothscroll/jquery.smoothscroll.js') }}"></script> 
<script type="text/javascript" src="{{ asset('customer/js/plugin/fancybox/jquery.fancybox.js') }}"></script>
<script type="text/javascript" src="{{ asset('customer/js/plugin/fancybox/jquery.fancybox.pack.js') }}"></script>
<script type="text/javascript" src="{{ asset('customer/js/owl.carousel.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('customer/js/jquery.bootstrap.js') }}"></script> 
<script type="text/javascript" src="{{ asset('customer/js/custom.js') }}"></script>
</body>
</html>