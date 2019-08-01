<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<section class="<?php if ( get_sub_field('fullwidth')) : ?>full_container<?php endif; ?> heading_box <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?> <?php the_sub_field('height_options');?> <?php the_sub_field('unique_class');?>" style="background-color: <?php the_sub_field('heading_box_color');?>;">

	<?php if ( get_sub_field('overlay') ) :?><div class="overlay" style="opacity:<?php the_sub_field('overlay');?>"></div><?php endif ;?>

	<div class="bg" style="<?php if ( get_sub_field('background_image_override') ) :?>background: url('<?php the_sub_field('background_image_override');?>') no-repeat; <?php else :?>background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;<?php endif ;?> background-attachment:<?php the_sub_field('background_attachment');?>;"></div>

    <div class="container">
	    <div class="heading">
	        <h1><?php the_sub_field('heading_box_heading');?></h1>
	        <?php if ( get_sub_field('subheading')) : ?><h2><?php the_sub_field('subheading');?></h2><?php endif ;?>

	        <?php if ( get_sub_field('button_confirm') ):?>
	        <a class="button <?php if ( get_sub_field('button_color')) : ?><?php the_sub_field('button_color' );?><?php endif; ?>" href="<?php the_sub_field('heading_box_link');?>">
	        	<?php if ( get_sub_field('heading_box_button_text')):?><?php the_sub_field('heading_box_button_text');?><?php else : ?>Find Out More<?php endif ;?>
	        </a><?php endif ;?>
	    </div>
	 </div>

</section>
