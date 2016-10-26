<section id="main-slider" class="no-margin">
	<div class="carousel slide">

		<ol class="carousel-indicators">
			<?php
			$count_posts = wp_count_posts('slider');
			for ($i=0; $i < $count_posts->publish; $i++){?>
			<li data-target="#main-slider" data-slide-to="<?php echo $i; ?>" class=" <?php echo ( $i == 0 ? 'active' : ''); ?>"></li>
			<?php }?>
		</ol>
		<div class="carousel-inner">

			<?php
			$slide_query = new WP_Query( array('post_type'=>'slider','post_per_page'=>"8"));
			?>
			<?php if($slide_query-> have_posts() ): $i=0;
			?>
			<?php while($slide_query-> have_posts()): $slide_query->the_post(); 

			?>
			<?php


			if($i>0){

				$class ="item";
				$i++;
			}else{
				$class = "item active";
				$i++;
			}
			?>

			<div class="<?php echo $class;?>" style="background-image: url(<?php the_field('slider_image'); ?>)">
				<div class="container">
					<div class="row slide-margin">
						<div class="col-sm-6">
							<div class="carousel-content">
								<h1 class="animation animated-item-1"><?php the_title();?></h1>
								<h2 class="animation animated-item-2"><?php the_content('<span class="btn-slide animation animated-item-3">Read More</span>'); ?></h2>
								<!-- <a class="btn-slide animation animated-item-3" href="#">Read More</a> -->
							</div>
						</div>

						<div class="col-sm-6 hidden-xs animation animated-item-4">
							<div class="slider-img">
								<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive">
							</div>
						</div>

					</div>
				</div>
			</div><!--/.item-->
		<?php endwhile; wp_reset_postdata(); ?>
	<?php endif; ?>

</div><!--/.carousel-inner-->
</div><!--/.carousel-->
<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
	<i class="fa fa-chevron-left"></i>
</a>
<a class="next hidden-xs" href="#main-slider" data-slide="next">
	<i class="fa fa-chevron-right"></i>
</a>
</section>



