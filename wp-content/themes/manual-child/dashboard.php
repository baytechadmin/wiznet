<?php

/**
 * Template Name: Dashboard page
 *
 */


get_header();
get_template_part( 'template', 'header' );?>

<div class="dashboard-page">
	<div class="container">
		<div class="row">
			<!-- user info -->
             
				<div class="col-xs-12 user-info">
					<div class="userimage">
                 <?php  //echo do_shortcode( '[avatar]' );
				 
				 $current_user = wp_get_current_user();
				// print_r($current_user);
				  ?>
                 <?php echo get_wp_user_avatar(); ?>
						<!--<img src="/wp-content/uploads/2017/04/dash_r3_c3.jpg" alt="">-->
					</div>
                    <?php $user_info = get_userdata($current_user->ID);?>
 				    <h4><?php echo $current_user->display_name; ?></h4>
					
					<!--<h4>Robert Liu</h4>-->
					<p><?=$current_user->roles[0]='subscriber'?'Member':''?></p>
					<p></p>
                    <?php $user_info = get_userdata(1);?>
					<p>Contact info:<?php echo $current_user->user_email; ?></p>
					<div class="col-xs-12 postcomment-user">
						<p>
							<i class="fa fa-file-text-o" aria-hidden="true"></i>
							<span>post<?php $count_posts = wp_count_posts( 'dashboard' )->publish;?></span>
							<i class="fa fa-comment" aria-hidden="true"></i>
                            
							<span> <?php
                            global $wpdb;
							$userid=1;
							$comment_count = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) AS total FROM $wpdb->comments WHERE comment_approved = 1 AND user_id = %s", $current_user->ID ) );
							echo $comment_count;
                            
                            ?></span>
						</p>
					</div>
				</div>

				<div class="clearfix"></div>

			<div class="col-xs-12 col-sm-3 col-md-3 dashboard-sidebar">
				<ul>
					<li><h4>User Profile</h4></li>
				    <li><a data-toggle="tab" href="#Description">Description</a></li>
				    <li><a data-toggle="tab" href="#Contactinfo">Contact Info</a></li>
				    <li><a data-toggle="tab" href="#Updateavatar">Update Avatar</a></li>
				    <li><h4>Contests</h4></li>
				    <li class="active"><a data-toggle="tab" href="#OngoingContests">Ongoing Contests</a></li>
					<li><a data-toggle="tab" href="#PastContests">Past Contests</a></li>
                    <li><h4>Resources</h4></li>
                    <li><a data-toggle="tab" href="#Resources">Resources</a></li>
                    <li><h4>Libraries</h4></li>
                    <li><a data-toggle="tab" href="#Libraries">Libraries</a></li>
                    <li><h4>Tutorials</h4></li>
                    <li><a data-toggle="tab" href="#Tutorials">Tutorials</a></li>
					<li><h4>Projects</h4></li>
					<li><a data-toggle="tab" href="#Projects1">Projects 1</a></li>
					
					<li><h4>Bookmarks</h4></li>
					<li><a data-toggle="tab" href="#Bookmark1">Bookmark title 1</a></li>
				
				</ul>	
				
			</div>

			<div class="col-xs-12 col-sm-9 col-md-9 dashboard-article tab-content">
				
				

				<div id="OngoingContests" class="tab-pane fade in active">
					
					<article class="ongoing-contests">
						<h3>Ongoing Contests</h3>
						<div class="col-xs-12 dashboard-tab">
							<div class="row">
								<ul class="nav nav-tabs">
								    <li class="active"><a data-toggle="tab" href="#home">2017 IoT Design</a></li>
								    
								    
								</ul>	
						  		<div class="tab-content">
								    <div id="home" class="tab-pane fade in active">
								    	<div class="selectedplatform">
                                        <?php 
									 $args = array( 'post_type' => 'contest','meta_key' => 'end_date',	'meta_value' => date( "Ymd" ), 'meta_compare' => '>');
									 $the_query = new WP_Query( $args ); 
									 ?>
											 <?php
									 if ( $the_query->have_posts() )
									 {
									  while ( $the_query->have_posts() ) { 
									  $the_query->the_post();
									  ?>
                                    <h4>Selected Platform</h4>
                                   
								     		<div class="selectedplatform-img">
                                
                                            <?php the_post_thumbnail(); ?>
								     			<!--<img src="/wp-content/uploads/2017/04/dash_r5_c7.jpg" alt="">-->
								     		</div>
                                    <?php
                                    }
                                     wp_reset_postdata();
                                     }
                                     ?>
								     		<!--<div class="selectedplatform-img">
								     			<img src="/wp-content/uploads/2017/04/dash_r7_c6.jpg" alt="">
								     		</div>-->
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
                                  <?php the_post_thumbnail(); ?>
								   <!--<img src="/wp-content/uploads/2017/04/u17.jpg" alt="">-->
								   <!--<h4>Iot Design Contets</h4>-->
                                   <h4><?php the_title(); ?></h4>
								    <small><?php the_excerpt(); ?> <br/></small>
								     <p>
                                    <?php echo substr(get_the_content(),0,250); ?>
								     		<!--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.-->
								     	</p>
								     	
								<?php
                                 }
                                     wp_reset_postdata();
                                 }
                                 ?>
								    </div>

								    <!--<div id="menu1" class="tab-pane fade">
								      	<img src="/wp-content/uploads/2017/04/u17.jpg" alt="">
								    	<h4>Iot Design Contets</h4>
								      	<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								    </div>
								    <div id="menu2" class="tab-pane fade">
								      	<img src="/wp-content/uploads/2017/04/u17.jpg" alt="">
								    	<h4>Iot Design Contets</h4>
								      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
								    </div>
								    <div id="menu3" class="tab-pane fade">
								      	<img src="/wp-content/uploads/2017/04/u17.jpg" alt="">
								    	<h4>Iot Design Contets</h4>
								      	<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
								    </div>-->
				  				</div>
				  			</div>
						</div>
					</article>
					
					<!--<article class="closecontest-article">
						<h3>Close Contests</h3>
						<ul class="closecontest">
							<li>
								<img src="/wp-content/uploads/2017/04/u17.jpg" alt="">
								<p>2017.2.15</p>
								<a href="#" class="gen-btn">View post</a>
							</li>
							<li>
								<img src="/wp-content/uploads/2017/04/u17.jpg" alt="">
								<p>2017.2.15</p>
								<a href="#" class="gen-btn">View post</a>
							</li>
							<li>
								<img src="/wp-content/uploads/2017/04/u17.jpg" alt="">
								<p>2017.2.15</p>
								<a href="#" class="gen-btn">View post</a>
							</li>
							<li>
								<img src="/wp-content/uploads/2017/04/u17.jpg" alt="">
								<p>2017.2.15</p>
								<a href="#" class="gen-btn">View post</a>
							</li>
							<li>
								<img src="/wp-content/uploads/2017/04/u17.jpg" alt="">
								<p>2017.2.15</p>
								<a href="#" class="gen-btn">View post</a>
							</li>
						</ul>	
					</article>-->
				</div><!-- tab end first -->
                <div id="Resources" class="tab-pane fade">
                <article class="resources-article">
						<h3>Resources</h3>
						<div class="clearfix"></div>
                       	 <?php 
								 $args = array( 'post_type' => 'resource', 'posts_per_page' => 2, 'orderby' => 'ID', 'order' => 'ASC' );
								 $the_query = new WP_Query( $args ); 
								 ?>
									  <?php
						 if ( $the_query->have_posts() )
						 {
							 $count = 0;
							 while ( $the_query->have_posts() ) { 
								 $the_query->the_post();
						  ?>
							
						<div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 text-center  pinoutbehind <?php if ($count ==1) {?> pinout<?php }?>">
							
                             <?php if ($count ==1) {?><h4>Pinout</h4><?php }?>
                             
                            <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
                            <div class="clearfix"></div>
                            <?php if ($count ==0) {?><?php echo substr(get_the_content(),0,300); ?><?php }?>
							
						</div>
						
						<?php  $count++;
							 }
							
			
							 wp_reset_postdata();
			
						 }
						 ?>
					</article>
                   </div>
                    <div id="Tutorials" class="tab-pane fade">
                   <article class="tutorials-article">
						<h3>Tutorials</h3>
						<img src="/wp-content/uploads/2017/04/dash_r9_c2.jpg" alt="">
						<h4>WIZwiki-W7500 Getting Started Guide</h4>
						<ul>
							
							<li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</li>
							<li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</li>
							<li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</li>
						</ul>
					</article>
                    </div>
                   
                   
                 <div id="PastContests" class="tab-pane fade">
                    <article class="ongoing-contests">
						<h3>Past Contests</h3>
						<div class="col-xs-12 dashboard-tab">
							<div class="row">
								<ul class="nav nav-tabs">
								    <li class="active"><a data-toggle="tab" href="#home">2017 IoT Design</a></li>
								    
								    
								</ul>	
						  		<div class="tab-content">
								    <div id="home" class="tab-pane fade in active">
								    	<div class="selectedplatform">
                                        <?php 
									 $args = array( 'post_type' => 'contest','meta_key' => 'end_date',	'meta_value' => date( "Ymd" ), 'meta_compare' => '<');
									 $the_query = new WP_Query( $args ); 
									 ?>
											 <?php
									 if ( $the_query->have_posts() )
									 {
									  while ( $the_query->have_posts() ) { 
									  $the_query->the_post();
									  ?>
                                    <h4>Selected Platform</h4>
                                   
								     		<div class="selectedplatform-img">
                                
                                            <?php the_post_thumbnail(); ?>
								     			<!--<img src="/wp-content/uploads/2017/04/dash_r5_c7.jpg" alt="">-->
								     		</div>
                                    <?php
                                    }
                                     wp_reset_postdata();
                                     }
                                     ?>
								     		<!--<div class="selectedplatform-img">
								     			<img src="/wp-content/uploads/2017/04/dash_r7_c6.jpg" alt="">
								     		</div>-->
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
                                  <?php the_post_thumbnail(); ?>
								   <!--<img src="/wp-content/uploads/2017/04/u17.jpg" alt="">-->
								   <!--<h4>Iot Design Contets</h4>-->
                                   <h4><?php the_title(); ?></h4>
								    <small><?php the_excerpt(); ?> <br/></small>
								     <p>
                                    <?php echo substr(get_the_content(),0,250); ?>
								     		<!--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.-->
								     	</p>
								     	
								<?php
                                 }
                                     wp_reset_postdata();
                                 }
                                 ?>
								    </div>

								    <div id="menu1" class="tab-pane fade">
								      	<img src="/wp-content/uploads/2017/04/u17.jpg" alt="">
								    	<h4>Iot Design Contets</h4>
								      	<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								    </div>
								    <div id="menu2" class="tab-pane fade">
								      	<img src="/wp-content/uploads/2017/04/u17.jpg" alt="">
								    	<h4>Iot Design Contets</h4>
								      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
								    </div>
								    <div id="menu3" class="tab-pane fade">
								      	<img src="/wp-content/uploads/2017/04/u17.jpg" alt="">
								    	<h4>Iot Design Contets</h4>
								      	<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
								    </div>
				  				</div>
				  			</div>
						</div>
					</article>
                    </div>
				
				
                  
                    
                 <div id="Libraries" class="tab-pane fade">
					<article class="libraries-article">
						<h3>Libraries</h3>
						<img src="/wp-content/uploads/2017/04/dash_r11_c2.jpg" alt="">
						<h4>ioLibrary: Web Server</h4>
						<ul>
							
							<li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</li>
							<li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</li>
							<li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</li>
						</ul>
					</article>
                    </div>
			</div>
			</div><!-- col end -->	
		</div><!-- row -->		
	</div><!-- container end -->
	
</div>

<?php get_footer(); ?>