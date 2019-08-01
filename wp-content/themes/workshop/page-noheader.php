<?php /* Template Name: No Header */ ?>
<?php get_header(); ?>

<div class="wrapper home_wrapper">
	<?php if ( have_posts() && !have_rows('blocks') ) : while ( have_posts() ) : the_post(); ?>
		<div class="container plain-container">
			<?php the_content();?>
		</div>
    <?php endwhile; ?>
    <?php else :?>
		<?php include('parts/layouts.php'); ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
