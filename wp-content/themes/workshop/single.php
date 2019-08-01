<?php get_header(); ?>

<div class="wrapper post">

	<?php if ( have_posts() && !have_rows('blocks') ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">

			<?php if ( get_option( 'page_for_posts' ) ):?>
				<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><h3 class="go_back">< Go Back</h3></a>
			<?php endif ;?>


			<h1><?php the_title();?></h1>
			<cite>Written by <?php the_author();?>, published <?php the_date('m-d-y'); ?></cite>

			<?php if ( has_post_thumbnail() ): ?>
	            <?php the_post_thumbnail();?>
	        <?php endif ?>

			<?php the_content();?>
				
			<div class="nav-posts">
				<?php
				$current = array_search($post->ID, $posts);
				$prevID = $posts[$current-1];
				$nextID = $posts[$current+1];
				?>
				<?php if ( get_previous_post_link() ) : ?>
						<div id="prev">
		 						<?php previous_post_link('%link','Previous'); ?>
						</div>	
				<?php endif ;?>								
				<?php if ( get_next_post_link() ) : ?>
						<div id="next">
		 						<?php next_post_link('%link','Next'); ?> 
						</div>
				<?php endif ;?>
			</div>

			<?php // If comments are open or we have at least one comment, load up the comment template.
	        if ( comments_open() || get_comments_number() ) :
	          comments_template();
	        endif; ?>

        	<ul class="commentlist">
          		<?php wp_list_comments(); ?>
        	</ul>

		</div>
    <?php endwhile; ?>
    <?php else :?>
		<?php include('parts/layouts.php'); ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
