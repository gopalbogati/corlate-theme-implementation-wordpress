<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
	<h2><?php the_field('slider_heading'); ?></h2>
	<p class="lead"><?php the_field('slider_description'); ?></p>
</div>

<div id="about-slider">
	<div id="carousel-slider" class="carousel slide" data-ride="carousel">
		<?php
		$i=0; 
		$count_posts = wp_count_posts('aboutslider');
		// print_r($count_posts->publish);
		// die;
		?>
		<ol class="carousel-indicators visible-xs">
			<?php for ($i=0; $i < $count_posts->publish; $i++){?>
			<li data-target="#carousel-slider" data-slide-to="<?php echo $i; ?>" <?php echo( $i == 0 ? 'class="active"' : ''); ?>></li>
			<?php }?>
		</ol>

		<div class="carousel-inner">
			<?php
			$count=0;
			$slide_query = new WP_Query( array('post_type'=>'aboutslider'));
			if($slide_query-> have_posts() ): 
				while($slide_query-> have_posts()): $slide_query->the_post(); ?>
			<div class="item <?php 	echo( $count++ == 0 ? 'active' : ''); ?>">
				<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt=""> 
			</div>
		<?php  endwhile;wp_reset_postdata();endif;?>
	</div>  

	<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
		<i class="fa fa-angle-left"></i> 
	</a>

	<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
		<i class="fa fa-angle-right"></i> 
	</a>

</div> 
</div>