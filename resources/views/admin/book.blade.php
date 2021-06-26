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
<!--Header Start-->
<div class="header_top_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="analyze_logo">
					<a href="{{ route('add-author') }}"> <img src="{{ asset('customer/images/logo.png') }}" alt="Analyze logo" /> </a>
				</div>
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

						<li><a href="gallery.html">dashboard</a></li>
						<li><a href="index.html">add author</a></li>
						<li><a href="about.html">add category</a></li>
						<li class="active"><a href="book.html">add books</a></li>
						<li><a href="gallery.html">add PublishingHouse</a></li>

				</div>
			</div>
			<div class="col-lg-3 col-md-5 col-sm-5">
				<div class="search_btn">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search">
						<span class="input-group-btn">
						<button class="btn btn-default" type="button">search</button>
						</span>
					</div>
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
								<a href="book_inside.html"></a>
							</ul>
						</div>
						<div class="book_text">
							<h3><a href="book_inside.html">book name</a></h3>
							<span>author name <p >publishingHouseName</p></span> year release 
						</div>
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
