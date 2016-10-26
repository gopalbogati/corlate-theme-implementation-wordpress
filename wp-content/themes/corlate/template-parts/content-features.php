<section id="feature">
        <div class="container">
           <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <h2><?php the_field('feature_title'); ?></h2>
                <p class="lead"><?php the_field('feature_description'); ?></p>
            </div>

            <div class="row">
                <div class="features">
                <?php if( have_rows('features') ): $i=0;?>
                    <?php while( have_rows('features') ): the_row(); ?>
                    <div class="col-md-4 col-sm-6 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                        <div class="feature-wrap">
                            <?php the_sub_field( 'feature_icon' ); ?>
                            <h2><?php the_sub_field('featured_title');?></h2>
                            <h3><?php the_sub_field('featured_content');?></h3>
                        </div>
                    </div><!--/.col-md-4-->
                     <?php endwhile;  ?>
                         <?php endif;wp_reset_postdata(); ?>

                   
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section>