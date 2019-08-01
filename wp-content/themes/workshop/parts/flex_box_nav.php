<section id="flex_box_nav" class="flex_box_nav <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?> <?php the_sub_field('unique_class');?>" style="<?php if ( get_sub_field('heading_box_color') ):?>background-color: <?php the_sub_field('heading_box_color');?><?php endif ;?>;">

	<div class="bg" style="<?php if ( get_sub_field('background_image') ) :?>background: url('<?php the_sub_field('background_image');?>') no-repeat; background-size:cover;<?php endif ;?> background-attachment:<?php the_sub_field('background_attachment');?>;"></div>

    <div class="nav_box first_box">
		<?php if( have_rows('first_nav_box') ): ?>
		<?php while( have_rows('first_nav_box') ): the_row(); 
			$title = get_sub_field('title');
			$link = get_sub_field('link');
			$image = get_sub_field('image');
			$bgcol = get_sub_field('background_color');
			$content = get_sub_field('content');
		?>

		<a class="article" style="background-color: <?php echo $bgcol;?>; background-image:url('<?php echo $image;?>');" href="<?php the_sub_field('link');?>">
				<div class="info">
					<div class="title">
						<h3><?php the_sub_field('title'); ?></h3>
					</div>
					<div class="read_more">
						<p><?php the_sub_field('button_text');?></p>
					</div>          
				</div>
				<?php if ( get_sub_field('overlay')):?><div class="overlay"></div><?php endif;?>
		</a>

		<?php endwhile; ?><?php endif; ?>
    </div>

</section>
