<section id="triple_footer_box" class="triple_footer_box <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?> <?php the_sub_field('unique_class');?>">

		<?php if( have_rows('trple_row') ): ?>
		<?php while( have_rows('trple_row') ): the_row(); 
			$title = get_sub_field('title');
			$link = get_sub_field('link');
			$image = get_sub_field('image');
			$bgcol = get_sub_field('background_color');
			$overlay = get_sub_field('overlay');
			$overlay_color = get_sub_field('overlay_color');
		?>

		<a href="<?php the_sub_field('link');?>" style="background-color: <?php echo $bgcol;?>; background-image:url('<?php echo $image;?>');">
				<div class="info">
					<div class="title">
						<h3 ><?php the_sub_field('title'); ?></h3>
						<?php if ( get_sub_field('subtitle')):?><?php the_sub_field('subtitle'); ?><?php endif;?>
					</div>
					<div class="read_more">
						<p><?php the_sub_field('button_text');?></p>  
					</div>        
				</div>

				<?php if ( get_sub_field('overlay')):?>
					<div class="overlay <?php echo $overlay_color;?>"></div>
				<?php endif;?>

		</a>

		<?php endwhile; ?><?php endif; ?>

</section>
