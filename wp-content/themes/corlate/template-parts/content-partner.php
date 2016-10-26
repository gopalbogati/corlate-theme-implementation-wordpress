<section id="partner" style="background: url(<?php echo esc_url( get_theme_mod( 'site_partners_background' ));?> ) 50% 50% no-repeat;">
   <div class="container">
    <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <h2><?php the_field('partners_title');  ?></h2>
        <p class="lead"><?php the_field('partners_description'); ?></p>
    </div>    

    <div class="partners">
        <ul>  <?php if(have_rows('partners')):?>
            <?php while(have_rows('partners')):the_row() ;?>
                <li> <a href="#"><img class="img-responsive wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?php  the_sub_field('partners_image'); ?>" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown;"></a></li>
            <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>            
    </ul>
</div>        
</div><!--/.container-->
</section>