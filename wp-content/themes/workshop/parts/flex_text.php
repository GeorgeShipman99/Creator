<section class="flex-text <?php if ( get_sub_field('margins_options' ) ) : ?><?php the_sub_field('margins_options');?><?php endif; ?> <?php if ( get_sub_field('background_image') || get_sub_field('background_color')) :?>white_out<?php endif; ?> <?php if ( get_sub_field('unique_class' ) ) : ?><?php the_sub_field('unique_class');?><?php endif; ?>" style="<?php if ( get_sub_field('background_image') ):?>background: url('<?php the_sub_field('background_image');?>') no-repeat; background-position: 50% 50%; background-size:cover;<?php endif; ?> <?php if ( get_sub_field('background_color') ):?>background-color: <?php the_sub_field('background_color');?>;<?php endif; ?> <?php if ( get_sub_field('custom_css' )) : ?><?php the_sub_field('custom_css');?><?php endif; ?>">

    <div class="container <?php if ( get_sub_field('padding_options' ) ) : ?><?php the_sub_field('padding_options');?><?php endif; ?>">

    	<?php if ( get_sub_field('title') ) : ?><h2 class="column_title"><?php the_sub_field('title');?></h2><?php endif; ?>
    	<?php if ( get_sub_field('subtitle') ) : ?><p class="column_subtitle"><?php the_sub_field('subtitle');?></p><?php endif; ?>

		<?php if( have_rows('flex_blocks') ): ?>

		<div class="cont">
		
			<?php while( have_rows('flex_blocks') ): the_row(); 
				$title = get_sub_field('title');
				$image = get_sub_field('image');
				$content = get_sub_field('content');
			?>
			<article class="flex-block">
				<?php if (get_sub_field('image')):?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>" /><?php endif;?>
				<?php if (get_sub_field('title')):?><h3><?php echo $title;?></h3><?php endif;?>
				<?php if (get_sub_field('content')):?><?php echo $content;?><?php endif;?>
			</article>
     
	<?php endwhile; ?>
		</div>
	<?php endif; ?>

    </div>

</section>