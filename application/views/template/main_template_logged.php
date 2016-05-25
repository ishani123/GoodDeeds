
<!doctype html>
<html lang="en">

<!-- Mirrored from sainathchillapuram.com/BS/ss/electro-shoppe/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Apr 2016 06:26:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Electro Shoppe Stores - Bootstrap 3 Template</title>
        
        <link href="<?php echo base_url();?>application_resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>application_resources/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>application_resources/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>application_resources/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url();?>application_resources/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>application_resources/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url();?>application_resources/css/responsive.css" rel="stylesheet">
        
	
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url();?>application_resources/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Google Web Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400" rel="stylesheet" type="text/css">
	
	<!-- CSS Files -->
	<link href="<?php echo base_url();?>application_resources/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>application_resources/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo base_url();?>application_resources/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>application_resources/css/responsive.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
		<script src="js/ie8-responsive-file-warning.js"></script>
	<![endif]-->
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fav-144.html">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fav-114.html">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fav-72.html">
	<link rel="apple-touch-icon-precomposed" href="images/fav-57.html">
	<link rel="shortcut icon" href="images/fav.html">
	
</head>
<body>
<!-- Header Section Starts -->
	<header id="header-area">
	<!-- Header Top Starts -->
		<div class="header-top">
			<div class="container">
				<div class="row">
				<!-- Header Links Starts -->
					<div class="col-sm-8 col-xs-12">
						<div class="header-links">
							<ul class="nav navbar-nav pull-left">
								<li>
                                                                    <a href="<?php echo site_url();?>/login_user/logged_in_home">
										<i class="fa fa-home hidden-lg hidden-md" title="Home"></i>
										<span class="hidden-sm hidden-xs">
											Home
										</span>
									</a>
								</li>
								<li>
									<a href="#">	
										<i class="fa fa-heart hidden-lg hidden-md" title="Wish List"></i>
										<span class="hidden-sm hidden-xs">
											Wish List(0)
										</span>
									</a>
								</li>
								<li>
									<a href="<?php echo site_url();?>/post_ad/loadTree">
										<i class="fa fa-user hidden-lg hidden-md" title="My Account"></i>
										<span class="hidden-sm hidden-xs">
											My Account
										</span>
									</a>
								</li>
								<li>
									<a href="cart.html">
										<i class="fa fa-shopping-cart hidden-lg hidden-md" title="Shopping Cart"></i>
										<span class="hidden-sm hidden-xs">
											Shopping Cart
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-crosshairs hidden-lg hidden-md" title="Checkout"></i>
										<span class="hidden-sm hidden-xs">
											Checkout
										</span>
									</a>
								</li>
								
							</ul>
						</div>
					</div>
				<!-- Header Links Ends -->
				<!-- login & register Starts -->
					<div class="col-sm-4 col-xs-12 header-links">
						<div class="pull-right">
						<!-- register Starts -->
							
                                                            <ul class="nav navbar-nav">
                                                                <li>
									<a href="<?php echo site_url()?>">
										<i class="fa fa-lock hidden-lg hidden-md" title="User"></i>
										<span class="hidden-sm hidden-xs">
											<?php echo $this->session->userdata('name')?>
										</span>
									</a>
								</li>
                                                            </ul>
                                                        
						<!-- register Ends -->
						<!-- login Starts -->
							<ul class="nav navbar-nav">
                                                                <li>
									<a href="<?php echo site_url()?>/login_user/logout">
										<i class="fa fa-lock hidden-lg hidden-md" title="Login"></i>
										<span class="hidden-sm hidden-xs">
											Logout
										</span>
									</a>
								</li>
                                                            </ul>
						<!-- login Ends -->
						</div>
					</div>
				<!-- login & register Ends -->
				</div>
			</div>
		</div>
	<!-- Header Top Ends -->
	<!-- Main Header Starts -->
		<div class="main-header">
			<div class="container">
				<div class="row">
				
				<!-- Logo Starts -->
					<div class="span12 pagination-centered">
						<div id="logo" >
							<a href="<?php echo site_url();?>/login_user/logged_in_home"><img src="<?php echo base_url();?>application_resources/images/logo.png" title="Spice Shoppe" alt="Spice Shoppe" class="img-responsive" /></a>
						</div>
					</div>
				<!-- Logo Starts -->				
				
				</div>
			</div>
		</div>
	<!-- Main Header Ends -->
	<!-- Main Menu Starts -->
		<nav id="main-menu" class="navbar" role="navigation">
			<div class="container">
			<!-- Nav Header Starts -->
				<div class="navbar-header">
					<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-bars"></i>
					</button>
				</div>
			<!-- Nav Header Ends -->
			<!-- Navbar Cat collapse Starts -->
				<div class="collapse navbar-collapse navbar-cat-collapse">
					<ul class="nav navbar-nav">
						<li><a href="category-list.html">Digital Cameras</a></li>
						<li class="dropdown">
							<a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
								Sound Devices
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a tabindex="-1" href="#">Music System</a></li>
								<li><a tabindex="-1" href="#">DTS</a></li>
								<li><a tabindex="-1" href="#">Home Theater</a></li> 
							</ul>
						</li>
						<li class="dropdown">
							<a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">Televisions </a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li class="dropdown-header">Sub Category</li>
										<li><a tabindex="-1" href="#">item 1</a></li>
										<li><a tabindex="-1" href="#">item 2</a></li>
										<li><a tabindex="-1" href="#">item 3</a></li>
									</ul>										
									<ul class="list-unstyled">
										<li class="dropdown-header">Sub Category</li>
										<li><a tabindex="-1" href="#">item 1</a></li>
										<li><a tabindex="-1" href="#">item 2</a></li>
										<li><a tabindex="-1" href="#">item 3</a></li>
									</ul>
									<ul class="list-unstyled">
										<li class="dropdown-header">Sub Category</li>
										<li><a tabindex="-1" href="#">item 1</a></li>
										<li><a tabindex="-1" href="#">item 2</a></li>
										<li><a tabindex="-1" href="#">item 3</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="category-list.html">Computers </a></li>
						<li><a href="category-list.html">Washing Machines</a></li>
						<li><a href="category-list.html">Accessories </a></li>
                        <li><a href="category-list.html">Mobile Phones  </a></li>
						<li class="dropdown">
					<a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
						Pages
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><a tabindex="-1" href="index.html">Home</a></li>
						<li><a tabindex="-1" href="about.html">About</a></li>
						<li><a tabindex="-1" href="category-list.html">Category List</a></li>
						<li><a tabindex="-1" href="category-grid.html">Category Grid</a></li>
						<li><a tabindex="-1" href="product.html">Product</a></li>
						<li><a tabindex="-1" href="product-full.html">Product Full Width</a></li>
						<li><a tabindex="-1" href="cart.html">Cart</a></li>
						<li><a tabindex="-1" href="login.html">Login</a></li>
						<li><a tabindex="-1" href="compare.html">Compare Products</a></li>
						<li><a tabindex="-1" href="typography.html">Typography</a></li>
						<li><a tabindex="-1" href="register.html">Register</a></li>
						<li><a tabindex="-1" href="contact.html">Contact</a></li>
						<li><a tabindex="-1" href="404.html">404</a></li>
					</ul>
				</li>
					</ul>
				</div>
			<!-- Navbar Cat collapse Ends -->
			</div>
		</nav>
	<!-- Main Menu Ends -->
	</header>
<!-- Header Section Ends -->

	
		<div class="header-bottom" ><!--header-bottom-->
			<div class="container" >
				<div class="row">
					<div class="col-sm-9" >
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
					</div>
                                    <!-- search starts -->
					<div class="col-sm-3" >
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
                                    <!-- search ends -->
                                    
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
        
        
        
        
        
        
        
        
        
        
        
        
        <section>
    <div class="container">
        <div class="row">
            







            <?php
            if (!is_null($sideNavBar)) {
                echo $this->load->view($sideNavBar);
                echo $this->load->view($content);
                
            }
            else {
                echo $this->load->view($content);
            }
            ?>





        </div>
    </div>
</section>
	
	
        <!--contain->
        
         
                          
        
        
         <!--end of contain->
        
        
        
	
<!-- Footer Section Starts -->
	<footer id="footer-area">
	<!-- Footer Links Starts -->
		<div class="footer-links">
		<!-- Container Starts -->
			<div class="container">
				<!-- Information Links Starts -->
					<div class="col-md-2 col-sm-6">
						<h5>Information</h5>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="#">Delivery Information</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms &amp; Conditions</a></li>
						</ul>
					</div>
				<!-- Information Links Ends -->
				<!-- My Account Links Starts -->
					<div class="col-md-2 col-sm-6">
						<h5>My Account</h5>
						<ul>
							<li><a href="#">My orders</a></li>
							<li><a href="#">My merchandise returns</a></li>
							<li><a href="#">My credit slips</a></li>
							<li><a href="#">My addresses</a></li>
							<li><a href="#">My personal info</a></li>
						</ul>
					</div>
				<!-- My Account Links Ends -->					
				<!-- Customer Service Links Starts -->
					<div class="col-md-2 col-sm-6">
						<h5>Service</h5>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="#">Site Map</a></li>
							<li><a href="#">Affiliates</a></li>
							<li><a href="#">Specials</a></li>
						</ul>
					</div>
				<!-- Customer Service Links Ends -->
				<!-- Follow Us Links Starts -->
					<div class="col-md-2 col-sm-6">
						<h5>Follow Us</h5>
						<ul>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">RSS</a></li>
							<li><a href="#">YouTube</a></li>
						</ul>
					</div>
				<!-- Follow Us Links Ends -->
				<!-- Contact Us Starts -->
					<div class="col-md-4 col-sm-12 last">
						<h5>Contact Us</h5>
						<ul>
							<li>My Company</li>
							<li>
								1247 LB Nagar Road, Hyderabad, Telangana - 35
							</li>
							<li>
								Email: <a href="#">info@demolink.com</a>
							</li>								
						</ul>
						<h4 class="lead">
							Tel: <span>1(234) 567-9842</span>
						</h4>
					</div>
				<!-- Contact Us Ends -->
			</div>
		<!-- Container Ends -->
		</div>
	<!-- Footer Links Ends -->
	<!-- Copyright Area Starts -->
		<div class="copyright">
		<!-- Container Starts -->
			<div class="container">
			<!-- Starts -->
				<p class="pull-left">
					&copy; 2015 Electro Shoppe Stores. Designed By <a href="http://sainathchillapuram.com/">Sainath Chillapuram</a>
				</p>
			<!-- Ends -->
			<!-- Payment Gateway Links Starts -->
				<ul class="pull-right list-inline">
					<li>
						<img src="<?php echo base_url();?>application_resources/images/payment-icon/cirrus.png" alt="PaymentGateway" />
					</li>
					<li>
						<img src="<?php echo base_url();?>application_resources/images/payment-icon/paypal.png" alt="PaymentGateway" />
					</li>
					<li>
						<img src="<?php echo base_url();?>application_resources/images/payment-icon/visa.png" alt="PaymentGateway" />
					</li>
					<li>
						<img src="<?php echo base_url();?>application_resources/images/payment-icon/mastercard.png" alt="PaymentGateway" />
					</li>
					<li>
						<img src="<?php echo base_url();?>application_resources/images/payment-icon/americanexpress.png" alt="PaymentGateway" />
					</li>
				</ul>
			<!-- Payment Gateway Links Ends -->
			</div>
		<!-- Container Ends -->
		</div>
	<!-- Copyright Area Ends -->
	</footer>
<!-- Footer Section Ends -->
<!-- JavaScript Files -->
<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>js/jquery-migrate-1.2.1.min.js"></script>	
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap-hover-dropdown.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>js/custom.js"></script>
 <script src="<?php echo base_url();?>application_resources/js/jquery.js"></script>
	<script src="<?php echo base_url();?>application_resources/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>application_resources/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url();?>application_resources/js/price-range.js"></script>
    <script src="<?php echo base_url();?>application_resources/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>application_resources/js/main.js"></script>

</body>

<!-- Mirrored from sainathchillapuram.com/BS/ss/electro-shoppe/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Apr 2016 06:26:44 GMT -->
</html>