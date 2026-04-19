<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>GLucoDS | Login or Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="/static/css/font-awesome.min3.css" rel="stylesheet" type="text/css" media="all">
<link href="/static/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="/static/css/login3.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
	<h1> <a href="index.php" >Home</a> | Login or Register</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>GlucoDS Login</h2>
			<form action="loginauthentication.php" method="post">
				<div class="form-sub-w3">
					<input type="text" name="username" placeholder="Username " required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input type="password" name="password" placeholder="Password" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>
				<p class="p-bottom-w3ls">New User?<a class="w3_play_icon1" href="#small-dialog1">  Register here</a></p>
				
				<div class="submit-w3l">
					<input type="submit" value="Login" name="btnlogin">
				</div>
			</form>
		</div>
<!--//form-ends-here-->
</div>
<div id="small-dialog1" class="mfp-hide">
					<div class="contact-form1">
										<div class="contact-w3-agileits">
										<h3>Registeration Form</h3>
											<form action="regauthentication2.php" method="post">
												<div class="form-sub-w3ls">
													<input placeholder="Firstname"  type="text" required="" name="firstname">
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												
												<div class="form-sub-w3ls">
													<input placeholder="Lastname"  type="text" required="" name="lastname">
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												
												<div class="form-sub-w3ls">
													<input placeholder="Password"  type="password" required="" name="password">
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
												
												<div class="form-sub-w3ls">
													<input placeholder="Confirm Password"  type="password" required="" name="password">
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
												
												<div class="form-sub-w3ls">
													<input placeholder="Number"  type="number" required="" name="number">
													<div class="icon-agile">
														<i class="" aria-hidden="true"></i>
													</div>
												</div>
												
												<div class="form-sub-w3ls">
													<input placeholder="Email" class="mail" type="email" required="" name="email">
													<div class="icon-agile">
														<i class="fa fa-envelope-o" aria-hidden="true"></i>
													</div>
												</div>
												
											</div>
											<div class="login-check">
								 			 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><p>I Accept Terms & Conditions</p></label>
											</div>
										<div class="submit-w3l">
											<input type="submit" value="Register" name="btnreg">
										</div>
										</form>
					</div>	
				</div>
<!-- copyright -->
	<!--
	<div class="copyright w3-agile">
		<p> © 2017 Credit Login / Register Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	</div>
	<!-- //copyright -->
	-->
	<script type="/static/text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- pop-up-box -->  
		<script src="/static/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
</body>
</html>