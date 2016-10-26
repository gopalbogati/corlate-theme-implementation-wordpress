<section class="service-item" style="background: url(<?php echo esc_url( get_theme_mod( 'site_services_background' ));?> );background-size:cover ;">
    <div class="container">
        <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <h2><?php the_field('services_title'); ?></h2>
            <p class="lead"><?php the_field('services_description'); ?></p>
        </div>

        <div class="row">
            <?php if(have_rows('services')):?>
                <?php while(have_rows('services')):the_row() ;?>
                    <div class="col-sm-6 col-md-4">
                        <div class="media services-wrap wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                            <div class="pull-left">
                                <img class="img-responsive" src="<?php the_sub_field('services_image'); ?>">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading"><?php the_sub_field('services_title'); ?></h3>
                                <p><?php the_sub_field('services_content'); ?></p>
                            </div>
                        </div>
                    </div>     
                <?php endwhile;wp_reset_postdata(); ?>
            <?php  endif; ?>                      
        </div><!--/.row-->
    </div><!--/.container-->
</section>