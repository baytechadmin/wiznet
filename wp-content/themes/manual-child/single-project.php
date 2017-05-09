<?php

get_header();
get_template_part( 'template', 'header' );?>

<div class="projects-single">
  <div class="container">
    <div class="row">
      <?php                  
	 if (have_posts() )
	 {

		 while (have_posts() ) { 
			 the_post();
	  ?>
      <div class="col-xs-12 col-sm-6 col-md-6">
        <h3>
          <?php the_title(); ?>
        </h3>
        <small>by  <?php echo $author = get_the_author(); ?> </small> </div>
      <div class="col-xs-12 col-sm-6 col-md-6 ">
        <div class="row">
          <div class="col-xs-12 likes-rate"> <span class="message"><i class="fa fa-comment-o fa-2x" aria-hidden="true"></i> <?=get_comments_number();?></span> <span class="likes"><i class="fa fa-thumbs-o-up  fa-2x" aria-hidden="true"></i> 131</span> <?php if(function_exists('the_ratings')) { the_ratings(); } ?><!--<span class="pro-rating"><img src="/wp-content/uploads/2017/04/u190.png" alt="">4.5</span>--> </div>
        </div>
      </div>
      <div class="image-single-pro col-xs-12">
        <?php the_post_thumbnail(); ?>
        <!--<img src="/wp-content/uploads/2017/04/u43.jpg" alt="">--> 
      </div>
      <div class="col-xs-12 single-pro-desc">
        <?php the_content() ?>
					
				
        <div class="related-project">
          <h4>Related Projects</h4>
          <?php 
			 $args = array( 'post_type' => 'project', 'posts_per_page' => 5, 'orderby' => 'ID', 'order' => 'ASC' );
			 $the_query = new WP_Query( $args ); 
			?>
          <ul>
            <?php
				 if ( $the_query->have_posts() )
				 {
					 while ( $the_query->have_posts() ) { 
						 $the_query->the_post();
				?>
            <li><a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
              </a></li>
            <?php
				 }

				 wp_reset_postdata();

			 }
			 ?>
          </ul>
        </div>
        <div class="leavecomment">
        <?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;//get_template_part( 'comments' );?>
        <!--  <h4>Leave A Comment</h4>
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
                Notify me follow up comment by email </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="">
                Notify me of new post by email </label>
            </div>
          </form>-->
        </div>
      </div>
      <?php //echo do_shortcode('[ratings]');?>
      <?php  }
	
	
				 }?>
    </div>
  </div>
  <!-- container end --> 
</div>
<?php get_footer(); ?>
