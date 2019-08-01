<?php get_header(); ?>

<?php if ( is_shop() || is_product_category() || is_product() || is_account_page() || is_cart() || is_checkout() || is_page_template('page-nopadding.php') ) : ?>
	<div class="underbanner" style="background: url('<?php the_field('shop_banner','option');?>');"></div>
<?php endif ;?>


<div class="wrapper">

	<?php if ( get_field('title')):?><h1 class="pagetitle"><?php the_title();?></h1><?php endif;?>

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


