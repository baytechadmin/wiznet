<?php
if ( !is_user_logged_in() ):
wp_redirect('/signup/');
endif;
get_header();
get_template_part( 'template', 'header' ); ?>


<div class="resources">

	<div class="container">
		<div class="row">
        	<?php 
                 $args = array( 'post_type' => 'resource', 'posts_per_page' => 4, 'orderby' => 'ID', 'order' => 'ASC' );
                 $the_query = new WP_Query( $args ); 
                 ?>
                         <?php
                 if ( $the_query->have_posts() )
                 {
                     while ( $the_query->have_posts() ) { 
                         $the_query->the_post();
                  ?>

			<div class="col-xs-12 col-sm-6 col-md-6 resources-inner">
				<div class="hoverwrap">
					<?php the_post_thumbnail(); ?>
					<div class="resources-hover">
						<h4><?php the_title(); ?></h4>
							<p><?php echo substr(get_the_content(),0,150); ?></p>
						<a href="<?php the_permalink();?>" class="resources-link">find out more</a>
					</div>	
				</div>
				<h3><?php the_title(); ?></h3>
                	
			</div>
             <?php
					 }
	
					 wp_reset_postdata();
	
				 }
				 ?>
				
		</div>
        
	</div><!-- container end -->

</div>


<?php get_footer(); ?>