<section class="video_box <?php if ( get_sub_field('margins_options' ) ) : ?><?php the_sub_field('margins_options');?><?php endif; ?> <?php if (get_sub_field('background_color')) :?>white_out<?php endif; ?> <?php if ( get_sub_field('unique_class' ) ) : ?><?php the_sub_field('unique_class');?><?php endif; ?>" style="<?php if ( get_sub_field('background_image') ) :?>background: url('<?php the_sub_field('background_image');?>') no-repeat; background-size:cover;<?php endif ;?> background-attachment:<?php the_sub_field('background_attachment');?>;<?php if ( get_sub_field('background_color') ):?>background-color: <?php the_sub_field('background_color');?>;<?php endif; ?> <?php if ( get_sub_field('custom_css' )) : ?><?php the_sub_field('custom_css');?><?php endif; ?>">
	
	<div class="container">

		<div class="video_wrapper <?php the_sub_field('width_options');?> <?php if ( get_sub_field('padding_options' ) ) : ?><?php the_sub_field('padding_options');?><?php endif; ?> <?php if ( get_sub_field('text_align') == 'center' ) { echo 'align_center'; }
			elseif ( get_sub_field('text_align') == 'right' ) { echo 'align_right'; }
			elseif ( get_sub_field('text_align') == 'justify' ) { echo 'align_justify'; }
			else { echo 'align_left'; }?>">

		<?php if( get_sub_field('column_title') ): ?>
        	<h2><?php the_sub_field('column_title');?></h2>
		<?php endif;?>

			<div class="video_container">

				<iframe src="<?php the_sub_field('embed_code');?>?<?php the_sub_field('autoplay');?>&<?php the_sub_field('captions');?>&<?php the_sub_field('colour');?>&<?php the_sub_field('controls');?>&<?php the_sub_field('disable_keyboard');?>&<?php the_sub_field('enablejsapi');?>&<?php if( get_sub_field('start') ): ?><?php the_sub_field('start');?>&<?php endif;?><?php if( get_sub_field('end') ): ?><?php the_sub_field('end');?>&<?php endif;?><?php the_sub_field('fullscreen');?>&<?php the_sub_field('annotations');?>&<?php the_sub_field('loop');?>&<?php the_sub_field('modestbranding');?>&<?php the_sub_field('inline');?>&<?php the_sub_field('showinfo');?>" allowfullscreen></iframe>

			</div>

		<?php if( get_sub_field('column_footnote') ): ?>
        	<p class="column_footnote"><?php the_sub_field('column_footnote');?></p>
		<?php endif;?>

		</div>

	</div>


</section>