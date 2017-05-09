</div>
</div>
<div class="register">

      <div class="container">

        <div class="row">

          <div class="col-xs-12">
			<?php if ( is_user_logged_in() ) : ?>
                <a href="<?php echo site_url(); ?>/logout" class="gen-btn register-btn" >Logout</a>
                <?php else : ?>
				<h1>Be part of the family</h1>

            		<a href="<?php echo site_url(); ?>/signup" class="gen-btn register-btn">Register Now</a>
				<?php endif; ?>
            
            

          </div>

        </div><!-- ./ row -->

      </div><!-- ./ container -->

    </div>

<!--=================== footer area ================================== -->



  

  <footer>
<!--     <a href="<?php //echo site_url(); ?>/contact" class="gen-btn contact-absolute">Contact Us</a>
 -->
      <div class="dropdown contact-absolute">
        <button class="gen-btn  dropdown-toggle " type="button" data-toggle="dropdown">Contact Us  </button>
        <ul class="dropdown-menu">
          <li>
            <form>
              <input type="text" name=""  class="form-control" value="" required="required" title="" placeholder="Name *"> 
               <input type="text" name=""  class="form-control" value="" required="required" title="" placeholder="Email *"> 
                <input type="text" name=""  class="form-control" value="" required="required" title="" placeholder="Phone *">
                <select name=""  class="form-control" required>
                    <option value="">What is this regarding to </option>
                    <option value="">General qustions</option>
                    <option value="">partnership</option>
                  </select>  
                  <textarea cols="4" rows="4" class="form-control" placeholder="Message"></textarea>
                  <button type="submit" class="gen-btn pull-right">Send</button>
            </form>
          </li>
        </ul>
      </div>

    <span id="top-link-block">

      <a href="#top" class="well well-sm" id="backtotop"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">

        <i class="fa fa-angle-up" aria-hidden="true"></i>

      </a>

    </span>

    <div class="container">

      <div class="row">

        <p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php echo site_url(); ?>">www.cybermarkerspace.com.</a>All Right Reserved</p>

        <?php
          wp_nav_menu( array(
            'menu'   =>  'Footer Menu',
            'theme_location' => 'primary',
            'menu_class'     => 'footer-nav',
            'container'   =>  'none'
           ) );
        ?>
       
         <?php dynamic_sidebar( 'footer-box-1' ); ?>
      </div><!-- ./ row -->

    </div><!-- ./ container -->

  </footer>








  <!--=================== custom js plus library ======================== -->


  
   <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.1.4.js"></script>
 
   <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.js"></script> 

   <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.backTop.min.js"></script> 

   <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
   
   <script type="text/javascript">
     
      $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
       //console.log(scroll);
      if (scroll >= 200) {
          //console.log('a');
          $(".top-bar").addClass("fixtop-bar");
      } else {
          //console.log('a');
          $(".top-bar").removeClass("fixtop-bar");
      }

      });

    </script>

<?php 
wp_footer(); 
?>
</body></html>