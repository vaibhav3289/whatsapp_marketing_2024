<?php 
include "phpfiles/connect.php";
?>


<!DOCTYPE html>
<html>

<!-- Mirrored from app.gctsoft.in/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Feb 2024 05:01:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
    <meta name="keywords" content="social network, marketing, brands, businesses, agencies, individuals" />
    <meta name="description" content="Let start to manage your social media so that you have more time for your business." />
    <meta name="author" content="stackposts.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WhatsApp Marketing</title>
    <link rel="shortcut icon" href="writable/uploads/1687755209_e5ad6c15e12972860814.png" />
	<link rel="stylesheet" type="text/css" href="inc/themes/backend/Stackmin/Assets/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="inc/themes/backend/Stackmin/Assets/fonts/flags/flag-icon.css" />
	<link rel="stylesheet" type="text/css" href="inc/themes/frontend/Stacklight/Assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="inc/themes/frontend/Stacklight/Assets/plugins/limarquee/limarquee.css">
	<link rel="stylesheet" type="text/css" href="inc/themes/frontend/Stacklight/Assets/plugins/pagination/pagination.min.css">
	<link rel="stylesheet" type="text/css" href="inc/themes/frontend/Stacklight/Assets/css/icomoon/icomoon.css">
	<link rel="stylesheet" type="text/css" href="inc/themes/frontend/Stacklight/Assets/plugins/aos/aos.css">
	<link rel="stylesheet" type="text/css" href="inc/themes/frontend/Stacklight/Assets/css/style.css">
	<script type="text/javascript">
        var PATH  = 'index.php';
        var csrf = "b3f426d6f5032340f02c8921a8c40fb4";
    </script>
</head>
<body>

	<div class=" header">
		
		<div class="container">

			<nav class="navbar navbar-expand-lg navbar-light px-0 py-3">
				<div class="logo me-4">
					<a  href="index.php"><img class="img-fluid logo" src="writable/uploads/1687755209_e5ad6c15e12972860814.png" alt="logo"></a>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php#feature">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php#faqs">FAQs</a>
						</li>
						</ul>              	
		              	<div class="d-flex align-items-stretch me-2 px-3">
		                  <div class="d-flex align-items-center">
		                      	<div class="dropdown dropdown-hide-arrow" data-dropdown-spacing="40">
		                          	<a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    									<i class="flag-icon flag-icon-in"></i> <span class="d-xs-inline-block d-sm-inline-block d-md-none d-inline-block">English</span>
								  	</a>
								  	<ul class="dropdown-menu mh-200 overflow-auto">
		<li><a class="dropdown-item py-2 actionItem" href="649405423e60c.php" data-redirect=""><i class="flag-icon flag-icon-in"></i> English</a></li>
		</ul>
		</div>
		</div>
		</div>
	    <div class="nav-btn-login me-3 py-3">
		<a href="signup.php" class="btn btn-outline-dark me-3">Sign Up</a>
		<a href="login.php" class="btn  btn-primary">Log In</a>
		</div>
		</div>
	    </nav>
		</div>
	    </div>

    <div class="login container m-b-100 border-top">
		
	<div class="mw-1000 shadow mx-auto b-r-20">
		<form action="phpfiles/login_check.php" method="post">
<input type="hidden" name="type" class="form-control h-45 b-r-6 border-gray-200" value="A">

			<div class="row no-gutters">
	
				<div class="col-md-6 justify-content-center align-items-center">
					<div class="d-flex justify-content-center align-items-center h-100">
						<div class="p-50 w-100">
							<div class="headline mb-4">
											      <?php 
if(isset($_SESSION['success']) && $_SESSION['success']!="")
{
?>
      <div class="alert alert-success"> <strong>Success! </strong>
        <button class="close" data-dismiss="alert">×</button>
        <?php print $_SESSION['success']; ?></div>
      <?php
}
if(isset($_SESSION['error']) && $_SESSION['error']!="")
{?>
      <div class="alert alert-danger">
        <button class="close" data-dismiss="alert">×</button>
        <strong>Error! </strong> <?php print $_SESSION['error']; ?></div>
      <?php 
}
if(isset($_SESSION['err_token']) && $_SESSION['err_token']!="")
{
?>
      <div class="alert alert-danger">
        <button class="close" data-dismiss="alert">×</button>
        <strong>Error! </strong> <?php print $_SESSION['err_token']; ?></div>
      
      <?php }
unset($_SESSION['success']);
unset($_SESSION['error']); 
unset($_SESSION['err_token']); 
?>
								<h2 class="fs-25 fw-6 mb-0">Login</h2>
								<div class="text-gray-600">Sign In To Your Account</div>
							</div>

							<div class="mb-3">
								<input type="text" name="username" class="form-control h-45 b-r-6 border-gray-200" value="" placeholder="Enter your username or email">
							</div>

							<div class="mb-3">
								<input type="password" name="password" class="form-control h-45 b-r-6 border-gray-200" value="" placeholder="Enter your Password">
							</div>

							<div class="mb-3">
								<div class="d-flex justify-content-between">
									<div class="form-check">
									  	<input class="form-check-input m-t-5" name="remeber" type="checkbox" value="" id="remember">
									  	<label class="form-check-label" for="remember">
									    	Remember me									  	</label>
									</div>
									<div>
										<a href="forgot_password.php">Forgot password?</a>
									</div>
								</div>
							</div>

							
							<div class="show-message mb-2"></div>

							<div class="mb-3">
							<button type="submit" class="btn mb-2 btn-dark w-100 mb-md-3 fw-6 text-uppercase fs-16">
							Login
							</button>
							</div>
                            <div class="mb-3 text-right">
								Don't have an account? <a href="signup.php">Sign Up</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-6 ">
					<div class="bg-primary h-100 mih-600 bg-login-page d-flex justify-content-center align-items-center text-white text-center">
    <div class="p-50">
        <h1 class="fs-25 mb-4">Fast, Efficient And Productive</h1>
        <div class="fs-16">Manage your brands or viral business on social networks such as Facebook, Instagram, Twitter, and more.</div>
    </div>
</div>				</div>

			</div>
		</form>
	</div>
</div>	
    
	<div class="scroll-top">
		<a class="icon w-55 h-55 text-primary position-relative d-flex justify-content-center align-items-center" href="#home">
			<div class="hover position-absolute w-100 h-100 border-primary b-r-60 rotating"></div>
			<i class="fal fa-chevron-up moveup text-primary fs-30"></i>
		</a>
	</div>

	<!--JS-->
	<script type="text/javascript" src="inc/themes/frontend/Stacklight/Assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="inc/themes/frontend/Stacklight/Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="inc/themes/frontend/Stacklight/Assets/plugins/limarquee/limarquee.js"></script>
	<script type="text/javascript" src="inc/themes/frontend/Stacklight/Assets/plugins/ihavecookies/jquery.ihavecookies.js"></script>
	<script type="text/javascript" src="inc/themes/frontend/Stacklight/Assets/plugins/pagination/pagination.min.js"></script>
	<script type="text/javascript" src="inc/themes/frontend/Stacklight/Assets/plugins/aos/aos.js"></script>
	<script type="text/javascript" src="inc/themes/frontend/Stacklight/Assets/js/core.js"></script>

	    <script type="text/javascript">
        $(function(){
            $('body').ihavecookies({
                title:"Cookies & Privacy",
                message:"We use cookies to ensure that we give you the best experience on our website. By clicking Accept or continuing to use our site, you consent to our use of cookies and our privacy policy. For more information, please read our privacy policy.",
                acceptBtnLabel:"Accept cookies",
                advancedBtnLabel:"Customize cookies",
                moreInfoLabel: "More information",
                cookieTypesTitle: "Select cookies to accept",
                fixedCookieTypeLabel: "Necessary",
                fixedCookieTypeDesc: "These are cookies that are essential for the website to work correctly.",
                link: 'https://app.gctsoft.in/privacy_policy',
                expires: 30,
                cookieTypes: [
                {
                    type: 'Site Preferences',
                    value: 'preferences',
                    description: 'These are cookies that are related to your site preferences, e.g. remembering your username, site colours, etc.'
                },
                {
                    type: 'Analytics',
                    value: 'analytics',
                    description: 'Cookies related to site visits, browser types, etc.'
                },
                {
                    type: 'Marketing',
                    value: 'marketing',
                    description: 'Cookies related to marketing, e.g. newsletters, social media, etc'
                }
            ],
            });
        });
    </script>
    </body>

<!-- Mirrored from app.gctsoft.in/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Feb 2024 05:01:46 GMT -->
</html>