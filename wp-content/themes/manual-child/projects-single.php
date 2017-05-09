<?php

/**
 * Template Name: Projects Single
 *
 */


get_header();
get_template_part( 'template', 'header' );?>

<div class="projects-single">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<h3>The thing system - Clients</h3>
				<small>by The Thing System</small>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 ">
				<div class="row">
					<div class="col-xs-12 likes-rate">
						<span class="message"><i class="fa fa-comment-o fa-2x" aria-hidden="true"></i> 231</span>
						<span class="likes"><i class="fa fa-thumbs-o-up  fa-2x" aria-hidden="true"></i> 131</span>
						<span class="pro-rating"><img src="/wp-content/uploads/2017/04/u190.png" alt="">4.5</span>
					</div>
				</div>
			</div>

			<div class="image-single-pro col-xs-12">
				<img src="/wp-content/uploads/2017/04/u43.jpg" alt="">
			</div>
			<div class="col-xs-12 single-pro-desc">
				<h4>Overview</h4>
				<p>More complicated clients, one which monitor updates from the steward looking for changing conditions, and
				reacting to them on behalf of the user by asking the steward to perform actions, are entirely possible. Technically speaking these are intelligent agents working in a multi-agent system with shared goals of making life more convenient for the user. We like to think that we're implementing magic.
				</p>
				
				<div class="examplecode">
					<h3>Example code</h3>
					<p>Lorem ipusm etc</p>
					<img src="/wp-content/uploads/2017/04/u47.png" alt="">
					<img src="/wp-content/uploads/2017/04/u49.png" alt="">
					<h3>Learn More</h3>
				</div>

				<div class="related-project">
					<h4>Related Projects</h4>
					<ul>
						<li><a href="#"><img src="/wp-content/uploads/2017/04/u65.jpg" alt=""></a></li>
						<li><a href="#"><img src="/wp-content/uploads/2017/04/u65.jpg" alt=""></a></li>
						<li><a href="#"><img src="/wp-content/uploads/2017/04/u65.jpg" alt=""></a></li>
						<li><a href="#"><img src="/wp-content/uploads/2017/04/u65.jpg" alt=""></a></li>
						<li><a href="#"><img src="/wp-content/uploads/2017/04/u65.jpg" alt=""></a></li>
					</ul>
				</div>
				<div class="leavecomment">
					<h4>Leave A Comment</h4>
					<form action="">
						<input type="text" name="" id=""  value="" required="required" pattern="" title="" placeholder="Name(required)">
						<input type="text" name="" id=""  value="" required="required" pattern="" title="" placeholder="Email">
						<input type="text" name="" id=""  value="" pattern="" title="" placeholder="Website">
						<textarea placeholder="Comment..." cols="10" rows="10"></textarea>
						<div class="clearfix"></div>
						<button type="submit" class="btn btn-default">Submit</button>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="">
								Notify me follow up comment by email 
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="">
								Notify me of new post by email 
							</label>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- container end -->
</div>

<?php get_footer(); ?>