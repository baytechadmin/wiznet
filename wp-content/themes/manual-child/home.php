<?php

/**
 * Template Name: home
 *
 */


get_header();?>






	<!--=================== top area ================================== -->



	<div class="slider">

		<!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/slider.png" alt="slide"> -->

		<?php  echo do_shortcode('[rev_slider home]'); ?>
	</div>







	<!--=================== content area ================================== -->





	<div class="content-in">



		<div class="community">

			<div class="container">

				<div class="row">

					<div class="col-xs-12">

						<h1>Join the Cyber Maker Space community</h1>

						<!-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elitsed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->

					</div>
 					
					<?php if(get_field('cyber_maker_space')): ?>
                
                    <?php while(has_sub_field('cyber_maker_space')): ?>
                
					<div class="col-xs-12 col-sm-4 col-md-4 community-in">
                    <?php //$image = the_sub_field('image'); ?>
                  <?php $image = get_sub_field('image');
//print_r($image);
					if( !empty($image) ): ?>

					<img src="<?php echo $image ?>" alt="" />

					<?php endif; ?>
                
					<!--<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/reason6.png" alt="">-->

						<!--<h4>Share your ideas</h4>-->
                     <h4> <?php the_sub_field('cyber_head'); ?></h4>

						<p>
                      <?php the_sub_field('cyber_text'); ?>
							<!--We’ve built a community where you can discover new ideas, meet like-minded people, and collaborate to make each other’s brilliant projects come to life.-->

						</p>
                      
					</div> 
                     <?php endwhile; ?>
                
                	<?php endif; ?>
					<!--<div class="col-xs-12 col-sm-4 col-md-4 community-in">

						<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/reason2.png" alt="">

						<h4>Expand your network</h4>

						<p>
							It’s not about what you know but who you know. We work with companies that welcome makers to participate in their design contests and expand their skills. 

						</p>
					</div>-->

					<!--<div class="col-xs-12 col-sm-4 col-md-4 community-in">

						<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/reason1.png" alt="">

						<h4>Become a leader</h4>

						<p>
							Let’s have some fun doing what we love! The IoT era is upon us. Join us as leaders of the movement and get ready to make history. 

						</p>
					</div>-->

					

					<!-- <div class="col-xs-12 col-sm-4 col-md-4 community-in">

						<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/reason3.png" alt="">

						<h4>Reason 3</h4>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					</div>

					<div class="col-xs-12 col-sm-4 col-md-4 community-in">

						<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/reason4.png" alt="">

						<h4>Reason 4</h4>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					</div>

					<div class="col-xs-12 col-sm-4 col-md-4 community-in">

						<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/reason5.png" alt="">

						<h4>Reason 5</h4>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
 -->
					</div>

					
				</div><!-- ./ row -->

			</div><!-- ./ container -->

		</div>





		<div class="contests">

			<div class="container">

				<div class="row">

					<div class="col-xs-12">

						<h1>Contest</h1>

					</div>

					<?php 
                 $args = array( 'post_type' => 'contest', 'posts_per_page' => 1, 'orderby' => 'ID', 'order' => 'ASC' );
                 $the_query = new WP_Query( $args ); 
                 ?>
                         <?php
                 if ( $the_query->have_posts() )
                 {
                     while ( $the_query->have_posts() ) { 
                         $the_query->the_post();
                  ?>

			<div class="col-xs-12 col-sm-12 col-md-12 contests-in">

				<div class="whitelist">

					<div class="contestsimg">
                 
						<?php the_post_thumbnail(); ?>
						<!--<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/member1.png" alt="">-->

					</div>

					<h4><?php the_title(); ?></h4>

					<!--<h4>design challenge #1</h4>-->

					<div class="contests-content">

						<?php echo substr(get_the_content(),0,250); ?>
					</div>

					

					<div class="excerp">

						<p><?php the_excerpt(); ?></p>

					</div>

					<!--<div class="date">March 31,2017</div>-->
					
                    <div class="date"><?php echo get_the_date(); ?></div>
					<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php the_permalink(); ?>" class="gen-btn">Learn More</a>
                     <?php else : ?>
                     <a href="<?php echo site_url(); ?>/signup" class="gen-btn">Participate</a>
                     <?php endif; ?>

				</div>

			</div>
			<?php
                 }

                 wp_reset_postdata();

             }
             ?>

					

					<div class="col-xs-12 see-all-content">

						<a href="<?=site_url()?>/contest" class="gen-btn see-all">See All Contests</a>

					</div>

				</div><!-- ./ row -->

			</div><!-- ./ container -->

		</div>

	</div><!-- content in end -->


<?php get_footer(); ?>
