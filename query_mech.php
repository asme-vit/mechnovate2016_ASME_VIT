<?php
ob_start();
include("connection.php");

$sql = "INSERT INTO query_mech values('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";

if (mysqli_query($con, $sql)) 
		{
$headers = "Content-Type: text/html; charset=UTF-8";
$from = $_POST["email"];
$to = "mechnovate@gmail.com";
$subject = "query form email "."From: ".$from;

$message ="First Name: ".$_POST["name"]."\n";
$message .="email: ".$_POST["email"]."\n";
$message .="subject: ".$_POST["subject"]."\n";
$message .="MESSAGE: ".$_POST["message"]."\n";

//echo $message;
mail($to,$subject,$message,$headers);
header("location:index.php?err=sent");
		}
else {
	header("location:abc.html");
	}
mysqli_close($con);

			
?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
    
    window.location="https://www.google.co.in/";
    });
</script>
<!DOCTYPE html>
<html>
<head>
<title>ASME-MECHNOVATE</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--js--> 
<script src="js/jquery.min.js"></script>
<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
<!--gallery-->
<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
<script type="text/javascript" src="js/jquery.gallery.js"></script>
<script type="text/javascript">
		$(function() {
		$('#dg-container').gallery({
		autoplay	:	true
	});
});
</script>
<!--/gallery-->
<!--script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<style>
.navbar {
    min-height: 80px;
   background-color:#fffffff;
}
#brand {
	font-size:2em;
	padding-top:30px;
  }
.navbar-nav > li > a {
    padding-top: 0px;
    padding-bottom: 0px;
    line-height: 80px;
}
.scroll {
	font-size:1.3em;
}
@media (max-width: 767px) {
    .navbar-nav > li > a {
    line-height: 20px;
    padding-top: 10px;
    padding-bottom: 10px;}
}
#send:hover{
	background-color:#3C948B;
}
#button1
{	
color:#3C948B;	
}
#button1:hover{
	background-color:#3C948B;
	color:white;
}
#button2
{	
color:#3C948B;	
}
#button2:hover{
	background-color:#3C948B;
	color:white;
}
#button3
{	
color:#3C948B;	
}
#button3:hover{
	background-color:#3C948B;
	color:white;
}
</style>

</head>
<body>
<!--top-nav-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#" id="brand" style="color:#3C948B">Mechnovate'16</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" id="tabs">
        <li><a class="scroll" href="#home">HOME</a></li>
		<li><a class="scroll" href="#">Convention</a></li>
    	 <li><a class="scroll" href="#services">Sponsors</a></li>
     	 <li><a class="scroll" href="#portfolio">Events</a></li>
	<li><a class="scroll" href="#portfolio">Workshops</a></li>
	<li><a class="scroll" href="#asme">Gallery</a></li>
	<li><a class="scroll" href="#about">About US</a></li>
	<li><a href="signupmech.php" style="font-size:130%;" >Sign Up</a></li>
	<li><a href="login.php" style="font-size:130%;" >Login</a></li>	
      </ul>
    </div>
  </div>
</nav>
<!--top-nav ends-->
<!--banner-->
<div id="home" class="banner">
     <div class="banner-head">
	     <div class="container">
		      <!--banner Slider starts Here-->
	  			<script src="js/responsiveslides.min.js"></script>
			   <script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 4
					  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
					  });
				
					});
			  </script>
			 <!--//End-slider-script-->
			 <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			         <li>
						  <div class="banner-head-info"> 
							 <h1>MECHNOVATE</h1>
							 <p class="title">A great opportunity for students brought by ASME-VIT to learn about the latest happenings in the world of engineering, expand their own knowledge and skill set & interact with people of similar mindset, interests & aspirations.</p>
							 <div class="banner-Get-started">
								<a href="#register"  id="button1">REGISTER</a>
							 </div>
						  </div>
			         </li>
			         <li>
			             <div class="banner-head-info">					    
			          	 <h1>HPVC</h1>
						 <p class="title">Students work in teams to design and build efficient, highly engineered mechanically powered vehicles and compete to find out the best designed vehicle.</p>
			             <div class="banner-Get-started">
						 <a href="http://www.hpvcindia.in"  id="button2">Know More</a>
					      </div>
					     </div>
			         </li>
			         <li>
			             <div class="banner-head-info">	
			             <h1>SPDC</h1>
						 <p class="title">Students get a chance to broaden their know how & widen the view on the real world faced by engineers and gives the chance to couple their theoretical knowledge with practical applications. Students get to showcase their own projects and get ideas for future endeavors.</p>
			             <div class="banner-Get-started">
						 <a href="http://www.vitspdc.com" id="button3">Know More</a>
					     </div>
					     </div>
			         </li>
			      </ul>
			  </div>
			    <div class="clearfix"> </div>
	      </div>
     </div>
</div>
<!--banner-->
<!--SERVICES-->

<!--SERVICE-->

<!--SERVICES BANNER-->
<!--<div class="service-banner">
	  <div class="service-banner-layer">
	     <div class="container service-banner-layer-info">
	          <div class="col-md-6 tab">
			  <span></span>
			  </div>
	           <div class="col-md-6 service-info">
			      <h3>Our Sponsors</h3>
			      <p>Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. 
			      Quisque velit nisi, pretium ut lacinia in, elementum id enim.Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
			      <div class="service-nav">
					  <ul>
					  <li><a href="#"><span></span>CLEAN AND MODERN DESIGN</a></li> 
					  <li><a href="#"><span></span>FULLY RESPONSIVE</a></li> 
					  <li><a href="#"><span></span>SINGLEPAGE & MULTIPAGE</a></li> 
					  <li><a href="#"><span></span>GREAT FOR ANY BUSSINESS</a></li> 
					  </ul>
			     </div>
		      </div>
		      <div class="clearfix"></div>
	     </div>
      </div> 
	 <div class="service-footer">
		  <div class="Get-started">
			  <a href="#">GET STARTED</a>
		  </div>
	 </div>  
</div>-->
<!--SERVICES BANNER ENDS-->

<!--portfolio-->
<div id="portfolio" class="portfolio">
   <div class="portfolio-head">
	 <h2>Events and Workshops</h2>
	 <img src="Images/service.png" alt=""/>
	 <!--<p>Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus 
	 convallis quis ac lectus. Quisque velit nisi,pretium ut lacinia in, elementum id enim.</p>-->
	 <div class="container">
	      <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
			<li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
			<li><span class="filter" data-filter="app">Events</span></li>
			<li><span class="filter" data-filter="card">Workshops</span></li>
			<!--<li><span class="filter" data-filter="icon">Guest Lectures</span></li>
			<li><span class="filter" data-filter="fun">Summit</span></li>-->
	       </ul>
	     <div id="portfoliolist">
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="dominos.html" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="Images/e1.jpg" class="img-responsive" alt=""/></a>
		                </div>
					</div>						
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="3d.html" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="Images/w1.jpg" class="img-responsive" alt=""/></a>
		                </div>
					</div>	
						<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="autocad.html" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="Images/w2.jpg" class="img-responsive" alt=""/></a>
		                </div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="automob.html" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="Images/w3.jpg" class="img-responsive" alt=""/></a>
		                </div>
					</div>	
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="paper.html" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="Images/e2.jpg" class="img-responsive" alt=""/></a>
		                </div>
					</div>
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="vehicle.html" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="Images/w4.JPG" class="img-responsive" alt=""/></a>
		                </div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="uni.html" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="Images/w5.jpg" class="img-responsive" alt=""/></a>
		                </div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="weapon.html" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="Images/w6.jpg" class="img-responsive" alt=""/></a>
		                </div>
					</div>
						<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="water.html" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="Images/e3.jpg" class="img-responsive" alt=""/></a>
		                </div>
					</div>
					
		   <div class="clearfix"></div>	
	  </div>
</div>	  
<!-- Script for gallery Here-->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		var filterList = {
		init: function () {
// MixItUp plugin
// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
	});				
},
		hoverEffect: function () {
// Simple parallax effect
		$('#portfoliolist .portfolio').hover(
			function () {
			$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
			$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
			},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
			}		
		);				
	}
};
// Run the show!
		filterList.init();
	});	
</script>
<!--Gallery Script Ends-->
<div class="clearfix"></div>
<div class="portfolio-showmore">
  <a href="#">SHOW MORE</a>
</div>
</div>
  <div class="clearfix"></div>
<div class="portfolio-video"> 
	  <div class="portfolio-video-grids">
		  <div class="col-md-6 video">
				<iframe src="//player.vimeo.com/video/47491719"></iframe>
				<p><a href="http://vimeo.com/8245963"></a>
		  </div>
		  <div class="col-md-6 portfolio-video-head">
				<h3 class="titles" style="color:white;">HPVC</h3>
				<!--<h4><i>Quisque velit nisi, pretium ut lacinia in,
				elementum id enim.</i></h4>-->
				<p>Held in 5 select locations across the globe, the Human Powered Vehicle Challenge is a coming together of some of the world’s best student minds to build vehicles that could someday go on to become symbols of change in the fight against global warming. The 4th edition of the HPVC India promises to be bigger and better than ever with students forced to come up innovations in order to give them that slight edge in the quest to be the best in India.  </p>
				<div class="portfolio-Get-started">
					<a href="#">READ MORE..</a>
				</div>
		  </div>
		  <div class="clearfix"></div>
	  </div>
  </div>
 <div class="portfolio-video"> 
	  <div class="portfolio-video-grids">
	  <div class="col-md-1"> </div>
		  <div class="col-md-4 portfolio-video-head">
				<h3 style="color:white;">SPDC</h3>
				
				<p>SPDC or Student Professional Development Conference is a forum for the exchange of ideas between students and faculties alike .With workshops, guest lectures , conferences  and a national level competition to look forward too ,SPDC 2016 promises to be quite a treat for the more technical oriented brains in the country. </p>
				<div class="portfolio-Get-started">
					<a href="#">READ MORE..</a>
				</div>
		  </div>
		  <div class="col-md-6 video">
				<iframe src="//player.vimeo.com/video/47491719"></iframe>
				<p><a href="http://vimeo.com/8245963"></a>
		  </div>
		  <div class="clearfix"></div>
	  </div>
  </div>
</div>
<!--portfolio-->
<!--MOLLY-->
<div class="molly" id="asme">
<h3>GALLERY</h3><br><br>
<!--<p><i>Yes Mentum is fully responsive,and look's great on any device.</i></p>
<div class="molly-Get-started">
  <a href="#">GET STARTED</a>
</div>-->
<div class="clearfix"></div>
<section id="dg-container" class="dg-container">
   <div class="dg-wrapper">
					<a href="#"><img src="Images/1.jpg" alt="image1" /></a>
					<a href="#"><img src="Images/2.jpg" alt="image2" /></a>
					<a href="#"><img src="Images/3.jpg" alt="image3" /></a>
					<a href="#"><img src="Images/4.jpg" alt="image4" /></a>
					<a href="#"><img src="Images/5.jpg" alt="image5" /></a>
					<a href="#"><img src="Images/6.jpg" alt="image1" /></a>
					<a href="#"><img src="Images/7.jpg" alt="image1" /></a>
					<a href="#"><img src="Images/8.jpg" alt="image2" /></a>
					<a href="#"><img src="Images/9.jpg" alt="image3" /></a>
					<a href="#"><img src="Images/10.jpg" alt="image4" /></a>
					<a href="#"><img src="Images/11.jpg" alt="image5" /></a>
					<a href="#"><img src="Images/12.jpg" alt="image1" /></a>
	</div>
</section>
 </div>
<!--MOLLY ends-->

<!--ABOUT-->
 <div id="about" class="about">
	 <h2>ABOUT US</h2>
	 <img src="Images/service.png" alt=""/>
	 <!--<p>The American Society of Mechanical Engineers</p>-->
	 <div class="about-grids">
		 <div class="col-md-4 left-img">
		 <img src="Images/company.jpg" class="img-responsive" alt=""/>
		 </div>
		 <div class="col-md-4 middle">
			 <!--<a href="#"><h3>John Doe</h3></a>
			 <h5>CREATIVE DIRECTOR</h5>-->
			 <h6>THE AMERICAN SOCIETY OF MECHANICAL ENGINEERS is a professional association that promotes the art, science & practice of multidisciplinary engineering & allied sciences around the globe via continuing education, training and professional development, codes and standards, research, conferences and publications, government relations, and other forms of outreach.</h6>
				<h6>One of the ways in which we do this at VIT is through MECHNOVATE which is an annual international symposium where students come to expand the horizons of their technical knowledge.The myriad range of topics on which events, workshops and fruitful discussions are held is truly mind boggling. Students benefit from these interactions in their own respective fields while pushing them in a direction of hard sciences and advanced engineering.</h6>
			  <!--<div class="social-icons">
				 <a href="#"><span class="icon1"> </span></a>
				 <a href="#"><span class="icon2"> </span></a>
				 <a href="#"><span class="icon3"> </span></a>
			 </div>-->
		 </div>
		 <div class="col-md-4 right-img">
		 <img src="Images/head.jpg" class="img-responsive" alt=""/>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---ABOUT ends-->
<!--AD-->
<div class="ad">
	 <div class="container">
		 <div class="ad-grids">
			 <div class="col-md-6 skill-grid">
				 <h4 style="color:#3C948B">SKILLS</h4>
				 <div class="skill-head">
					  <p>Electrical</p>
					  <span><lable1></lable1></span>
					  <p>Technical</p>
					  <span><lable></lable></span>
					  <p>Design</p>
					  <span><lable></lable></span>
					  <p>Management</p>
					  <span><lable></lable></span>
				 </div>
			 </div>
		 
			 <div class="col-md-6 skill-about">
				  <h4 style="color:#3C948B">ABOUT VIT</h4>
				 <h6>VIT University was established with the aim of providing quality higher education on par with international standards. It persistently seeks and adopts innovative methods to improve the quality of higher education on a consistent basis. The campus has a cosmopolitan atmosphere with students from all corners of the globe. Experienced and learned teachers are strongly encouraged to nurture the students. The global standards set at VIT in the field of teaching and research spur us on in our relentless pursuit of excellence. In fact, it has become a way of life for us. The highly motivated youngsters on the campus are a constant source of pride. Our Memoranda of Understanding with various international universities are our major strength. They provide for an exchange of students and faculty and encourage joint research projects for the mutual benefit of these universities. Many of our students, who pursue their research projects in foreign universities, bring high quality to their work and esteem to India and have done us proud. With steady steps, we continue our march forward. We look forward to meeting you here at VIT.</h6>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--AD ends-->
<!--BLOG-->
<!--<div id="blog" class="blog">
	 <h2>BLOG</h2>
	 <img src="Images/service.png" alt=""/>
	 <p>Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus 
		 convallis quis ac lectus. Quisque velit nisi,pretium ut lacinia in, elementum id enim.</p>

	 <div class="blog-grids">
		 <div class="container">
			 <div class="col-md-6 blog-left">
				 <img src="Images/h1blog.jpg" class="img-responsive" alt=""/>
				 <div class="blog-img-info">
					 <h3><a href="#">Sample Blog Title</a></h3>
					 <span>November. 2013 by  <a href="#"> John Doe</a></span>
					 <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta 
					 dapibus. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.</p>
					 <div class="blog-readmore">
					 <a href="#">READ MORE..</a>
					 </div>
					 <div class="clearfix"></div>
				 </div>
			 </div>
				
			 <div class="col-md-6 blog-right">
				 <img src="Images/h1blog2.jpg" class="img-responsive" alt=""/>
				 <div class="blog-img-info">
					 <h3><a href="#">Sample Blog Title</a></h3>
					 <span>November. 2013 by <a href="#">  John Doe</a></span>
					 <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta 
					 dapibus. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.</p>
					 <div class="blog-readmore">
					 <a href="#">READ MORE..</a>
					 </div>
					 <div class="clearfix"></div>
				 </div>
			 </div> 
			 <div class="clearfix"></div>
		 </div>
	 </div>

	 <div class="blog-grids-bottom">
		 <div class="container">
			 <div class="col-md-4 blog-bottom-left">
				 <img src="Images/blog1.jpg" class="img-responsive" alt=""/>
				 <div class="blog-img-info">
					 <h3><a href="#">Sample Blog Title</a></h3>
					 <span>November. 2013 by <a href="#">  John Doe</a></span>
					 <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta 
					 dapibus. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.</p>
					 <div class="blog-readmore">
					 <a href="#">READ MORE..</a>
					 </div>
					 <div class="clearfix"></div>
				 </div>
			 </div>	
			 <div class="col-md-4 blog-bottom-middle">
				 <img src="Images/blog2.jpg" class="img-responsive" alt=""/>
				 <div class="blog-img-info">
					 <h3><a href="#">Sample Blog Title</a></h3>
					 <span>November. 2013 by <a href="#">   John Doe</a></span>
					 <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta 
					 dapibus. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.</p>
					 <div class="blog-readmore">
					 <a href="#">READ MORE..</a>
					 </div>
					 <div class="clearfix"></div>
				 </div>
			 </div> 
			 <div class="col-md-4 blog-bottom-right">
				 <img src="Images/blog3.jpg" class="img-responsive" alt=""/>
				 <div class="blog-img-info">
					 <h3><a href="#">Sample Blog Title</a></h3>
					 <span>November. 2013 by <a href="#">  John Doe</a></span>
					 <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta 
					 dapibus. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.</p>
					 <div class="blog-readmore">
					 <a href="#">READ MORE..</a>
					 </div>
					 <div class="clearfix"></div>
				 </div>
			 </div> 
			 <div class="clearfix"></div>
	     </div>
	  </div>
	    <div class="blog-show-more">
	    <a href="#">SHOW MORE</a>
	    </div>
</div>-->
<!--BLOG Ends-->

<!--SUBSCRIBE-->
<!--<div class="subscribe">
	 <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
	 <form action="news.php" method="POST">
		 <input type="text" class="text" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'You mail';}">
		 <input type="submit" value="SUBSCRIBE">
	 </form>
</div>-->
<!--SUBSCRIBE Ends-->
<!--CONTACT-->

<!--CONTACT Ends-->
<!--FOOTER-->
<div class="footer">
	 <div class="container">
		<div class="footer-head">
		<div class="footfm col-md-5">
			<form name="form1" action="query_mech.php" method="post">
								<input type="text" name="name" class="text" placeholder="Your Name" required>
								<input type="text" name="email" class="text" placeholder="e-mail" required>
								<input type="text" name="subject" class="text" placeholder="The Subject" required>
								 <textarea name="message" onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Your Message</textarea>
								<input type="submit" class="button" value="Submit" onclick="myFunction()">
							</form>
		</div>
		<div class="col-md-7">
		<h5>Write to us at: <a href="mailto:name@example.com" style="color:#3C948B">support@mechnovate.org</a></h5>
		 <h5> (or) </h5>
		 <h6>Rishi Mehadia : +91-9629768627</h6>
		 <h6>Yash Dubey : +91-9943127520</h6>
		 <h6>Karan Desai : +91-9597592535</h6>
		 <div class="footer-social-icons">
			 <a href="https://www.facebook.com/ASMEHPVC?__mref=message_bubble"><span class="facebook"> </span></a>
			 <a href="https://twitter.com/asmehpvc"><span class="twitter"> </span></a>
			<!-- <a href="#"><span class="googleplus"> </span></a>
			 <a href="#"><span class="wifi"> </span></a>
			 <a href="#"><span class="tribble"> </span></a>
			 <a href="#"><span class="flicker"> </span></a>
			 <a href="#"><span class="skype"> </span></a>-->
		 </div>
			<p><strong>WEB TEAM :</strong><br><a href="https://www.facebook.com/gupta.himanshu19" target="_blank" style="color:#3C948B">Himanshu Gupta</a> <br><a href="https://www.facebook.com/nimeshkhandelwa" target="_blank" style="color:#3C948B">Nimesh Khandelwal</a> <br><a href="https://www.facebook.com/saksham.jain.12" target="_blank" style="color:#3C948B">Saksham Jain</a><br><a href="https://www.facebook.com/devmukul44" target="_blank" style="color:#3C948B">Mukul Dev </a></p>
		 </div>
	 </div>
	 </div>
</div>
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
function myFunction() {
    alert("Form is submitted!");
}
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1; "> </span></a>

</body>
</html>