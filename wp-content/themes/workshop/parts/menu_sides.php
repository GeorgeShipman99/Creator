<section class="menu_sides <?php if ( get_sub_field('fullwidth' )) : ?>fullwidth<?php endif; ?> <?php if ( get_sub_field('margins_options' ) ) : ?><?php the_sub_field('margins_options');?><?php endif; ?> <?php if ( get_sub_field('padding_options' ) ) : ?><?php the_sub_field('padding_options');?><?php endif; ?> <?php if ( get_sub_field('unique_class' ) ) : ?><?php the_sub_field('unique_class');?><?php endif; ?>" style="<?php if ( get_sub_field('background_color') ):?>background-color: <?php the_sub_field('background_color');?><?php endif; ?>; <?php if ( get_sub_field('custom_css' )) : ?><?php the_sub_field('custom_css');?><?php endif; ?>">
  
  <?php if ( !get_sub_field('fullwidth') ) : ?><div class="container"><?php endif; ?>

	<div class="cont">


		<?php if( have_rows('menu_item') ): ?>
		<?php while( have_rows('menu_item') ): the_row(); 
		$heading = get_sub_field('heading'); ?>

			<div class="text">
			<div class="text-block">

			<?php if ( get_sub_field('heading' )) : ?>
				<h2 class="title_option"><?php the_sub_field('heading');?></h2>
			<?php endif; ?>

			<?php if( have_rows('menu_item_row') ): ?>
			<?php while( have_rows('menu_item_row') ): the_row(); 
				$title = get_sub_field('title');
				$dietary = get_sub_field('dietary');
				$price1 = get_sub_field('price1');
				$price2 = get_sub_field('price2');
				$price3 = get_sub_field('price3');
				$options = get_sub_field('options');
				$th = get_sub_field('th');
			?>
				
				<div class="menu_item">
					<h3 class="title-heading <?php if ( get_sub_field('th')) : ?>th<?php endif; ?>">
						<span class="title"><?php echo $title;?><strong><?php echo $dietary;?></strong></span>
						<?php if ( get_sub_field('price1')) : ?><span class="price"><?php echo $price1;?></span><?php endif; ?>
						<?php if ( get_sub_field('price2')) : ?><span class="price"><?php echo $price2;?></span><?php endif; ?>
						<?php if ( get_sub_field('price3')) : ?><span class="price"><?php echo $price3;?></span><?php endif; ?>
						<?php if ( get_sub_field('title')) : ?><span class="dots"></span><?php endif; ?>
					</h3>
					<?php if ( get_sub_field('options')) : ?><h4><?php echo $options;?></h4><?php endif; ?>
				</div>

			<?php endwhile; ?><?php endif; ?>

			</div>
		</div>
		<?php endwhile; ?><?php endif; ?>

		
	</div>

     <?php if ( !get_sub_field('full_container' )) : ?></div><?php endif; ?>

</section>