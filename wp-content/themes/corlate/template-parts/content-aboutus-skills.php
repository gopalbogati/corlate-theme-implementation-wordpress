<div class="skill-wrap clearfix">
			
				<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
					<h2><?php  the_field('skill_title'); ?></h2>
					<p class="lead"><?php the_field('skills_description');?></p>
				</div>
				
				<div class="row">
		<?php if(have_rows('our_skills')):while(have_rows('our_skills')):the_row();?>
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown;">
							<div class="<?php the_sub_field('title');?>-skill">               
								<p><em><?php the_sub_field('width');?></em></p>
								<p><?php the_sub_field('title');?></p>
							</div>
						</div>
					</div>
					<?php endwhile;endif?>
					 
					</div>
					
				</div>
	
            </div>