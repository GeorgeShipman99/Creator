<section id="blog_section" class="blog_section">

    <div class="container">

        <div class="clear"></div>
	
            <?php 
			$args = array( 'posts_per_page' => '24', );
			$recent_posts = new WP_Query($args);
			while( $recent_posts->have_posts() ) :  
    		$recent_posts->the_post() ?>
    				
    		<article class="loadsblog">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <div class="featured">
                        <?php if ( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail( array( 300, 300 ) ); ?>
                        <?php endif ?>
                        <div class="layer"></div>
                    </div>
                </a>

                <div class="details">      
                   <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3> 
                    <p><?php echo wp_trim_words( get_the_excerpt(), 30, '...' );?></p> 
                    <a class="button" href="<?php the_permalink(); ?>" title="Read More <?php the_title(); ?>">Read More</a>          
                </div> 

            </article> 


			<?php endwhile; ?>
			<?php wp_reset_postdata();?> 

            <div class="clear"></div>

			<a class="button" href="" id="loadMoreBlog" title="Load More">LOAD MORE</a>

        </div>


</section>
