<!DOCTYPE html>
<?php
session_start();
ob_start();
?>
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="em") {
        echo '<script>
            alert("email or password do not exists!");
        </script>';
    }
}
?>
<html>	
<head>
<title>LOGIN | Mechnovate</title>

<!--/web-fonts-->

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="logincss/stylem.css" rel="stylesheet" type="text/css" media="all" />

    <!------ Eng Light Box ------>	
<meta charset="utf-8" />
		<meta name="language" content="en-us"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="description" content="STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE(SPDC)-India 2016-The American Society of Mechanical Engineers(ASME)-VIT university,vellore WEBSITE. DEVELOPED BY- MUKUL DEV(DEVMUKUL44@GMAIL.COM),HIANSHU GUPTA(HIMANSHU199565@GMAIL.COM). " />
		<meta name="keywords" content="SPDC 2016,ASME 2016,SPDC,ASME,STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE,SPDC VIT,VIT university VELLORE,VIT VELLORE,MUKUL DEV,HIMANSHU GUPTA,DEVMUKUL44@GMAIL.COM,MUKUL.DEV@OUTLOOK.COM,mukul.dev2013@vit.ac.in,HIMANSHU199565@GMAIL.COM,MUKUL DEV VIT,MUKUL DEV VIT VELLORE,DEVMUKUL44,HIMANSHU GUPTA VIT, Web Designing" />
		<meta name="distribution" content="Global" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="1 days"/>
		<meta name="publisher" content="ASME INDIA, VIT VELLORE, MUKUL DEV , HIMANSHU GUPTA" />
		<meta name="copyright" content="ASME INDIA 2016"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="" />
<link href="logincss/style.css" rel='stylesheet' type='text/css' />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<script>
function validate()
{
if(document.form1.email.value == "Email")
{
alert( "enter valid Email address!");
document.form1.email.focus() ;
return false;
}
else if(document.form1.pass.value == "Password")
{
alert("enter password!");
document.form1.pass.focus() ;
return false;
}
}
</script>
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
	<nav class="topheader navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#" id="brand" style='padding-right:20px;font-size:1.5em;'>Mechnovate</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left" id="tabs">
        <li><a href="index.php" class="scroll"  style='padding-left:40px;'>Home</a></li>
						<li><a href="#">Convention</a></li>
						<li><a href="index.php/#services">Sponsors</a></li>
						<li><a href="index.php/#portfolio">Events</a></li>
						<li><a href="index.php/#portfolio">Workshops</a></li>
						<li><a href="index.php/#about">About US</a></li>
						<li><a href="signupmech.php">Register</a></li>
						<li><a href="index.php/#asme">Gallery</a></li>
						<li><a href="index.php/" class="scroll">Contact Us</a></li>
		
      </ul>
    </div>
    <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>

 			<div class="clearfix"></div>
  </div>
</nav>

    <!-- header-section-ends --> 
	
<!--User-Login-->
<h1>User Login</h1>
<div class="avtar">
	<img src="loginimages/avtar.png" />
</div>
	<div class="login-form">
		<p>New user?<a href="signupmech.php">Register here!</a></p>
			<form name="form1" action="login_php.php" method="post">
				<div class="form-text">
					<input type="text" name="email" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					<input type="password" name="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				</div>
					<input type="submit" value="GO" onclick="return validate();">
			</form>
	</div>
	<br><br><br><br><br><br><br>
<!--/User-Login-->
	<!-- footer-section-starts -->
	<div>

			<div class="col-md-12 copy-rights">
				<p>Copyright & copy; 2015  <a href="#">ASME INDIA
				</a></p>
				<p>
				Developed By: <a href="https://www.facebook.com/devmukul44" target="_blank">Mukul Dev</a> , <a href="https://www.facebook.com/gupta.himanshu19" target="_blank">Himanshu Gupta,<a href="https://www.facebook.com/nimeshkhandelwa" target="_blank">Nimesh Khandelwal</a>,<a href="https://www.facebook.com/saksham.jain.12" target="_blank">Saksham Jain</a>
				</p>
			</div>
	</div>
	<!-- footer-section-ends -->

</body>
</html>