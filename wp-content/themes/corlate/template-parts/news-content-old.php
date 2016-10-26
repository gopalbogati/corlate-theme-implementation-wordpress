<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
               <div class="tab-wrap"> 
                <div class="media">
                    <div class="parrent pull-left">
                        <ul class="nav nav-tabs nav-stacked">
                            <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Responsive Web Design</a></li>
                            <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Premium Plugin Included</a></li>
                            <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Predefine Layout</a></li>
                            <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Our Philosopy</a></li>
                            <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
                        </ul>
                    </div>
                    <?php

                    $media = new WP_Query( array('post_type'=>'media'));
                    ?>
                    <?php if($media-> have_posts() ) :?>
                    <?php while($media-> have_posts()): $media->the_post(); 

                    ?>

                    <div class="parrent media-body">
                     <div class="tab-content">
                         <?php  $media=array('0' =>'tab1' ,'1' =>'tab2' ,'2' =>'tab3' ,'3' =>'tab3' ,'4' =>'tab4' ,'5' =>'tab5' , ); ?>
                         <?php  foreach ($media as $key => $value) {?>
                         <div class="tab-pane fade" id="<?php $value ?>">
                            <div class="media">
                               <div class="pull-left">
                                <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>">
                            </div>
                            <div class="media-body">
                             <h2><?php  the_title();?></h2>
                             <p><?php  the_content();?></p>
                         </div>
                     </div>
                     <?php }  ?>
                 </div>

             <?php endwhile; wp_reset_postdata(); ?>
         <?php endif; ?>

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
                    <img class="img-responsive img-circle" src="<?php the_post_thumbnail_url(); ?>">
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