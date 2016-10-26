<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <h2><?php the_field('recentworks_title');?></h2>
            <p class="lead"><?php the_field('recentworks_description');?></p>
        </div>

        <div class="row">
            <?php if(have_rows('recentworks')):?>
                <?php while(have_rows('recentworks')):the_row() ;?>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php  the_sub_field('rowwork_image1');?>" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                <h3><a href="#"><?php the_sub_field('rowwork_title');?></a></h3>
                                    <p><?php the_sub_field('rowwork_content');  ?></p>
                                    <a class="preview" href="<?php  the_sub_field('rowwork_image2');?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div> 

                <?php endwhile;wp_reset_postdata(); ?>
            <?php  endif; ?>
        </div><!--/.row-->
    </div><!--/.container-->
</section>