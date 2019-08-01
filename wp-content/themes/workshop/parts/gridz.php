<section class="gridz <?php if ( get_sub_field('margins_options')):?><?php the_sub_field('margins_options');?><?php endif;?> <?php if ( get_sub_field('padding_options')):?><?php the_sub_field('padding_options');?><?php endif ;?> <?php if ( get_sub_field('unique_class')):?><?php the_sub_field('unique_class');?><?php endif ;?>" style="<?php if ( get_sub_field('background_color') ):?>background-color: <?php the_sub_field('background_color');?><?php endif ;?>;">

	<div class="bg" style="<?php if ( get_sub_field('background_image') ) :?>background: url('<?php the_sub_field('background_image');?>') no-repeat; background-size:cover;<?php endif ;?> background-attachment:<?php the_sub_field('background_attachment');?>;"></div>

    <div class="grid_box <?php if ( get_sub_field('grid_class')):?><?php the_sub_field('grid_class');?><?php endif ;?> <?php if ( get_sub_field('grid_height')):?><?php the_sub_field('grid_height');?><?php endif ;?> <?php if ( get_sub_field('text_color')):?><?php the_sub_field('text_color');?><?php endif ;?>">

		<?php if( have_rows('grid_box') ): ?>
		<?php while( have_rows('grid_box') ): the_row();
			$title = get_sub_field('title');
			$link = get_sub_field('link');
			$cta = get_sub_field('button_text');
			$image = get_sub_field('image');
			$bgcol = get_sub_field('background_color');
			$content = get_sub_field('content');
			$opacity = get_sub_field('overlay_opacity');
			$overlaycol = get_sub_field('overlaycol');
		?>

		<a class="grid" style="background-color: <?php echo $bgcol;?>;" href="<?php the_sub_field('link');?>">

			<div class="image" style="<?php if ( get_sub_field('image') ) :?>background:url('<?php echo $image;?>') no-repeat; background-size:cover;<?php endif ;?>;">
			</div>

			<div class="content">
				<?php if ( get_sub_field('title')):?>
				<div class="title">
					<h3><?php echo $title;?></h3>
					<?php echo $content;?>
				</div>

				<?php endif; ?>
				<?php if ( get_sub_field('cta')):?>
					<div class="read_more">
						<p><?php echo $cta;?></p>
					</div> 
				<?php endif; ?>         
			</div>

			<?php if ( get_sub_field('overlay')):?>
			<div class="overlay" style="opacity:<?php echo $opacity;?>; background-color:<?php echo $overlaycol;?>"></div>
			<?php endif;?>
		</a>

		<?php endwhile; ?><?php endif; ?>
    </div>

</section>
