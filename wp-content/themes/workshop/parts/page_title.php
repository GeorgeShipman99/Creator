<section class="page_title <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?>">
	<div class="container">
		<<?php if ( get_sub_field('heading_type')):?><?php the_sub_field('heading_type');?><?php else :?>h1<?php endif;?> class="<?php the_sub_field('title_align');?> <?php the_sub_field('width');?>">
  			<?php if ( get_sub_field('alternate_title')):?><?php the_sub_field('alternate_title');?><?php else :?><?php the_title();?><?php endif;?>
		</<?php if ( get_sub_field('heading_type')):?><?php the_sub_field('heading_type');?><?php else :?>h1<?php endif;?>>
	</div>
</section>