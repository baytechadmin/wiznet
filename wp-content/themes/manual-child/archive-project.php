<?php

get_header();
$current_user = wp_get_current_user();
if($_REQUEST['sortby']!= '') {

	$ar = array( 'post_type' => 'project','orderby' => 'title','order' => $_REQUEST['sortby']);
	query_posts($ar); 
}
if($_REQUEST['status'] == 'new'){
	$ar = array( 'post_type' => 'project','orderby' => 'post_date',	'order' => 'DESC','posts_per_page' => 8);
	query_posts($ar); 
}
if($_REQUEST['status'] == 'my'){
	$ar = array( 'post_type' => 'project','orderby' => 'date','order' => $_REQUEST['sortby'],'author'=>  $current_user->ID,);
	query_posts($ar); 
}
get_template_part( 'template', 'header' );?>

<div class="projects">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 filter-projects">
        <ul class="filter-ul">
          <li <?=$_REQUEST['status']==''?'class="active"':''?> ><a href="<?=site_url();?>/project/">All</a></li>
          <li <?=$_REQUEST['status']=='new'?'class="active"':''?>><a href="<?=site_url();?>/project/?status=new">New Project</a></li>
          <li <?=$_REQUEST['status']=='my'?'class="active"':''?>><a href="<?=site_url();?>/project/?status=my">My Project</a></li>
        </ul>
        <form name="sort" id="sort" method="get" action="">
        <select class="cat-filter" name="sortby" id="sortby" onchange="this.form.submit()">
        <option value="">Sort By</option>
          <option value="ASC">A-Z</option>
          <option value="DESC">Z-A</option 
        ></select>
        </form>
        <div class="col-xs-12 bar"></div>
      </div>      
      <?php
	 if (have_posts() )
	 {
		 while ( have_posts() ) { the_post();
	  ?>
      <div class="col-xs-12 col-sm-6 col-md-6 projects-inner">
        <div class="prorwrap">
          <div class="image-pro">
            <?php the_post_thumbnail('medium'); ?>
          </div>
          <h4>
            <?php the_title(); ?>
          </h4>
          <div class="pro-excerpt">
            <?php the_excerpt(); ?>

          </div>
          <p><?php //echo substr(strip_tags(get_the_content(),0,150)); ?></p>
          <div class="col-xs-12 likes-rate"> <a href="<?php the_permalink();?>" class="gen-btn pro-link">Learn More</a> <span class="message"><i class="fa fa-comment-o fa-2x" aria-hidden="true"></i> <?=get_comments_number();?></span> <span class="likes"><i class="fa fa-thumbs-o-up  fa-2x" aria-hidden="true"></i> 131</span> <span class="pro-rating"><?php if(function_exists('the_ratings')) { the_ratings(); } ?></span> </div>
        </div>
      </div>
      
        <?php
			 }
					
		 }
		 else{
			 _e( 'Sorry, no Project were found', 'manual' ); 
		}
		 ?>
      
      <div class="col-xs-12 pro-pagination">
      <?php global $wp_query;
			
			$big = 999999999; // need an unlikely integer
			$translated = __( '', 'mytextdomain' ); // Supply translatable string
			
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages,
					'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
			) );
			// wp_reset_postdata();	?>
      </div>
      <div class="col-xs-12 post-project">
        <?php if ( is_user_logged_in() ) : ?>
        <a href="<?php echo site_url(); ?>/post-new-project" class="gen-btn pro-post">Post New Project</a>
        <?php else : ?>
        <a href="<?php echo site_url(); ?>/signup" class="gen-btn ">Participate</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- container end -->   
</div>
<?php get_footer(); ?>
