function testimonialSwitch() {
	
	var $testImg = $("#testimonials img");
	
	// add a nav item for each testimonial image
	$("#testimonials img").each(function(){
		$("#testimonial_nav").append("<li><a href='javascript:void(0)'></a></li>");
	});
	
	var $testNav = $("#testimonial_nav li a");
	var i = 0;
	
	// make first items (nav and img visible/active)
	$($testNav[i]).addClass("test_active");
	$($testImg[i]).addClass("active");
	
	$testNav.each(function(i) {
		$(this).click(function() {
			$testNav.removeClass();
			$testImg.removeClass();
			$($testNav[i]).addClass("test_active");
			$($testImg[i]).addClass("active");
		});
	});
	
}

function homepageSwitch() {

		var $next = $("#rotator_nav li img.right_arrow");
		var $prev = $("#rotator_nav li img.left_arrow");
		
		var $homeSlides = $(".homepage_rotator");
		var $homeSlideCount = $homeSlides.length;
		var i = 0;
		
		var $navSmall = $("#small_nav li a");
		var $navLarge = $("#large_nav li a");

		function homeRotatorSwitch(a) {
			$navSmall.removeClass();
			$navLarge.removeClass();
			$($navSmall[a]).addClass("current");
			$($navLarge[a]).addClass("current");
		}
		
		function slideRight() {
			$($homeSlides[i]).stop().animate({ opacity: 0.0 }, 1000, function() {
				$(this).removeClass("current");
			});
			i+=1 ;
			if (i >= $homeSlideCount) {
				i = 0;
			}
			$($homeSlides[i]).stop().animate({ opacity: 1.0 }, 1000, function() {
				$(this).addClass("current");
			});
			homeRotatorSwitch(i);
		}
		
		function slideLeft() {
			$($homeSlides[i]).stop().animate({ opacity: 0.0 }, 1000, function() {
				$(this).removeClass("current");
			});
			i-=1;
			if (i < 0) {
				i = $homeSlideCount-1;
			}
			$($homeSlides[i]).stop().animate({ opacity: 1.0 }, 1000, function() {
				$(this).addClass("current");
			});
			homeRotatorSwitch(i);
		}
		
		$next.click(function(){
			slideRight();
			clearInterval(slideInterval);
		});
		
		$prev.click(function(){
			slideLeft();
			clearInterval(slideInterval);
		});
		
		// Auto-rotate slides
		var slideInterval = setInterval(slideRight, 7000);
		
		function rotatorNavigation(nav){ 
			nav.each(function() {
				var n;
				$(this).click(function() {
					clearInterval(slideInterval);
					n = nav.index(this);
					$(".homepage_rotator").stop().animate({ opacity: 0.0 }, 1000, function() {
						$(this).removeClass("current");
					});
					$($homeSlides[n]).stop().animate({ opacity: 1.0 }, 1000, function() {
						$(this).addClass("current");
					});
					nav.removeClass();
					$(this).addClass("current");
					i = n;
				});
			});
		}

		rotatorNavigation($navSmall);
			rotatorNavigation($navLarge);	

	
}

function smeSwitch() {
	
	var $next = $("#expert_right"),
		$prev = $("#expert_left"),
		$prev_small = $("#expert_left_small"),
		$next_small = $("#expert_right_small"),
		$smeSlides = $(".expert_slides .slide"),
		$smeSlideCount = $smeSlides.length,
		i = 0,
		$navItem;
		
	function rotatorNavigation(nav){ 
		nav.each(function() {
			var n;
			$(this).click(function() {
				n = nav.index(this);
				$(".expert_slides .current").animate({ opacity: 0.0 }, 500, function() {
					$(this).removeClass("current");
				});
				$($smeSlides[n]).animate({ opacity: 1.0 }, 500, function() {
					$(this).addClass("current");
				});
				nav.removeClass();
				$(this).addClass("nav_current");
				i = n;
			});
		});
	}
	
	// test screen size and adjust nav accordingly
	if (window.screen.availWidth <= 480) {
		$navItem = $("#small_nav_sme li a");
		rotatorNavigation($navItem);
	} else {
		$navItem = $("#large_nav_sme li a");
		rotatorNavigation($navItem);
	}
	
	var moveRight = function() {
		$($smeSlides[i]).animate({ opacity: 0.0 }, 500, function() {
			$(this).removeClass("current");
		});
		i+=1;
		if (i >= $smeSlideCount) {
			i = 0;
		}
		$($smeSlides[i]).animate({ opacity: 1.0 }, 500, function() {
			$(this).addClass("current");
		});
		smeNavSwitch(i);
	}
	
	var moveLeft = function() {
		$($smeSlides[i]).animate({ opacity: 0.0 }, 500, function() {
			$(this).removeClass("current");
		});
		i-=1;
		if (i < 0) {
			i = $smeSlideCount-1;
		}
		$($smeSlides[i]).animate({ opacity: 1.0 }, 500, function() {
			$(this).addClass("current");
		});
		smeNavSwitch(i);
	}	
	
	$prev.click(moveLeft);	
	$next.click(moveRight);
	$prev_small.click(moveLeft);
	$next_small.click(moveRight);
	
	function smeNavSwitch(a) {
		$navItem.removeClass();
		$($navItem[a]).addClass("nav_current");
	}
	
}

function servicesScroll() {	
	
	// if you edit/rearrange navAnchors you MUST also edit serviceAnchors (and vice versa);
	var navAnchors = ["#tech_link",
					  "#design_link",
					  "#custom_link",
					  "#adop_link",
					  "#adprod_link",					  
					  "#stat_link",
					  "#cs_link"];
					
 	var serviceAnchors = ["#technical_support",
						   "#design_services",
						   "#custom_development",
						   "#ad_ops",
						   "#ad_production",
						   "#strat_consult",
						   "#client_services"];
	
	var navBarHeight = $("#nav_bar").height();
						
	$.each(navAnchors, function(i) { 
		$(this.toString()).click(function() {
			var distanceTop = $(serviceAnchors[i]).offset().top;
			$("html,body").animate({ scrollTop: distanceTop - navBarHeight }, 1500); // need both html & body for browser compatability
		});
	});
}

function careersSwtich() {
	
	var jobDsc = $(".left_column .job_desc");
	var jobOpeningContainer = $("#job_openings_column ul li");
	var i;
	var $jobs = $("#job_openings_column ul li a");
	var numOfJobs = $jobs.length;
	var jobTitles = [];
	var $careersDropNav = $("#career_nav_small");
	var $dropNavOptions = $("#career_nav_small option");
	
	jobOpeningContainer.each(function(x) {
		$(this).click(function() {
			$(jobOpeningContainer).not(this).removeClass();
			$(this).addClass("on");
			$(".job_desc:visible").fadeOut(500, function() {
				$(jobDsc[x]).fadeIn(500);
			});
		});
	});
	
	for(i = 0; i < numOfJobs; i+=1) {
		jobTitles[i] = $jobs[i].innerHTML;
		$careersDropNav.append("<option>" + jobTitles[i] + "</option>");
	}
	
	$careersDropNav.change(function() {
		var n;
		n = $(this).find("option:selected").index();
		$(".job_desc:visible").fadeOut(500, function() {
			$(jobDsc[n]).fadeIn(500);
		});	
	});
	
}

// Workaround for IE HTML5 form Placeholder
function formPlaceholder() {
	if (!Modernizr.input.placeholder) {

		var $contactForm = $("#wn_contact_form").children();
		var i = 0;
		var $len = '';
		
		for ($len = $contactForm.length; i < $len; i++) {
			
			if ($contactForm[i].getAttribute("placeholder") != undefined) {
				
				$contactForm[i].value = $contactForm[i].getAttribute("placeholder");
			}
		}

		$("input, textarea").css( 'color' , '#999' );

		$("input, textarea").focusin(function () {
			$(this).val("");
			$(this).css( "color" , "#000" );
		});
		$("input, textarea").focusout(function () {
			if ($(this).val() === "") {
				$(this).val($(this).attr("placeholder"))
				$(this).css( "color" , "#999" );
			}
		});

	}
} 


function responsiveNav() {
	$("nav select").change(function() {
	  window.location = $(this).find("option:selected").val();
	});
}

function responsiveToggleNav() {
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
		$("#nav_center > ul > li").has("ul").find("> a").click(function() {
			if($(this).siblings("ul:visible").length === 0) {
				return false;
			} 
		});
	}
}

function backToTop() {
	
	// fade in #back-top
	if (window.screen.availWidth > 1280) {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back_to_top').fadeIn();
			} else {
				$('#back_to_top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back_to_top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	}
}


$(function() {
	testimonialSwitch();
	homepageSwitch();
	smeSwitch();
	servicesScroll();
	careersSwtich();
	formPlaceholder();
	responsiveNav();
	responsiveToggleNav();
	backToTop();
	homepageSwitch();
});


















