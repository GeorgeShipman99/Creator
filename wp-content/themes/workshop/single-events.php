 <?php get_header(); ?>

<?php if ( is_shop() || is_product_category() || is_product() || is_account_page() || is_cart() || is_checkout() || is_page_template('page-nopadding.php') ) : ?>
	<div class="underbanner" style="background: url('<?php the_field('shop_banner','option');?>');"></div>
<?php endif ;?>


<div class="wrapper post event">
	
	<?php if ( have_posts() && !have_rows('blocks') ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">

			<a href="<?php the_field('events_page_link','option');?>"><h3 class="go_back">< Go Back</h3></a>

			<div class="heading">
				<div class="band_image">  
					<div class="image">
	                	<?php if ( has_post_thumbnail() ): ?>
	                    	<?php the_post_thumbnail();?>
	                    <?php else : ?>
	                    	<img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/img/events.jpg" alt="Event Placeholder" />
	                	<?php endif ?>
	            	</div>
	                <div class="deets">
	                	<div class="date">
	                        <span><?php $date = get_field('event_date', false, false);
	                        	// make date object
								$date = new DateTime($date);
								?><?php echo $date->format('j M Y'); ?>
							</span>
	                	</div>
	                	<div class="time">
	                        <span><?php the_field('start_time');?> ~ <?php the_field('end_time');?></span>
	                	</div>
	                </div>
	            </div>
	            <h1><?php the_title();?></h1>
			</div>

			
			<p><em>Written by <?php the_author();?>, published <?php the_date('d-m-y'); ?></em></p>
			<?php the_content();?>

			<?php if ( get_field('video')):?>
			<div class="video_wrapper">
				<div class="video_container">
					<iframe src="<?php the_field('video');?>?api=1&showinfo=0&controls=0&loop=1&rel=0&modestbranding=1" allowfullscreen></iframe>
				</div>
			</div>
			<?php endif;?>

				
			<div class="nav-posts">
				<?php
				$current = array_search($post->ID, $posts);
				$prevID = $posts[$current-1];
				$nextID = $posts[$current+1];
				?>
				<?php if ( get_previous_post_link() ) : ?>
						<div id="prev">
		 						<?php previous_post_link('%link','Earlier Events'); ?>
						</div>	
				<?php endif ;?>								
				<?php if ( get_next_post_link() ) : ?>
						<div id="next">
		 						<?php next_post_link('%link','Later Events'); ?> 
						</div>
				<?php endif ;?>
			</div>

		</div>
    <?php endwhile; ?>
    <?php else :?>
		<?php include('parts/layouts.php'); ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
