<section class="events_section <?php if ( get_sub_field('margins_options' ) ) : ?><?php the_sub_field('margins_options');?><?php endif; ?> <?php if ( get_sub_field('unique_class' ) ) : ?><?php the_sub_field('unique_class');?><?php endif; ?>" style="<?php if ( get_sub_field('background_image') ):?>background: url('<?php the_sub_field('background_image');?>') no-repeat; background-position: 50% 50%; background-size:cover;<?php endif; ?> <?php if ( get_sub_field('background_color') ):?>background-color: <?php the_sub_field('background_color');?>;<?php endif; ?> <?php if ( get_sub_field('custom_css' )) : ?><?php the_sub_field('custom_css');?><?php endif; ?>">

    <div class="container <?php if ( get_sub_field('padding_options' ) ) : ?><?php the_sub_field('padding_options');?><?php endif; ?>">
            <?php 
    			$args = array( 
                    'post_type' => 'events',
                    'posts_per_page' => '24',
                );
    			$recent_posts = new WP_Query($args);
    			while( $recent_posts->have_posts() ) :  
        		$recent_posts->the_post()
            ?>

            <?php 
                $date = get_post_meta($post->ID, "event_date", true, false);
                $date = new DateTime($date);
            ?>
    				
    		<article class="loads">
                <div class="featured">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php if ( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail( array( 300, 300 ) ); ?>
                        <?php else : ?>
                            <img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/img/event-sq.jpg" alt="Event Placeholder" />
                        <?php endif ?>
                    </a>
                    <div class="date">
                        <span><?php echo $date->format('j M');?></span>
                    </div>
                    <div class="layer"></div>
                </div>

                <div class="details">   
                    <div class="info">   
                        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 4 ); ?></a></h3> 
                        <p><?php echo wp_trim_words( get_the_content(), 10, '...' );?></p> 
                        <a class="button" href="<?php the_permalink(); ?>" title="Read More">Read More</a>
                    </div>          
                </div> 

            </article> 


			<?php endwhile; ?>
			<?php wp_reset_postdata();?> 

            <div class="clear"></div>

			<a class="button" href="" id="loadMore">LOAD MORE</a>

        </div>


</section>
