<header id="header1" class="header1">
  
    <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img class="logo_front" src="<?php the_field('logo','option') ;?>" title="Logo" alt="<?php echo get_bloginfo( 'name' ); ?> Logo">
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img class="logo logo_back" src="<?php the_field('logo_back','option') ;?>" title="Logo" alt="<?php echo get_bloginfo( 'name' ); ?> Logo">
        </a>
    </div>

    <div class="hamburger">
      <a class="mobmenu menuicon">
        <span></span><span></span><span></span>
      </a>
    </div> 
 
    <div class="top_nav">
      <div class="top_menu">
        <?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
      </div>
      <div class="cart-icon">
          <a href="<?php echo get_permalink( get_option('woocommerce_cart_page_id') ); ?>" class="icon">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
                  <path class="st0" d="M25.7,15.9v-5.5c0-3.1-2.6-5.7-5.7-5.7s-5.7,2.6-5.7,5.7v5.5H5.2l2.5,19.5h24.6l2.5-19.5H25.7z M15.5,10.4 c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5v5.5h-9.1V10.4z M31.2,34.1H8.8L6.5,17h7.7v7.1h1.2V17h9.1v7.1h1.2V17h7.7L31.2,34.1z"/>
            </svg>
          </a>

    <?php if ( class_exists( 'WooCommerce' ) ):?>
      <?php global $woocommerce;
      $count = $woocommerce->cart->cart_contents_count;
      if( WC()->cart->get_cart_contents_count() > 0){ ?>

      <div class="cart-total"><?php echo $count;?></div>
      <?php  } ?>
    <?php endif;?>

          
      </div>
    </div>          

    <nav id="nav">
        <div class="nav_container">
            
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
    </nav>

</header>

<a id="main"></a>