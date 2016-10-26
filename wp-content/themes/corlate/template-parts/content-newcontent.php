<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
             <div class="tab-wrap"> 

                <div class="media">
                   <div class="parrent pull-left">
                    <ul class="nav nav-tabs nav-stacked">
                        <?php 
                        $tabcount=0;
                        if( have_rows( 'we_do' )): while( have_rows( 'we_do' )): the_row(); ?>                            
                        <li class="<?php echo ( $tabcount == 1 ? 'active' : ''); ?>"><a href="#tab<?php echo $tabcount++; ?>" data-toggle="tab" class="analistic-01"><?php the_sub_field( 'we_do_title' ); ?></a></li>
                    <?php endwhile; endif; ?>
                </ul>
            </div>
            <div class="parrent media-body">
            <div class="tab-content">
                    <?php 
                    $tabcount=0;
                    if( have_rows( 'we_do' )): while( have_rows( 'we_do' )): the_row(); ?> 
                    <div class="tab-pane fade <?php echo ( $tabcount == 1 ? 'active in' : ''); ?>" id="tab<?php echo $tabcount++; ?>">
                        <div class="media">
                         <div class="pull-left">
                            <img class="img-responsive" src="<?php the_sub_field( 'we_do_featured_image_url' ); ?>">
                        </div> 
                        <div class="media-body">
                           <h2>Adipisicing elit</h2>
                           <p><?php the_sub_field( 'we_do_description' ); ?></p>
                       </div> 
                   </div>
               </div>
           <?php endwhile; endif; ?>

       </div> <!--/.tab-content-->  
   </div> <!--/.media-body--> 
</div> <!--/.media-->     
</div><!--/.tab-wrap-->               
</div><!--/.col-sm-6-->

<div class="col-xs-12 col-sm-4 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
    <div class="testimonial">
        <h2>Testimonials</h2>

        <?php
        $Testimonials = new WP_Query( array('post_type'=>'testimonial'));
        ?>
        <?php if($Testimonials-> have_posts() ):?>
            <?php while($Testimonials-> have_posts()): $Testimonials->the_post(); 

            ?>
            <div class="media testimonial-inner">
                <div class="pull-left">
                    <img class="img-responsive img-circle" src="<?php the_post_thumbnail_url(array(40,40)); ?>">
                </div>
                <div class="media-body">
                    <p><?php the_title(); ?></p>
                    <span><?php  the_excerpt(); ?></span>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    <?php endif; ?>

</div>
</div>

</div><!--/.row-->
</div><!--/.container-->
</section>