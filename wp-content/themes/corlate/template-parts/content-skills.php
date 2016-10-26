<section id="middle">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <div class="skill">
          <h2><?php the_field('skills_title'); ?></h2>
          <p><?php the_field('skills_width'); ?></p>
          <?php if(have_rows('middle')):$count=1;?>
            <?php while(have_rows('middle')):the_row() ;?>

              <div class="progress-wrap">
                <h3><?php the_sub_field('title'); ?></h3>
                <div class="progress">
                <?php 
                ?>
                  <div class="progress-bar color<?php echo $count++;?>" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php the_sub_field('width'); ?>">
                    <span class="bar-width"><?php the_sub_field('width'); ?></span>
                  </div>
                </div>
              </div>
            <?php endwhile;wp_reset_postdata(); ?>
          <?php  endif; ?>
        </div>
        

      </div><!--/.col-sm-6-->
     <div class="col-sm-6 wow fadeInDown">
     <?php 
      if(have_rows('skills')):
      $class=1;
       while (have_rows('skills')):the_row();
         $class++;

     ?>
                    <div class="accordion">
                        <h2><?php  the_sub_field('people_say');?></h2>
                        <div class="panel-group" id="accordion1">
                         <div class="panel panel-default">
                            <div class="panel-heading <?php echo $class == 1?'active':''; ?>">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1"><?php the_sub_field('people_description'); ?>
                                 <?php the_sub_field('people_image'); ?>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">Two
                              <div class="panel-body"> 
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="<?php the_sub_field('people_say_images'); ?>">
                                        </div>
                                        <div class="media-body">
                                             <h4><?php the_sub_field('people_say_title');  ?></h4>
                                             <p><?php the_sub_field('people_title_description'); ?></p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>
 <?php endwhile;wp_reset_postdata(); ?>
          <?php  endif; ?>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

     
 </div>
</div>

</div><!--/.row-->
</div><!--/.container-->
</section>