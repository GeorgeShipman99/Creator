<footer id="footer">
	<div class="container">
		
		<?php if ( is_shop() || is_product_category() || is_product() || is_account_page() || is_cart() || is_checkout() ) : ?>
		<div class="row payment_logos">
		    <?php if( have_rows('payment_logos','option') ): ?>
				<?php while( have_rows('payment_logos','option') ): the_row();
					$image = get_sub_field('logo'); ?>
			        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php endif ;?>


		<div class="row footer_menus">
			<div class="c-4 footer1">
				<?php dynamic_sidebar( 'footer-one' ); ?>
			</div>

			<div class="c-4 footer2">
			    <?php dynamic_sidebar( 'footer-two' ); ?>
			</div>

			<div class="c-4 footer3">
			    <?php dynamic_sidebar( 'footer-three' ); ?>
			</div>

			<div class="c-4 footer4">
			    <?php dynamic_sidebar( 'footer-four' ); ?>
			</div>
		</div>


		<div class="row signature">
           <ul id="social-icons">
                <?php if ( get_field('fb_link','option') ) :?><li><a href="<?php the_field('fb_link','option');?>" class="social-icon"><i class="fa fa-facebook"></i></a></li><?php endif ;?>
                <?php if ( get_field('tw_link','option') ) :?><li><a href="<?php the_field('tw_link','option');?>" class="social-icon"><i class="fa fa-twitter"></i></a></li><?php endif ;?>
                <?php if ( get_field('pinterest_link','option') ) :?><li><a href="<?php the_field('pinterest_link','option');?>" class="social-icon"><i class="fa fa-pinterest"></i></a></li><?php endif ;?>
                <?php if ( get_field('youtube_link','option') ) :?><li><a href="<?php the_field('youtube_link','option');?>" class="social-icon"><i class="fa fa-youtube"></i></a></li><?php endif ;?>
                <?php if ( get_field('linkedin_link','option') ) :?><li><a href="<?php the_field('linkedin_link','option');?>" class="social-icon"><i class="fa fa-linkedin"></i></a></li><?php endif ;?>
                <?php if ( get_field('instagram_link','option') ) :?><li><a href="<?php the_field('instagram_link','option');?>" class="social-icon"><i class="fa fa-instagram"></i></a></li><?php endif ;?>
           	 </ul>
			<p>&copy; <?php echo date("Y"); ?> <?php the_field('company_name','option'); ?> | Website by <a href="https://www.symbiancreate.co.uk/web">Symbian Create</a></p>
		</div>	
	</div>
</footer>

<a id="to_the_top" class="top">
	<span>To the top</span>
	<img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/img/arrowup.png" alt="to the top">
</a>

<?php wp_footer(); ?>
</body> 