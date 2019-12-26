<?php


$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Responsive Html5 Templates">
    
	
    <title>Don't Starve | Free Bootstrap Chocolate Templates</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="sub-page">
<div class="wrap-body">
	<div class="main-bg"></div>
	<div class="nk-page-border">
		<div class="nk-page-border-t"></div>
		<div class="nk-page-border-r"></div>
		<div class="nk-page-border-b"></div>
		<div class="nk-page-border-l"></div>
	</div>
	<div class="container">
		<div class="content-boder">
			<header>
				
				<!--Navigation-->
				<nav id="menu" class="navbar">
					<div class="container">
						<div class="navbar-header"><span id="heading" class="visible-xs">Categories</span>
						  <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
							<a class="navbar-brand" href="#">
								<img src="images/logo.png" width="250px"/>
							</a>
						</div>
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li><a href="index.html">Home</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="archive.html">Blog</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</nav>
				
				<!-- Static Header -->
				<div class="header-text">
					<div class="col-md-12 text-center">
						<span>Give Us A Call Or Drop Us A Line</span>
						<h1>Get In Touch</h1>
					</div>
				</div><!-- /header-text -->
				
			</header>
			<!-- /Section: intro -->
			
			<!-- /////////////////////////////////////////Content -->
			<div id="page-content">
				
				<!-----------------Content-------------------->
				<section class="box-content">
					<!--Start Map-->
					<div id="map" style="height: 450px;"></div>
					<!--End Map-->
					<div class="col-md-4">
						<h3>Contact Info</h3>
						<span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</span><br> <br>
						<p>JL.Kemacetan timur no.23. block.Q3<br>
							Jakarta-Indonesia</p>
						   <p>+6221 888 888 90 <br>
							+6221 888 88891</p>
						<p>info@yourdomain.com</p>
					</div>
					<div class="col-md-8">
						<h3>Contact Form</h3>
						<!--Warning-->
						<center><?php echo $text;?></center>
						<!---->
						<form name="form1" method="post" action="contact.php">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required" placeholder="Message" style="height: 170px;"></textarea>
									</div>						
									<button type="submit" class="btn btn-skin btn-block" name="submitcontact" id="submitcontact">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</section>
			</div>
				
			<footer id="footer">
				<div class="bottom-footer">
					<div class="row">
						<div class="col-md-4">
							<p>Copyright 20xx - Designed by Zerotheme - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
						</div>
						<div class="col-md-4">
							<ul class="list-inline social-links">
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul class="list-inline quick-links">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms of Use</a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer -->
		</div>
	</div>
</div>	

	<!-- jQuery Core Javascript -->
	<script src="js/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	
	
	
	
</body>
</html>