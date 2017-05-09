<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <?php 
	wp_head(); 
    
	?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet">
	<!--=================== custom style css ================================== -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
</head>

<body <?php body_class(); ?>>

<header class="clearHeader">

	

	<!--=================== top area ================================== -->



	<div class="top-bar">

		

		<div class="topsearch">

			<div class="container">

				<a href="mailto:info@cybermakerspace.com" class="mailto">info@cybermakerspace.com</a>
				<?php global $theme_options; ?>
				<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">

					<div class="seacrh-in">

						<input type="text" value="<?php echo get_search_query(); ?>" placeholder="Need help ? Ask or enter search term" name="s" class="searching">

						<?php
						$display_on_forum_page = '';
						if( $theme_options['manual-trending-post-type-search-status-on-forum-pages'] == false ) {
							if( get_post_type() == 'forum' ) $display_on_forum_page = 1;
						} else {
							 $display_on_forum_page = 2;
						}
						if ( $theme_options['manual-trending-post-type-search-status'] == true && ($display_on_forum_page != 1) ){ 
							echo '<select class="search-expand-types" name="post_type" id="search_post_type">';
							echo ' <option value="">'.$theme_options['manual-post-type-search-text-inital'].'</option>';
							foreach ( $theme_options['manual-search-post-type-multi-select']  as $post_type ) {
								
								if( $post_type == 'manual_ourteam' ||
								   $post_type == 'manual_tmal_block' ||
								   $post_type == 'manual_org_block' ||
								   $post_type == 'manual_hp_block'  ||
								   $post_type == 'reply' ||
								   $post_type == 'topic' ) { continue; }
								   
								if( $post_type == 'attachment' ) { $new_name = $theme_options['manual-post-type-search-dropdown-media'];   
								} else if( $post_type == 'forum' ) { $new_name = $theme_options['manual-post-type-search-dropdown-forums'];   
								} else if( $post_type == 'manual_kb' ) { $new_name = $theme_options['manual-post-type-search-dropdown-kb'];    
								} else if( $post_type == 'manual_faq' ) { $new_name = $theme_options['manual-post-type-search-dropdown-faq'];    
								} else if( $post_type == 'manual_portfolio' ) { $new_name = $theme_options['manual-post-type-search-dropdown-portfolio'];    
								} else if( $post_type == 'manual_documentation' ) { $new_name = $theme_options['manual-post-type-search-dropdown-documentation']; 
								} else if( $post_type == 'page' ) { $new_name = $theme_options['manual-post-type-search-dropdown-page'];   
								} else if( $post_type == 'post' ) { $new_name = $theme_options['manual-post-type-search-dropdown-post'];   
								} else {
									$post_type_label = get_post_type_object( $post_type );
									$new_name = $post_type_label->label;
								}
								
								
								if( isset($_GET['post_type']) && $_GET['post_type'] == $post_type ) $select = 'selected';
								else $select = '';
								
								echo ' <option '.$select.' value="'. $post_type .'">' . $new_name . '</option>';
								
							}
							echo ' </select>';
						} else {
							echo '<input type="hidden" value="" name="post_type" id="search_post_type">';
						}
						?>

						<input type="submit" value="Go!" class="gen-btn">

					</div>

				</form>
				<?php if ( is_user_logged_in() ) : ?>
				
                <a href="<?php echo site_url(); ?>/logout" class="login-register" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/login-icon.png" alt="icon">Logout</a>
                
                <a href="<?php echo site_url(); ?>/dashboard" class="login-register" style="margin-right:10px;">
                <i class="fa fa-user" aria-hidden="true"></i>
				Dashboard</a>

                <?php else : ?>
				<a href="<?php echo site_url(); ?>/signup" class="login-register" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/login-icon.png" alt="icon">Login/Register</a>
				<?php endif; ?>
			</div>

		</div>

		<div class="container">
		
			<div class="row">
				
			
				<div class="logo col-xs-4">
					
					<?php if (is_front_page() ) {?>

						<a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cyber-logo.png" alt="logo"></a>

					<?php }?>	
					
					<?php if (!is_front_page() ) {?>
					<a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wiznet.png" alt="logo"></a>
					
					<?php }?>
				</div>



				<div class="topnavbar col-xs-8">


	  		

					<nav class="navbar navbar-default mynav">

			        

			        <div class="navbar-header">

			            <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

			              <span class="sr-only">Toggle navigation</span>

			              <span class="icon-bar"></span>

			              <span class="icon-bar"></span>

			              <span class="icon-bar"></span>

			            </button>

			        </div>

				                                  

				        <div id="navbar" class="navbar-collapse collapse <?php if ( !is_front_page() ) { ?> nav-transparent<?php  }?>">

				        	<?php
								wp_nav_menu( array(
									'menu'   =>  'header menu',
									//'theme_location' => 'primary',
									'menu_class'     => 'nav navbar-nav',
									'container'		=> 	'none'
								 ) );
							?>

				           
				                                             

				        </div><!--/.nav-collapse -->

				        

			      	</nav>

			    </div>
			</div>
		</div>  <!-- container end -->



	</div><!-- top section end -->





</header>

