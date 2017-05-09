<?php

/**
 * Template Name: Login Register
 *
 */


get_header();
get_template_part( 'template', 'header' );?>

<div class="resources">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8 register-form">
           
				<h3>First time visit us?</h3>
				
               <?php  echo do_shortcode('[ultimatemember form_id=1099]'); ?>
               
					<!--<input type="text" name="" id="" value="First Name *" required="required" pattern="" title="">
					<input type="text" name="" id="" value="Last Name *" required="required" pattern="" title="">
					<input type="text" name="" id="" value=" Email*" required="required" pattern="" title="">
					<input type="number" placeholder="Phone" name="" id="" value=" Phone" required="required" pattern="" title="">
					<input type="text" name="" id="" value="Info" required="required" pattern="" title="">
					<input type="text" name="" id="" value="Info" required="required" pattern="" title="">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							I agree with <a href="<?php echo site_url(); ?>/term-of-use"> Term of Use</a>
							and 
							<a href="<?php echo site_url(); ?>/privacy-policy">Privacy Policy</a>
						</label>
					</div>
					<button type="submit" class="gen-btn">Register</button>
				</form>-->
			</div>

			<div class="col-xs-12 col-sm-4 col-md-4 sidebar-custom">
            
				<h3>Returning Users?</h3>
                
                <?php 
				if($_REQUEST['failed'] == 1)
				{
					echo "<p class='error'>Please check your credentials and try again</p>";
				}
				//echo do_shortcode('[ultimatemember form_id=1101]');
				//echo do_shortcode('[cflrf_custom_login_form]');
				
				?><?php wp_login_form(); ?>
                <?php //echo do_shortcode('[bbp-login]');?>
				<!--<form action="">[bbp-login]
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
					<a href="<?php echo site_url(); ?>/signup" class="gen-btn">Sign In</a>
				</form>-->
			</div>
		</div>
	</div>
	<!-- container end -->
</div>
<script type="text/javascript">
$('.um-field-agree_on_terms span.um-field-checkbox-state').click(function(){

alert(this.value);	
})
</script>
<?php get_footer(); ?>

