<header id="header" class="header <?php if ( is_front_page() || is_shop() || is_product_category() || is_product() || is_account_page() || is_cart() || is_checkout() || is_page_template('page-nopadding.php') || is_page_template('page-noheader.php') ) : ?><?php else : ?>header_pages<?php endif ;?>">

    <nav class="top-navigation">
      <div class="container nav-container">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
            <img src="<?php the_field('logo','option') ;?>" title="Logo" alt="<?php echo get_bloginfo( 'name' ); ?> Logo">
        </a>

        <div class="right_nav"> 

            <a href="<?php the_field('location_link','option');?>" class="map-icon">
              <div class="icon">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
                <path class="st0" d="M20,2.5c-7.4,0-13.4,6-13.4,13.4c0,11.1,12.4,20.9,13,21.3l0.4,0.3l0.4-0.3c0.5-0.4,13-10.6,13-21.3
                C33.4,8.5,27.4,2.5,20,2.5z M20,35.9c-2.1-1.7-12.1-10.6-12.1-20C7.9,9.2,13.3,3.7,20,3.7c6.7,0,12.1,5.4,12.1,12.1
                C32.1,25,22.1,34.1,20,35.9z"/>
                <path class="st0" d="M20,10c-3.2,0-5.9,2.6-5.9,5.9c0,3.2,2.6,5.9,5.9,5.9c3.2,0,5.9-2.6,5.9-5.9C25.9,12.6,23.2,10,20,10z
                M20,20.5c-2.6,0-4.7-2.1-4.7-4.7s2.1-4.7,4.7-4.7s4.7,2.1,4.7,4.7S22.6,20.5,20,20.5z"/>
                </svg>
              </div>
            </a>

            <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="member-icon">
              <div class="icon">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
                <path class="st0" d="M22.9,20.1c2.9-1.2,5-4,5-7.3C27.8,8.5,24.3,5,20,5s-7.8,3.5-7.8,7.8c0,3.3,2.1,6.1,5,7.3
                C10.3,21.5,5.2,27.6,5.2,35l1.2,0c0-7.7,6.1-14,13.6-14s13.6,6.3,13.6,14l1.2,0C34.8,27.6,29.7,21.5,22.9,20.1z M13.3,12.8
                c0-3.7,3-6.7,6.7-6.7c3.7,0,6.7,3,6.7,6.7s-3,6.7-6.7,6.7C16.3,19.5,13.3,16.5,13.3,12.8z"/>
                </svg>
              </div>
            </a>

            <a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>" class="bag-icon">
              <div class="icon">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
                  <path class="st0" d="M25.7,15.9v-5.5c0-3.1-2.6-5.7-5.7-5.7s-5.7,2.6-5.7,5.7v5.5H5.2l2.5,19.5h24.6l2.5-19.5H25.7z M15.5,10.4 c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5v5.5h-9.1V10.4z M31.2,34.1H8.8L6.5,17h7.7v7.1h1.2V17h9.1v7.1h1.2V17h7.7L31.2,34.1z"/>
                </svg>

                <?php global $woocommerce;
                $count = $woocommerce->cart->cart_contents_count;
                if( WC()->cart->get_cart_contents_count() > 0){ ?>
                  <div class="cart-total"><?php echo $count;?></div>
                <?php  } ?>
              </div>
            </a>

          </div>

      </div>
    </nav>

  
    <nav class="main-navigation" <?php if ( is_page_template('page-noheader.php')) : ?>style="display:none;"<?php endif;?>>
      <div class="nav-container">
          <div class="container main-nav-bar">
            <a class="menuBtn type1" id="menu-icon">
              <span></span>
              <span></span>
              <span></span>
            </a>

            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

          </div>
      </div>
    </nav> 
  

  </header>