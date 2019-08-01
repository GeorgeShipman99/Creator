<section id="txt-block" class="txt-block jobs_block <?php if ( get_sub_field('margins_options' ) ) : ?><?php the_sub_field('margins_options');?><?php endif; ?> <?php if ( get_sub_field('unique_class' ) ) : ?><?php the_sub_field('unique_class');?><?php endif; ?>" style="<?php if ( get_sub_field('custom_css' )) : ?><?php the_sub_field('custom_css');?><?php endif; ?>">

	<div class="container <?php if ( get_sub_field('padding_options') ) : ?><?php the_sub_field('padding_options');?><?php endif; ?>">

		<div class="text nearly"> 
			
			<?php if( get_sub_field('column_title') ): ?>
	        <h2 class="column_title"><?php the_sub_field('column_title');?></h2>
	        <?php endif;?>

			<div class="text-block <?php the_sub_field('column_options');?>">
				<h3>Job Description</h3>
				<?php the_sub_field('job_content');?>

				<?php if( have_rows('job_duties') ): ?>
					<hr/>
					<h3>Job Requirements</h3>
					<ul>
					<?php while( have_rows('job_duties') ): the_row(); 
					$list = get_sub_field('list_item'); ?>
						<li><?php echo $list;?></li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>

				<?php if( get_sub_field('job_location') ): ?>
					<hr/>
					<h3>Location</h3>
					<?php the_sub_field('job_location');?>
				<?php endif;?>
			</div>

			<?php if( get_sub_field('column_footnote') ): ?>
	        	<p class="column_footnote"><?php the_sub_field('column_footnote');?></p>
			<?php endif;?>

		</div>
	</div>
</section>
