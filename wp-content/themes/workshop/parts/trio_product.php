<section class="trio-product <?php if ( get_sub_field('fullwidth') ): ?>fullwidth<?php endif; ?> <?php if ( get_sub_field('border_options' )) : ?><?php the_sub_field('border_options');?><?php endif; ?> <?php if ( get_sub_field('margins_options' ) ) : ?><?php the_sub_field('margins_options');?><?php endif; ?>  <?php if ( get_sub_field('unique_class' ) ) : ?><?php the_sub_field('unique_class');?><?php endif; ?>" style="<?php if ( get_sub_field('background_image') ):?>background: url('<?php the_sub_field('background_image');?>') <?php the_sub_field('background_position');?> <?php the_sub_field('background_fixed');?>;<?php endif ;?> <?php if ( get_sub_field('background_color' )) : ?>background-color:<?php the_sub_field('background_color');?>;<?php endif; ?><?php if ( get_sub_field('custom_css' )) : ?><?php the_sub_field('custom_css');?><?php endif; ?>">

    <?php if ( !get_sub_field('fullwidth') ) : ?>
    <div class="container <?php if ( get_sub_field('padding_options' ) ) : ?><?php the_sub_field('padding_options');?><?php endif; ?>">
    <?php endif; ?>

            <?php if ( get_sub_field('title') ) : ?><h2 class="column_title"><?php the_sub_field('title');?></h2><?php endif; ?>
            <?php if ( get_sub_field('subtitle') ) : ?><p class="column_subtitle"><?php the_sub_field('subtitle');?></p><?php endif; ?>

            <?php if ( class_exists( 'WooCommerce' ) ):?>
            <?php query_posts(
                 array(
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'hierarchical' => 1,
                    'post_type'             => 'product',
                    'post_status'           => 'publish',
                    'posts_per_page'        =>  get_sub_field('posts_per_page'),
                    'tax_query'             =>  array(
                        array(
                            'taxonomy'      => 'product_cat',
                            'field'         => 'term_id', //This is optional, as it defaults to 'term_id'
                            'terms'         =>  get_sub_field('product_cat'),
                            'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                        ),
                    )
                )
                );?>

            

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                $price = get_post_meta( get_the_ID(), '_price', true );
            ?>
                <article>
                    <a class="link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <div class="featured">
                            <?php if ( has_post_thumbnail() ): ?>
                                <?php the_post_thumbnail( 'medium', array( 'class' => 'aligncenter' ) ); ?>
                            <?php endif ?>

                            <div class="details">      
                                <h3><?php the_title(); ?></h3> 
                                <h4><?php echo wc_price( $price ); ?></h4>
                            </div>

                            <div class="layer"></div>
                        </div> 
                    </a>
                </article> 

            <?php endwhile; ?><?php endif; ?>
            <?php wp_reset_query(); ?>
            <?php endif;?>


            <?php $term = get_sub_field('product_cat');
            if( $term ): ?>
                <a class="button" href="<?php echo get_term_link( $term ); ?>">
                    <?php the_sub_field('button_text');?>
                </a>
            <?php endif; ?>





    <?php if ( !get_sub_field('fullwidth') ) : ?></div><?php endif; ?> 

</section>