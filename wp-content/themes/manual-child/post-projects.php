<?php

/**
 * Template Name: Post Projects
 *
 */


get_header();
get_template_part( 'template', 'header' );?>

<div class="resources">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 projects-form">
          <?php echo do_shortcode('[wpuf_form id="1251"]');?>
				<!--<form action="">
					<label>Title *</label>
					<input type="text" name="" id="input"  value="" required="required" pattern="" title="">
					<label>Representative image *</label>
					<input type="file" name="" id="input"  value="" required="required" pattern="" title="">
					<label>Catgory *</label>
					<select>
						<option>Catgories</option>
					</select>
					<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  					<script>tinymce.init({ selector:'textarea' });</script>
  					<textarea>Next, get a free TinyMCE Cloud API key!</textarea>

  					<div class="col-xs-12 col-sm-12 btn-wrap">
	  					<div class="row">
	  						<button type="button" class="btn btn-danger">Cancel</button>
  							<button type="button" class="btn btn-default">Submit</button>
	  					</div>
  						
  					</div>
				</form>-->
				
			</div>
			
		</div>
	</div>
	<!-- container end -->
</div>

<?php get_footer(); ?>