   <section id="feature" class="transparent-bg">
    <div class="container">
     <div class="center wow fadeInDown">
        <h2><?php  the_field('services_title');?></h2>
        <p class="lead"><?php  the_field('services_description');?></p>
    </div>

    <div class="row">
        <div class="features">
            <?php if( have_rows('services_section') ): $i=0;?>
                <?php while( have_rows('services_section') ): the_row(); ?>
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <?php  the_sub_field('services_section_fa_icons');?>
                            <h2><?php  the_sub_field('services__section_title');?></h2>
                            <h3><?php  the_sub_field('service_section_description');?></h3>
                        </div>
                    </div><!--/.col-md-4-->
                <?php endwhile;endif;?>
                
            </div><!--/.services-->
        </div><!--/.row--> 


        <div class="get-started center wow fadeInDown">
            <h2><?php  the_field('get_started_title');?></h2>
            <p class="lead"><?php  the_field('get_start_description');?></p>
            <div class="request">
                <h4><?php the_field('get_start_quote');?></h4>
            </div>
        </div><!--/.get-started-->

        <div class="clients-area center wow fadeInDown">
            <h2><?php  the_field('client_title');?></h2>
            <p class="lead"><?php  the_field('client_description');?></p>
        </div>



        <div class="row"><?php if( have_rows('client_portion') ): ?>
            <?php while( have_rows('client_portion') ): the_row(); ?>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="<?php  the_sub_field('client_image');?>" class="img-circle" alt="">
                        <h3><?php  the_sub_field('about_client');?></h3>
                        <h4><?php  the_sub_field('client_post');?></h4>
                    </div>
                </div>
            <?php endwhile;endif; ?>
            
        </div>
     </div>
</section>