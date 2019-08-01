<?php if ( is_active_sidebar( 'shop_sidebar' ) ) : ?>
	<div id="shop_sidebar" class="shop_sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'shop_sidebar' ); ?>
	</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'shop_sidebar_mob' ) ) : ?>
	<div id="shop_sidebar_mob" class="shop_sidebar_mob widget-area" role="complementary">
		<?php dynamic_sidebar( 'shop_sidebar_mob' ); ?>
	</div>
<?php endif; ?>