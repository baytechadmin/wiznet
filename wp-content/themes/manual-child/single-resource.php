<?php

/**
 * Template Name: Resources Single
 *
 */


get_header();
get_template_part( 'template', 'header' );?>

<div class="resources-sngle">
	<div class="container">
		<div class="row">
			<?php 
                 
                 if (have_posts() )
                 {

                     while (have_posts() ) { 
                         the_post();
                  ?>
			<div class="col-xs-4 single-img">
				<!--<h3>WIZwiki-W7500</h3>-->
                <h3> <?php the_title(); ?></h3>
               <?php the_post_thumbnail(); ?>
				<!--<img src="/wp-content/uploads/2017/04/u78.png" alt="">-->
			</div>
			<div class="col-xs-4 single-content">
				<h4><?php the_title(); ?></h4>				
                <?php the_content() ?>
			</div>
			<div class="col-xs-4 single-get">
				<h4>Getting Started</h4>
				 <?php if(get_field('getting_started_links')): ?>

                    <ul>
                
                    <?php while(has_sub_field('getting_started_links')): ?>
                
                        <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a></li>
                
                    <?php endwhile; ?>
                
                    </ul>
                
                <?php endif; ?>
                
				 	
			</div>

			<div class="col-xs-12 firmware">
            	<h4>Firmware</h4>
            	
				<?php if(get_field('firmware')): ?>

                    <ul>
                
						<?php $count = 1; while(has_sub_field('firmware')): ?>
                            <p><?php the_sub_field('label'); ?></p>
                            <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
                    
                        <?php endwhile; ?>
                
                    </ul>
                
                <?php endif; ?>
            
            
				
				
				<!--<p><a href="#">* W7500 Library page</a></p>-->
				
			</div>
            
			<div class="col-xs-12 features-resources">
				<h4>Features</h4>

				<?php if(get_field('features')): ?>
                
				<ul class="nav nav-tabs">
                
                	<?php $count = 1;  //this sets up the counter starting at 0 ?>

					<?php while(has_sub_field('features')): ?>
                            
                            
				    <li class="<?php if($count == 1){ ?>active<?php } ?>">
                    	<a href="#<?php echo $count ?>" data-toggle="tab"><?php the_sub_field('tab_link'); ?></a>
                    </li>
			
				    <?php $count++; // add one per row ?> 

				    <?php endwhile; ?>

			  	</ul> 
			  	 <?php endif; ?>

			  	<?php if(get_field('features')): ?>

		  		<div class="tab-content">
		  		<?php $count = 1;  //this sets up the counter starting at 0 ?>
		  		<?php  while(has_sub_field('features')): ?>
				    <div id="<?php echo $count ?>" class="tab-pane fade <?php if($count == 1){ ?>in active<?php } ?>">
                      <?php the_sub_field('tab_text'); ?>
				  
				    </div>
				    <?php $count++; // add one per row ?> 
				     <?php endwhile; ?>
				  
            
  				</div>
  				<?php endif; ?>
			</div>

			<div class="col-xs-12 ProjectsTechnical">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 makeprojects">
						<h4><?php the_title(); ?></h4>

						<?php if(get_field('getting_started_links')): ?>

		                    <ul>
		                
		                    <?php while(has_sub_field('getting_started_links')): ?>
		                
		                        <li><?php the_sub_field('label'); ?></li>
		                
		                    <?php endwhile; ?>
		                
		                    </ul>
		                
		                <?php endif; ?>
						
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 technical-ref">
                   
	
						<h4>Technical References</h4>

                        <?php if(get_field('technical_heading')): ?>
                        
                        <?php while(has_sub_field('technical_heading')): ?>
						
						<ul>
                    		<h4><img src="/wp-content/uploads/2017/04/u143.png" alt=""><?php the_sub_field('heading'); ?></h4> 
                
							  <li><a href="#"><img src="/wp-content/uploads/2017/04/u178.png" alt=""><?php the_sub_field('link');?></a></li>
							  
						</ul>
                         <?php endwhile; ?>
                          <?php endif; ?>
					
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 makeprojectsEtc">
						<h4>Etc.</h4>
                        <?php if(get_field('etc')): ?>
                        <?php while(has_sub_field('etc')): ?>
							<ul>
								<h4><?php the_sub_field('head-etc'); ?></h4>
								<li><a href="<?php the_sub_field('link-etc'); ?>"><?php the_sub_field('text-etc'); ?></a></li>
							</ul>
							
                            <?php endwhile; ?>
                          <?php endif; ?>
							
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 technical-refSee">
						<h4>See Also</h4>
                         <?php if(get_field('see_also')): ?>
                        <?php while(has_sub_field('see_also')): ?>
						<p>

						<span><?php the_sub_field('text_field'); ?></span>
						</p>
                         <?php endwhile; ?>
                          <?php endif; ?>
					</div>
                    
				</div>
                 <?php
					 }
	
					 wp_reset_postdata();
	
				 }
				 ?>
			</div>
				
		</div>
	</div>
	<!-- container end -->
</div>

<?php get_footer(); ?>


