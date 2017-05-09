<?php

/**
 * Template Name: community
 *
 */


get_header();
get_template_part( 'template', 'header' );?>

<div class="community-page">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8 community-content">
				<h3>
					<span class="communitydirectory">Directory</span>
					<span class="communityTopic">Topic</span>
					<span Class="communitypost">Posts</span>
					<span class="communitylastpost">Last Post</span>
				</h3>				
				
				<div class="col-xs-12 community-content-start">
					<div class="row">
						<h4>General Topics</h4>	
						<div class="details-content">
							<div class="authetc">
								<span>1</span>
								<span>1</span>
								<span class="authname-date">Robert Liu Feb 10, 2017</span>
							</div>
							<img src="/wp-content/uploads/2017/04/u178.png" alt="">
							<h5><a href="#">Discussion Title Number 1</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. </p>
							
						</div>
						

						<h4>Welding</h4>	
						<div class="details-content">
							<div class="authetc">
								<span>1</span>
								<span>1</span>
								<span class="authname-date">Robert Liu Feb 10, 2017</span>
							</div>
							<img src="/wp-content/uploads/2017/04/u178.png" alt="">
							<h5><a href="#">Discussion Title Number 2</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. </p>
							
						</div>

						<div class="details-content">
							<div class="authetc">
								<span>1</span>
								<span>1</span>
								<span class="authname-date">Robert Liu Feb 10, 2017</span>
							</div>
							<img src="/wp-content/uploads/2017/04/u178.png" alt="">
							<h5><a href="#">Discussion Title Number 3</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. </p>
							
						</div>

						<h4>Welding</h4>	
						<div class="details-content">
							<img src="/wp-content/uploads/2017/04/u178.png" alt="">
							<h5><a href="#">Discussion Title Number 4</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. </p>
							<div class="authetc">
								<span>1</span>
								<span>1</span>
								<span class="authname-date">Robert Liu Feb 10, 2017</span>
							</div>
						</div>

						<div class="details-content">
							<div class="authetc">
								<span>1</span>
								<span>1</span>
								<span class="authname-date">Robert Liu Feb 10, 2017</span>
							</div>
							<img src="/wp-content/uploads/2017/04/u178.png" alt="">
							<h5><a href="#">Discussion Title Number 5</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. </p>
							
						</div>

						<div class="details-content">
							<div class="authetc">
								<span>1</span>
								<span>1</span>
								<span class="authname-date">Robert Liu Feb 10, 2017</span>
							</div>
							<img src="/wp-content/uploads/2017/04/u178.png" alt="">
							<h5><a href="#">Discussion Title Number 5</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. </p>
							
						</div>
						
					</div>
				</div>
				<div class="col-xs-12 text-center">
					<ul class="pagination">
						<li><a href="#">&laquo;</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
				</div>
			</div>



			<div class="col-xs-12 col-sm-4 col-md-4 sidebar-custom community-sidebar">
				<form action="">
					<label>User Name *</label>
					<input type="text" name="" id="" value="" required="required" pattern="" title="">
					<label>Password *</label>
					<input type="password" name="" id="" value="" required="required" pattern="" title="">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							Remember Me
							
						</label>
						<a href="#">Forgot your username or password?</a>
					</div>
					<a href="#" class="gen-btn">Sign In</a>
					<a href="<?php echo site_url(); ?>/">Don't have an account yet?</a>
				</form>
			</div>
		</div>
	</div>
	<!-- container end -->
</div>

<?php get_footer(); ?>