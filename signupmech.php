<!DOCTYPE html>
<?php
session_start();
ob_start();
?>
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="em") {
        echo '<script>
            alert("email already exists! try with different email or LOGIN");
        </script>';
    }
}
?>
<html>	
<head>
<title>SIGNUP | Mechnovate</title>

<link href="logincss/stylem.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->

    <!------ Eng Light Box ------>	
	<meta charset="utf-8" />
		<meta name="language" content="en-us"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="description" content="Mechnovate-India 2016-The American Society of Mechanical Engineers(ASME)-VIT university,vellore WEBSITE. DEVELOPED BY- MUKUL DEV(DEVMUKUL44@GMAIL.COM),HIANSHU GUPTA(HIMANSHU199565@GMAIL.COM). " />
		<meta name="keywords" content="Mechnovate 2016,ASME 2016,Mechnovate,ASME,STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE,Mechnovate VIT,VIT university VELLORE,VIT VELLORE,MUKUL DEV,HIMANSHU GUPTA,DEVMUKUL44@GMAIL.COM,MUKUL.DEV@OUTLOOK.COM,mukul.dev2013@vit.ac.in,HIMANSHU199565@GMAIL.COM,MUKUL DEV VIT,MUKUL DEV VIT VELLORE,DEVMUKUL44,HIMANSHU GUPTA VIT, Web Designing",NIMESH KHANDELWAL,SAKSHAM JAIN,nimeshkhandelwa@gmail.com,NIMESH KHANDELWAL VIT VELLORE,SAKSHAM JAIN VIT VELLORE,nimesh.khandelwal2014@vit.ac.in,saksham.jain2014@vit.ac.in />
		<meta name="distribution" content="Global" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="1 days"/>
		<meta name="publisher" content="ASME INDIA, VIT VELLORE, MUKUL DEV , HIMANSHU GUPTA" />
		<meta name="copyright" content="ASME INDIA 2016"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="" />
<link href="logincss/signup.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<style>
.navbar {
    min-height: 80px;
   background-color:#fffffff;
}
#brand_name {
	font-size:2em;
	float:left;
	color:#ffffff;
	padding:20px 0 0 30px;
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
#return a
{
	color:white;
}
#return a:visited
{
	color:white;
}
</style>
<script>
function validate()
{
if(document.form1.pass.value == document.form1.cpass.value)
{
return true;
}
else
{
alert("password dosenot match!");
return false;
}
}
</script>
<script>
function validate1()
{
if(document.form1.gender.value == "1")
{
alert( "Select Gender");
return false;
}
else if(document.form1.shirt.value == "1")
{
alert("enter password!");
return false;
}
}
</script>
</head>
<body>
<div class="container">
	<!-- header-section-starts -->
	<div class="header">
		<div class="top-header navbar-fixed-top">
			<div class="container">
				<div id="brand_name">
					<a href="index.php" style="color:white;">Mechnovate</a>			
				</div>
				<div class="top-menu">
				  <span class="menu"> </span>
					<ul>
						<li><a href="/#home" class="scroll">Home</a></li>
						<li><a href="#">Convention</a></li>
						<li><a href="/#services">Sponsors</a></li>
						<li><a href="/#portfolio">Events</a></li>
						<li><a href="/#portfolio">Workshops</a></li>
						<li><a href="/#about">About US</a></li>
						<li><a href="/#asme">Gallery</a></li>
						<li><a href="/" class="scroll">Contact Us</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>

<!-- 			<div class="clearfix"></div>
-->			</div>
		</div>

    <!-- header-section-ends --> 
</div>


	<div class="login-form">
	<h2> Register | Mechnovate </h2>
			<div class="form-info">
					<form action="signupmech_php.php" method="post" name="form1" onsubmit="return validate();return validate1();">
							<input type="text" name="fname" class="email" placeholder="First Name" required=""/>
							<input type="text" name="lname" class="email" placeholder="Last Name" required=""/>
							<input type="email" name="email" class="email" placeholder="Email Address" required=""/>
							<input type="text" name="phone" class="email" placeholder="Phone Number" required=""/>
							
							<select class="form-control" name="gender" id="InputName" required>
							<option value="1"> -- Gender -- </option>
							<option value="m"> Male </option>
							<option value="f"> Female </option>
							</select>
							<br><br>
							
							<input type="text" name="cname" class="email" placeholder="College Name" required=""/>
							
							<select class="form-control" name="shirt" id="InputName" required>
							<option value="1"> -- T_Shirt Size -- </option>
							<option value="S"> S </option>
							<option value="M"> M </option>
							<option value="L"> L </option>
							<option value="XL"> XL </option>
							<option value="XXL"> XXL </option>
							</select>
							<br><br>
							<input type="password" name="pass" class="password" placeholder="Password" required=""/>
							<br><br>
							<input type="password" name="cpass" class="password" placeholder="Confirm Password" required=""/>
						<ul class="login-buttons">
							<li style="width:105%;"><input type="submit" value="REGISTER"></li>
							<div class="clear"> </div>
						</ul>
					</form>
			</div>
			<span id="return"><a href="/">Return to home</a></span>
	</div>
<!--copyrights-->
<!--/copyrights-->
	<!--FOOTER-->
<div class="footer">
	 <div class="container">
		<div class="footer-head row">
			<div class="col-md-6">
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
			 </div>
			 <div class="col-md-4 col-md-offset-1">
				<p><strong>WEB TEAM :</strong><br><a href="https://www.facebook.com/gupta.himanshu19" target="_blank" style="color:#3C948B">Himanshu Gupta</a> <br><a href="https://www.facebook.com/nimeshkhandelwa" target="_blank" style="color:#3C948B">Nimesh Khandelwal</a> <br><a href="https://www.facebook.com/saksham.jain.12" target="_blank" style="color:#3C948B">Saksham Jain</a><br><a href="https://www.facebook.com/devmukul44" target="_blank" style="color:#3C948B">Mukul Dev </a></p>
			</div>
		 </div>
	 </div>
</div>
</body>
</html>