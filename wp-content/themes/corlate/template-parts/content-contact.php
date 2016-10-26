<section  style="background: url(<?php echo esc_url( get_theme_mod( 'site_contact_background' ));?> ) 80% 80% no-repeat;padding: 50px 0;">


    <div class="container">
        <div class="row">
            <div class="col-sm-8">
               
                    <div class="media contact-info wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                        <div class="pull-left">
                           <?php  the_field('contact_icons');?>
                        </div>
                        <div class="media-body">
                            <h2><?php  the_field('contact_title');?></h2>
                            <p><?php  the_field('contact_description');?></p>
                        </div>
                    </div>
               
        </div>
    </div>
</div><!--/.container-->    
</section>