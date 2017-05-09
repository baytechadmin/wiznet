<?php

/**
 * Template Name: Resources Single
 *
 */

die('hehe');
get_header();
get_template_part( 'template', 'header' );?>

<div class="resources-sngle">
	<div class="container">
		<div class="row">
			<?php 
                 $args = array( 'post_type' => 'resource', 'posts_per_page' => 1, 'orderby' => 'ID', 'order' => 'ASC' );
                 $the_query = new WP_Query( $args ); 
				 $my_meta = get_post_meta( $post->ID, 'getting-started', true ); 
                 ?>
                         <?php
                 if ( $the_query->have_posts() )
                 {
                     while ( $the_query->have_posts() ) { 
                         $the_query->the_post();
                  ?>
			<div class="col-xs-4 single-img">
				<!--<h3>WIZwiki-W7500</h3>-->
                <h3> <?php the_title(); ?></h3>
               <?php the_post_thumbnail(); ?>
				<!--<img src="/wp-content/uploads/2017/04/u78.png" alt="">-->
			</div>
			<div class="col-xs-4 single-content">
				<h4><?php the_title(); ?></h4>
				<p>
                <?php the_content() ?><!--WIZnet WIZwiki Platform based on WIZnet's MCU. WIZnet WIZwiki-W7500 is a WIZwiki platform board based on W7500. The IOP4IoT W7500 chip is one-chip solution which integrates an ARM Cortex-M0, 128KB Flash and hardwired TCP/IP core for various embedded application platform especially internet of things. If you use WIZwiki-W7500, you will be able to easily develop a prototype. It is compatible with Arduino Shields. This is using the CMSIS-DAP USB and ISP Header easily available firmware writing.--></p>
			</div>
			<div class="col-xs-4 single-get">
				<h4>Getting Started</h4>
				 <?php if(get_field('getting_started_links')): ?>

	<ul>

	<?php while(has_sub_field('getting_started_links')): ?>

		<li>sub_field_1 = <?php the_sub_field('label'); ?>, sub_field_2 = <?php the_sub_field('link'); ?>, etc</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
                 <?php //echo $my_meta; ?>
                 <?php 

$rows = get_field('getting_started_links');
if($rows)
{
	echo '<ul>';

	foreach($rows as $row)
	{
		echo '<li>sub_field_1 = ' . $row['sub_field_1'] . ', sub_field_2 = ' . $row['sub_field_2'] .', etc</li>';
	}

	echo '</ul>';
}
?>
				 	
			</div>

			<div class="col-xs-12 firmware">
				<h4>Firmware</h4>
				<p>W7500 Library</p>
				<p><a href="#">* W7500 Library page</a></p>
				<a href="#" id="buyfir"><img src="/wp-content/uploads/2017/04/u3.png" alt=""></a>
			</div>
			<div class="col-xs-12 features-resources">
				<h4>Features</h4>
				<ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#home">WIZwiki-W7500</a></li>
				    <li><a data-toggle="tab" href="#menu1">External Ethernet PHY</a></li>
				    <li><a data-toggle="tab" href="#menu2">CMSIS-DAP</a></li>
				    <li><a data-toggle="tab" href="#menu3">Connector</a></li>
				    <li><a data-toggle="tab" href="#menu4">ETC</a></li>
				    <li><a data-toggle="tab" href="#menu5">WIZwiki-W7500 Blockdiagram</a></li>
				    <li><a data-toggle="tab" href="#menu6">WIZwiki-W7500 Callout</a></li>
				    <li><a data-toggle="tab" href="#menu7">WIZwiki-W7500 Detail Pinout</a></li>
			  	</ul>
		  		<div class="tab-content">
				    <div id="home" class="tab-pane fade in active">
				      <ul>
				      	<li>ARM Cortex-M0 Core</li>
				      	<li>48MHz, 128KB Flash</li>
				      	<li>16KB RAM</li>
				      	<li>32KB RAM for TCP/IP - Can be extended to system RAM</li>
				      	<li>Hardwired TCP/IP Core</li>
				      	<li>MII Interface</li>
				      	<li>ADC (8)</li>
				      	<li>GPIO (53)</li>
				      	<li>SWD (Serial Wire Debug)</li>
				      	<li>Timer/PWM</li>
				      	<li>UART (3)</li>
				      	<li>SPI (2)</li>
				      	<li>I2C (2)</li>
				      </ul>
				    </div>
				    <div id="menu1" class="tab-pane fade">
				      <h3>Menu 1</h3>
				      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				    </div>
				    <div id="menu2" class="tab-pane fade">
				      <h3>Menu 2</h3>
				      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				    </div>
				    <div id="menu3" class="tab-pane fade">
				      <h3>Menu 3</h3>
				      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				    </div>
				    <div id="menu4" class="tab-pane fade">
				      <h3>Menu 4</h3>
				      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				    </div>
				    <div id="menu5" class="tab-pane fade">
				      <h3>Menu 5</h3>
				      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				    </div>
				    <div id="menu6" class="tab-pane fade">
				      <h3>Menu 6</h3>
				      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				    </div>
				    <div id="menu7" class="tab-pane fade">
				      <h3>Menu 7</h3>
				      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				    </div>
				    
  				</div>
			</div>

			<div class="col-xs-12 ProjectsTechnical">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 makeprojects">
						<h4>Make New WIZwiki-W7500 Projects</h4>
						<ul>
							<li>How to use ARM mbed.org platform</li>
							<li>How to install KEIL uVision5</li>
							<li>How to create KEIL uVision5 new project for W7500</li>
							<li>How to use MDK for W7500 Peripherals Examples</li>
							<li>How to use gcc for W7500 Peripherals Examples</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 technical-ref">
						<h4>Technical References</h4>
						<ul>
							<h4><img src="/wp-content/uploads/2017/04/u143.png" alt="">Datasheet</h4>
							<li><a href="#"><img src="/wp-content/uploads/2017/04/u178.png" alt="">W7500 Documents</a></li>
							<li><a href="#"><img src="/wp-content/uploads/2017/04/u178.png" alt="">IP101GA Datasheet</a></li>
							<li><a href="#"><img src="/wp-content/uploads/2017/04/u178.png" alt="">LPC11U35FHI33/501 Datasheet</a></li>

						</ul>
						<ul>
							<h4><img src="/wp-content/uploads/2017/04/u143.png" alt=""> Schematic</h4>
						</ul>
						<ul>
							<h4><img src="/wp-content/uploads/2017/04/u143.png" alt=""> Part List</h4>
						</ul>
						<ul>
							<h4><img src="/wp-content/uploads/2017/04/u143.png" alt=""> Dimension</h4>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 makeprojectsEtc">
						<h4>Etc.</h4>
							<ul>
								<h4>Serial Port Driver</h4>
								<li><a href="#">ARM mbed Window serial configuration PAGE</a></li>
							</ul>
							<ul>
								<h4>W7500 ISP Program</h4>
								<li><a href="#">7500 ISP Program Download</a></li>
								<li><a href="#">W7500 ISP Program Download in Linux</a></li>
							</ul>
							<ul>
								<h4>Examples Binary</h4>
								<li><a href="#">WIZwiki-W7500 Examples Binary</a></li>
							</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 technical-refSee">
						<h4>See Also</h4>
						<p>

						<span>WizWiki Forum :</span> WIZnet Forum for Technical support and Project shared

						W7500 Documents Download
						</p>
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


<script type="text/javascript">
	// Select all tabs
$('.nav-tabs a').click(function(){
    $(this).tab('show');
})

// Select tab by name
$('.nav-tabs a[href="#home"]').tab('show')

// Select first tab
$('.nav-tabs a:first').tab('show') 

// Select last tab
$('.nav-tabs a:last').tab('show') 

// Select fourth tab (zero-based)
$('.nav-tabs li:eq(3) a').tab('show')
</script>