<?php

/**
 * Template Name: community Single
 *
 */


get_header();
get_template_part( 'template', 'header' );?>

<div class="community-page single">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8 community-content single">
				<h3>
					How do I register ?
				</h3>				
				
				<div class="col-xs-12 community-content-start ">
					<div class="row">
						<div class="details-content">
							<div class="details-content-image">
								<img src="/wp-content/uploads/2017/04/u29.png" alt="">
								<p class="name">Name 1</p>							
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
							<p>Posted on Feb 08, 2017</p>						
							<p class="postcout">Posts 212</p>
						</div>

						<div class="details-content">
							<div class="details-content-image">
								<img src="/wp-content/uploads/2017/04/u29.png" alt="">
								<p class="name">Name 1</p>							
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
							<p>Posted on Feb 08, 2017</p>						
							<p class="postcout">Posts 212</p>
						</div>

						<div class="details-content">
							<div class="details-content-image">
								<img src="/wp-content/uploads/2017/04/u29.png" alt="">
								<p class="name">Name 1</p>							
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
							<p>Posted on Feb 08, 2017</p>						
							<p class="postcout">Posts 212</p>
						</div>

						<div class="details-content">
							<div class="details-content-image">
								<img src="/wp-content/uploads/2017/04/u29.png" alt="">
								<p class="name">Name 1</p>							
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
							<p>Posted on Feb 08, 2017</p>						
							<p class="postcout">Posts 212</p>
						</div>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">
							<form action="">
								<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
			  					<script>tinymce.init({ selector:'textarea' });</script>
			  					<textarea>Next, get a free TinyMCE Cloud API key!</textarea>
			  					<div class="col-xs-12 col-sm-12 btn-wrap">
				  					<div class="row">
				  						<button type="button" class="btn btn-danger">Cancel</button>
			  							<button type="button" class="btn btn-default">Submit</button>
				  					</div>
			  						
			  					</div>
			  				</form>
						</div>

					</div>
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