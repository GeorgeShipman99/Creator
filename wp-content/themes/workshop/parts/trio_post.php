<section id="trio-post" class="trio-post <?php if ( get_sub_field('fullwidth') ): ?>fullwidth<?php endif; ?> <?php if ( get_sub_field('border_options' )) : ?><?php the_sub_field('border_options');?><?php endif; ?> <?php if ( get_sub_field('margins_options' ) ) : ?><?php the_sub_field('margins_options');?><?php endif; ?> <?php if ( get_sub_field('padding_options' ) ) : ?><?php the_sub_field('padding_options');?><?php endif; ?> <?php if ( get_sub_field('unique_class' ) ) : ?><?php the_sub_field('unique_class');?><?php endif; ?>" style="<?php if ( get_sub_field('background_image') ):?>background: url('<?php the_sub_field('background_image');?>') <?php the_sub_field('background_position');?> <?php the_sub_field('background_fixed');?>;<?php endif ;?> <?php if ( get_sub_field('background_color' )) : ?>background-color:<?php the_sub_field('background_color');?>;<?php endif; ?><?php if ( get_sub_field('custom_css' )) : ?><?php the_sub_field('custom_css');?><?php endif; ?>">

    <?php if ( !get_sub_field('fullwidth') ) : ?>
    <div class="container">
    <?php endif; ?>

            <?php if ( get_sub_field('title') ) : ?><h2 class="column_title"><?php the_sub_field('title');?></h2><?php endif; ?>
            <?php if ( get_sub_field('subtitle') ) : ?><p class="column_subtitle"><?php the_sub_field('subtitle');?></p><?php endif; ?>


            <div class="flex-wrap">

            <?php query_posts(
                array(
                    'post_type' => get_sub_field('post_type'),
                    'category' => get_sub_field('post_category'),
                    'posts_per_page' => get_sub_field('posts_per_page'),
                )
            );?>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

                <article>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <div class="featured">
                            <?php if ( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail( array( 300, 300 ) ); ?>
                            <?php endif ?>
                        <div class="overlay"></div>
                        </div>
                    </a>
                    <div class="details">      
                        <h3><?php the_title(); ?></h3> 
                        <?php the_excerpt(); ?>
                     </div>

                    <div class="layer"></div>
                </article> 
            <?php endwhile; ?><?php endif; ?>
            </div>

            <?php wp_reset_query(); ?>

            <a class="button" href="<?php echo get_page_link(166); ?>">
                <?php the_sub_field('button_text');?>
            </a>


    <?php if ( !get_sub_field('fullwidth') ) : ?></div><?php endif; ?> 

</section>