<?php

/* Template Name:  portfolios page*/
get_header();?>
<section id="portfolio">
	<div class="container">
		<div class="center">
			<h2><?php  the_field('portfolio_title');?></h2>
			<p class="lead"><?php the_field('portfolios_description'); ?></p>
		</div>
		<ul class="portfolio-filter text-center">
			<li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
			<?php 

			$categories = get_terms( 'portfolioslug');
			// print_r($categories);
			// die();
			 foreach ($categories as $cat) {
			 ?>
			<li><a class="btn btn-default" href="#" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a></li>
			<?php } ?>		

		</ul><!--/#portfolio-filter-->

		<div class="row">
			<div class="portfolio-items">
			<?php 
				$postArr = array('post_type' =>'portfolios', );
				$postList = new WP_Query( $postArr ); 
				// echo '<pre>';
				// print_r($postList);
				// echo '</pre>';
				// die();
				if( $postList->have_posts()): while( $postList->have_posts() ): $postList->the_post();

				$postCat = get_the_terms( get_the_ID(),'portfolioslug' );
				if($postCat){
				$postCategory = '';
				foreach ($postCat as $cat) {
					
					$postCategory .= $cat->slug.' ';
					}
				}
				?>
				<div class="portfolio-item <?php echo $postCategory; ?> col-xs-12 col-sm-4 col-md-3">
					<div class="recent-work-wrap">
						<?php if( has_post_thumbnail()){ 
							$thumb_uri = get_the_post_thumbnail_url();?>
							<img class="img-responsive" src="<?php echo $thumb_uri;?>" alt=""> 
						 <?php } ?>
						<div class="overlay">
							<div class="recent-work-inner">
								<h3><a href="#"><?php the_title(); ?></a></h3>
								<p><?php the_content(); ?></p>
								<?php if( has_post_thumbnail()){ 
									$thumb_uri = get_the_post_thumbnail_url();?>
									<a class="preview" href="<?php echo $thumb_uri;?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
								 <?php } ?>
							</div> 
						</div>
					</div>
				</div><!--/.portfolio-item-->
			<?php endwhile; wp_reset_postdata(); endif; ?>


			</div>
		</div>
	</div>
</section><!--/#portfolio-item-->
<?php  get_footer();?>