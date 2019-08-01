<section class="txt-block <?php if ( get_sub_field('border_options' )) : ?><?php the_sub_field('border_options');?><?php endif; ?> <?php if ( get_sub_field('margins_options' ) ) : ?><?php the_sub_field('margins_options');?><?php endif; ?> <?php if ( get_sub_field('background_image') || get_sub_field('background_color')) :?>white_out<?php endif; ?> <?php if ( get_sub_field('unique_class' ) ) : ?><?php the_sub_field('unique_class');?><?php endif; ?>" style="<?php if ( get_sub_field('background_image') ):?>background: url('<?php the_sub_field('background_image');?>') no-repeat; background-position: 50% 50%; background-size:cover;<?php endif; ?> <?php if ( get_sub_field('background_color') ):?>background-color: <?php the_sub_field('background_color');?>;<?php endif; ?> <?php if ( get_sub_field('custom_css' )) : ?><?php the_sub_field('custom_css');?><?php endif; ?>">

	<div class="container <?php if ( get_sub_field('padding_options' ) ) : ?><?php the_sub_field('padding_options');?><?php endif; ?>">

		<div class="text <?php the_sub_field('width');?> <?php if ( get_sub_field('text_align') == 'center' ) { echo 'align_center'; }
			elseif ( get_sub_field('text_align') == 'right' ) { echo 'align_right'; }
			elseif ( get_sub_field('text_align') == 'justify' ) { echo 'align_justify'; }
			else { echo 'align_left'; }?>">

			<?php if( get_sub_field('column_title') ): ?><h2 class="column_title"><?php the_sub_field('column_title');?></h2><?php endif;?>
			<?php if( get_sub_field('column_subtitle') ): ?><h3 class="column_subtitle"><?php the_sub_field('column_subtitle');?></h3><?php endif;?>

			<div class="text-block <?php the_sub_field('column_options');?> <?php if ( get_sub_field('text_align') == 'center' ) { echo 'align_center'; }
			elseif ( get_sub_field('text_align') == 'right' ) { echo 'align_right'; }
			elseif ( get_sub_field('text_align') == 'justify' ) { echo 'align_justify'; }
			else { echo 'align_left'; }?>">
					<?php if ( get_sub_field('content_block')) : ?>
						<?php the_sub_field('content');?>
					<?php else : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content();?>
						<?php endwhile; ?>

					<?php endif;?>
			</div>

			<?php if( get_sub_field('column_footnote') ): ?>
	        	<p class="column_footnote"><?php the_sub_field('column_footnote');?></p>
			<?php endif;?>

			<?php if ( get_sub_field('button_confirm') ):?>
	        <a class="button <?php if ( get_sub_field('button_color')) : ?><?php the_sub_field('button_color' );?><?php endif; ?>" href="<?php if ( get_sub_field('external_link')):?><?php the_sub_field('external_link');?><?php else : ?><?php the_sub_field('button_link');?><?php endif;?>">
	        	<?php if ( get_sub_field('button_text')):?><?php the_sub_field('button_text');?><?php else : ?>Find Out More<?php endif ;?>
	        </a>
	    	<?php endif ;?>
		</div>
	</div>
 
</section>
