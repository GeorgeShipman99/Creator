<div class="menu_switch">

	<a href="<?php the_sub_field('menu_link');?>">
		<div class="featured" style="<?php if ( get_sub_field('background_image') ) :?>background: url('<?php the_sub_field('background_image');?>') no-repeat;<?php endif ;?>">
		</div>
	</a>

	<div class="text">
		<a href="<?php the_sub_field('menu_link');?>"><?php the_sub_field('heading');?></a>
	</div>
</div>
