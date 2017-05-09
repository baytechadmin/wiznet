<?php
/**
 * Template Name: home
 *
 */
?>

<!DOCTYPE html>
<html>

<head>

	<title>Cyber</title>
	<!--=================== Meta ================================== -->
	<meta charset="UTF-8">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet">
	
	<!--=================== custom style css ================================== -->

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

</head>

<body>

<header>
	
	<!--=================== top area ================================== -->

	<div class="top-bar">
		
		<div class="topsearch">
			<div class="container">
				<a href="mailto:info@cybermakerspace.com" class="mailto">info@cybermakerspace.com</a>
				<form action="http://staging.cybermakerspace.com">
					<div class="seacrh-in">
						<input type="text" value="" placeholder="Need help ? Ask or enter search term" class="searching">
						<select>
							<option>Entire site</option>
							<option>Entire site</option>
						</select>
						<input type="submit" value="Go!" class="gen-btn">
					</div>
				</form>
				<a href="#" class="login-register" ><img src="<?php echo get_template_directory_uri(); ?>/images/login-icon.png" alt="icon">Login/Register</a>
			</div>
		</div>
		<div class="container">
			<div class="logo">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cyber-logo.png" alt="logo"></a>
			</div>

			<div class="topnavbar">

				<nav class="navbar navbar-default mynav">
			        
			        <div class="navbar-header">
			            <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			              <span class="sr-only">Toggle navigation</span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			            </button>
			        </div>
			                                  
			        <div id="navbar" class="navbar-collapse collapse ">

			            <ul class="nav navbar-nav">
			              <li class="active"><a href="#">about us</a></li>               
			              <li><a href="#">community </a></li>	   
			              <li><a href="#">contests</a></li>
			              <li><a href="#">projects</a></li>
			              <li><a href="#">resources</a></li>
			            </ul>
			                                             
			        </div><!--/.nav-collapse -->
			        
		      	</nav>
		    </div>
		</div>  <!-- container end -->

	</div><!-- tob section end -->


</header>


	<!--=================== top area ================================== -->

	<div class="slider">
		<img src="<?php echo get_template_directory_uri(); ?>/images/slider.png" alt="slide">
	</div>



	<!--=================== content area ================================== -->


	<div class="content-in">

		<div class="community">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>Why Join the Community</h1>
						<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elitsed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 community-in">
						<img src="<?php echo get_template_directory_uri(); ?>/images/reason1.png" alt="">
						<h4>Reason 1</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 community-in">
						<img src="<?php echo get_template_directory_uri(); ?>/images/reason2.png" alt="">
						<h4>Reason 2</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 community-in">
						<img src="<?php echo get_template_directory_uri(); ?>/images/reason3.png" alt="">
						<h4>Reason 3</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 community-in">
						<img src="<?php echo get_template_directory_uri(); ?>/images/reason4.png" alt="">
						<h4>Reason 4</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 community-in">
						<img src="<?php echo get_template_directory_uri(); ?>/images/reason5.png" alt="">
						<h4>Reason 5</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 community-in">
						<img src="<?php echo get_template_directory_uri(); ?>/images/reason6.png" alt="">
						<h4>Reason 6</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div><!-- ./ row -->
			</div><!-- ./ container -->
		</div>


		<div class="contests">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>contests</h1>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 contests-in">
						<div class="whitelist">
							<div class="contestsimg">
								<img src="<?php echo get_template_directory_uri(); ?>/images/member1.png" alt="">
							</div>
							<h4>contest number 1</h4>
							<h4>design challenge #1</h4>
							<div class="contests-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
							
							<div class="excerp">
								<p>Particiption is open until:</p>
							</div>
							<div class="date">March 31,2017</div>
							<a href="#" class="gen-btn participate">Participate</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 contests-in">
						<div class="whitelist">
							<div class="contestsimg">
								<img src="<?php echo get_template_directory_uri(); ?>/images/member2.png" alt="">
							</div>
							<h4>contest number 1</h4>
							<h4>design challenge #1</h4>
							<div class="contests-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
							
							<div class="excerp">
								<p>Particiption is open until:</p>
							</div>
							<div class="date">March 31,2017</div>
							<a href="#" class="gen-btn participate">Participate</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 contests-in">
						<div class="whitelist">
							<div class="contestsimg">
								<img src="<?php echo get_template_directory_uri(); ?>/images/member3.png" alt="">
							</div>
							<h4>contest number 1</h4>
							<h4>design challenge #1</h4>
							<div class="contests-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
							
							<div class="excerp">
								<p>Particiption is open until:</p>
							</div>
							<div class="date">March 31,2017</div>
							<a href="#" class="gen-btn participate">Participate</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 contests-in">
						<div class="whitelist">
							<div class="contestsimg">
								<img src="<?php echo get_template_directory_uri(); ?>/images/member4.png" alt="">
							</div>	
							<h4>contest number 1</h4>
							<h4>design challenge #1</h4>
							<div class="contests-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
							
							<div class="excerp">
								<p>Particiption is open until:</p>
							</div>
							<div class="date">March 31,2017</div>
							<a href="#" class="gen-btn participate">Participate</a>
						</div>					
					</div>
					<div class="col-xs-12 see-all-content">
						<a href="#" class="gen-btn see-all">See All Content</a>
					</div>
				</div><!-- ./ row -->
			</div><!-- ./ container -->
		</div>


		<div class="register">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>Be part of the family</h1>
						<a href="#" class="gen-btn register-btn">Register Now</a>
					</div>
				</div><!-- ./ row -->
			</div><!-- ./ container -->
		</div>


	</div><!-- content in end -->


	<!--=================== footer area ================================== -->

	
	<footer>
		<span id="top-link-block" class="hidden">
			<a href="#top" class="well well-sm" id="backtotop"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</a>
		</span>
		<div class="container">
			<div class="row">
				<p class="copyright">&copy; 2017 <a href="#">www.cybermarkerspace.com. All Right Reserved</a></p>
				<ul class="footer-nav">
					<li><a href="#">Sitemap</a></li>
					<li><a href="#">Term of Use</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
				<p class="question-fot">Have a question? Send email to: <a href="mailto:info@cybermakerspace.com">info@cybermakerspace.com</a></p>
			</div><!-- ./ row -->
		</div><!-- ./ container -->
	</footer>














 	<!--=================== custom js plus library ======================== -->

	 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.js"></script>
	 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
	 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.backTop.min.js"></script> 
	 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

</body>

</html>