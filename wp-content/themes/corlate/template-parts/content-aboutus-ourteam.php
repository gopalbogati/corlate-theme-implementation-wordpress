<div class="team">
	<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
		<h2><?php the_field('team_title');?></h2>
		<p class="lead"><?php the_field('team_description');?>
		</div>

		<div class="row clearfix">
			<?php if( have_rows('team') ): ?>
				<?php while( have_rows('team') ): the_row(); ?>
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown;">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="<?php the_sub_field('team_featured_image');?>" alt=""></a>
								</div>
								<div class="media-body">
									<h4><?php the_sub_field('team_title');?></h4>
									<h5><?php the_sub_field('team_content');?></h5>

									<ul class="tag clearfix">
										<li class="btn"><?php the_sub_field('tag1');?></li>
										<li class="btn"><?php the_sub_field('tag2');?></li>
										<li class="btn"><?php the_sub_field('tag3');?></li>
										<li class="btn"><?php the_sub_field('tag4');?></li>
									</ul>
									
									<ul class="social_icons">
										<?php   $fb = get_theme_mod("facebook_setting"); 
										$tweet = get_theme_mod("twitter_setting"); 
										$gmail= get_theme_mod("gmail_setting");?>
										<?php if(!empty($fb)): ?>
										<li><a href="<?php echo $fb; ?>"><i class="fa fa-facebook"></i></a></li><?php endif;?>
										<?php if(!empty($tweet)): ?>
										<li><a href="<?php echo $tweet; ?>"><i class="fa fa-twitter"></i></a></li> <?php endif;?>
										<?php if(!empty($gmail)): ?>
										<li><a href="<?php echo $gmail; ?>"><i class="fa fa-google-plus"></i></a></li><?php endif;?>
									</ul>
								</div>
							</div><!--/.media -->
							<p><?php  the_sub_field('full_content');?></p>
						</div>
					</div><!--/.col-lg-4 -->
				<?php endwhile;endif;?>

				



			</div> <!--/.row -->
			<div class="row team-bar">
				<div class="first-one-arrow hidden-xs">
					<hr>
				</div>
				<div class="first-arrow hidden-xs">
					<hr> <i class="fa fa-angle-up"></i>
				</div>
				<div class="second-arrow hidden-xs">
					<hr> <i class="fa fa-angle-down"></i>
				</div>
				<div class="third-arrow hidden-xs">
					<hr> <i class="fa fa-angle-up"></i>
				</div>
				<div class="fourth-arrow hidden-xs">
					<hr> <i class="fa fa-angle-down"></i>
				</div>
			</div> <!--skill_border-->       

			
			</div><!--section-->
			<div class="row clearfix">   
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInUp;">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man3.jpg" alt=""></a>
								</div>

								<div class="media-body">
									<h4>Jhon Doe</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInUp;">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man4.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Jhon Doe</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
				</div>