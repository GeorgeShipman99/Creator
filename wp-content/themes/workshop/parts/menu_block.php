<section class="menu_block <?php if ( get_sub_field('fullwidth' )) : ?>fullwidth<?php endif; ?> <?php if ( get_sub_field('margins_options' ) ) : ?><?php the_sub_field('margins_options');?><?php endif; ?> <?php if ( get_sub_field('padding_options' ) ) : ?><?php the_sub_field('padding_options');?><?php endif; ?> <?php if ( get_sub_field('unique_class' ) ) : ?><?php the_sub_field('unique_class');?><?php endif; ?>" style="<?php if ( get_sub_field('background_color') ):?>background-color: <?php the_sub_field('background_color');?>;<?php endif;?> <?php if ( get_sub_field('custom_css' )) : ?><?php the_sub_field('custom_css');?><?php endif; ?>">
  
  <?php if ( !get_sub_field('fullwidth') ) : ?><div class="container"><?php endif; ?>

	<div class="cont <?php the_sub_field('orientation');?>">

		<div class="text <?php the_sub_field('text-width');?>">
			<div class="text-block">

			<?php if ( get_sub_field('title_option')) : ?>
				<h2 class="title_option">
					<span><?php the_sub_field('title_option');?></span>
					<?php if ( get_sub_field('title_time' )) : ?>
						<?php the_sub_field('title_time');?>
					<?php endif; ?>
				</h2>
			<?php endif; ?>

			<?php if( have_rows('menu_item') ): ?>
			<?php while( have_rows('menu_item') ): the_row(); 
				$title = get_sub_field('title'); 
				$price = get_sub_field('price');
				$description = get_sub_field('description');
			?>
				
				<div class="menu_item">
					<h3 class="title-heading">
						<span class="title"><?php echo $title;?></span>

						<?php if ( get_sub_field('price')) : ?>
							<span class="price">£<?php echo $price;?></span>
						<?php endif; ?>
						<span class="dots"></span>
					</h3>
					<?php echo $description;?>
				</div>

			<?php endwhile; ?><?php endif; ?>

			</div>
		</div>

		<div class="img"> 
			<?php $image = get_sub_field('image'); if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</div>
	</div>

     <?php if ( !get_sub_field('full_container' )) : ?></div><?php endif; ?>

</section>