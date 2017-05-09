<?php




get_header();
get_template_part( 'template', 'header' );?>

<div class="contests-single">
	<div class="container">
		<div class="row">
			<div class="contests-inner">
				<ul class="col-xs-12 contests-ul">
					<li class="active"><a data-toggle="tab" href="#brief">Contest brief</a></li>
					<li><a data-toggle="tab" href="#Participants">Participants</a></li>
					<li><a data-toggle="tab" href="#Ideas">Ideas</a></li>
					<li><a data-toggle="tab" href="#Projects">Projects</a></li>
					<li><a href="<?php echo get_site_url(); ?>/communities">Discussion</a></li>
					<li><a href="<?php echo get_site_url(); ?>/faq">FAQ</a></li>
					<li><a data-toggle="tab" href="#Winner">Winner</a></li>
				</ul>
		
			<div class="col-xs-12 col-sm-8 col-md-8 contests-left">
				<div class="row">
                 <div class="tab-content">

					<?php 
                 if (have_posts() )
                 {

                     while (have_posts() ) { 
                         the_post();
                  ?>
				
					<div id="brief" class="col-xs-12 contests-style tab-pane fade in active">
						<!--<h3>Contest brief</h3>-->
                        <h3><?php the_title(); ?></h3>
                        <?php the_post_thumbnail('full'); ?>
						<!--<img src="/wp-content/uploads/2017/04/u59.jpg" alt="">-->
						<p><?php the_content() ?><!--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.--></p>
					
                    </div>
                    <div id="Participants" class="tab-pane fade">
				      <h3>Participants</h3>
				      <p></p>
				    </div>
                   
                    <div id="Ideas" class="tab-pane fade">
						<h3>Ideas</h3>
                     		<p></p>
					
                    </div>
                      <div id="Projects" class="tab-pane fade">
						<h3>Projects</h3>
                     		<p></p>
					
                    </div>
                     <div id="Winner" class="tab-pane fade">
						<h3>Winner</h3>
                     		<p></p>
					
                    </div>
					<!--<div class="col-xs-12  contests-style">
                   <h3>Rules</h3>
						
						<img src="" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
					</div>
					<div class="col-xs-12  contests-style">
						<h3>How it works</h3>
						<img src="/wp-content/uploads/2017/04/u97.png" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
					</div>

				</div>
-->
			
			<?php
                 }

                 wp_reset_postdata();

             }
			 ?>
             </div>
			</div>
            </div>
			<div class="col-xs-12 col-sm-4 col-md-4 contests-right">
				 <div class="dropdown">
				    <button class="btn btn-default dropdown-toggle btn-block" type="button" data-toggle="dropdown">Participant in this contest
				    </button>
				    <ul class="dropdown-menu">
				      <li><a href="<?php echo site_url(); ?>/signup">Case 1</a></li>
				      <li><a href="<?php echo site_url(); ?>/participate-new-project/">Case 2</a></li>
				    </ul>
				  </div>
				<h4>Contest submission close in 38</h4>
				<small>Ends on March 30, 2017 at 12:00PM PDT</small>
				<!-- h4>Prizes</h4> -->
				<div class="goldmedal">
					<h4>16 Prizes</h4> 
					<!-- <img src="/wp-content/uploads/2017/04/u97.png" alt=""> -->
					<!-- <p>

					 <span class="red-span">Prize Summary:</span> 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. <span class="red-span">Includes</span> :
					</p> -->
					<p>1 First Prize: $3,000</p>
					<p>2 Second Prizes: $2,000  </p>
					<p>3 Third Prizes: $1,000</p>
					<p class="price">4 Honorable Mentions: $500</p>
				</div>
				<!-- <div class="goldmedal silver">
					<h4>Silver Medal</h4>
					<img src="/wp-content/uploads/2017/04/u97.png" alt="">
					<p>

					 <span class="red-span">Prize Summary:</span> 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. <span class="red-span">Includes</span> :
					</p>
					<p>Part Number 1</p>
					<p>Part Number 2</p>
					<p>Part Number 3</p>
					<p class="price">$2,999 Value</p>
				</div>
				<div class="goldmedal Bronze">
					<h4>Bronze Medal</h4>
					<img src="/wp-content/uploads/2017/04/u97.png" alt="">
					<p>

					 <span class="red-span">Prize Summary:</span> 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. <span class="red-span">Includes</span> :
					</p>
					<p>Part Number 1</p>
					<p>Part Number 2</p>
					<p>Part Number 3</p>
					<p class="price">$1,999 Value</p>
				</div> -->
			</div>
		</div>
	</div>
	<!-- container end -->
</div>

<?php get_footer(); ?>