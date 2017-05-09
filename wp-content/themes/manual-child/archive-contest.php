<?php
$ar = array( 'post_type' => 'contest','order' => 'ASC');
query_posts($ar); 
if($_REQUEST['status'] == 'current'){
	$ar = array( 'post_type' => 'contest','meta_key' => 'end_date',	'meta_value' => date( "Ymd" ), 'meta_compare' => '>');
	query_posts($ar); 
}
if($_REQUEST['status'] == 'past'){
	$ar = array( 'post_type' => 'contest','meta_key' => 'end_date',	'meta_value' => date( "Ymd" ), 'meta_compare' => '<');
	query_posts($ar); 
}
get_header();
get_template_part( 'template', 'header' );?>

<div class="contests-page">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 filter-contests">
        <ul class="">
          <li <?=$_REQUEST['status']==''?'class="active"':''?> ><a href="<?=site_url();?>/contest/">All</a></li>
          <li <?=$_REQUEST['status']=='current'?'class="active"':''?>><a href="<?=site_url();?>/contest/?status=current">Current</a></li>
          <li <?=$_REQUEST['status']=='past'?'class="active"':''?>><a href="<?=site_url();?>/contest/?status=past">Past Project</a></li>
        </ul>
      </div>      
      <?php
	 if ( have_posts() )
	 {
		 while ( have_posts() ) { the_post();
	  ?>
      <div class="col-xs-12 col-sm-6 col-md-6 contests-in">
        <div class="whitelist">
          <div class="contestsimg">
            <?php the_post_thumbnail('full'); ?>
          </div>
          <h4>
            <?php the_title(); ?>
          </h4>
          <div class="contests-content">
            <p><?php echo substr(strip_tags(get_the_content(),0,250)); ?></p>
          </div>
          <div class="excerp">
            <p>
              <?php the_excerpt(); ?>
            </p>
          </div>
          
          <div class="date"><?php 
		  $middle = strtotime(get_field('end_date'));           // returns bool(false)

		  echo $new_date = date('F j, Y', $middle);
		  get_field('end_date'); ?></div>
          <?php if ( is_user_logged_in() ) : ?>
          <a class="gen-btn " href="<?php the_permalink();?>">Participate</a>
          <?php else : ?>
          <a href="<?php echo site_url(); ?>/signup" class="gen-btn ">Participate</a>
          <?php endif; ?>
        </div>
      </div>
      <?php
		 }

		 wp_reset_postdata();
	 }
	 ?>
      <div class="col-xs-12 show-all-content"> <!--<a href="<?php //the_permalink();?>" class="gen-btn see-all">Show More</a>--> </div>
    </div>
    <!-- ./ row --> 
    
  </div>
  <!-- ./ container --> 
</div>
<?php get_footer(); ?>
