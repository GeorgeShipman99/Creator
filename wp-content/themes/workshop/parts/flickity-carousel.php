<section class="flickity-carousel <?php if ( get_sub_field('margins_options')) : ?><?php the_sub_field('margins_options');?><?php endif ;?> <?php if ( get_sub_field('unique_class')) : ?><?php the_sub_field('unique_class');?><?php endif ;?> ">


    <?php if ( !get_sub_field('fullwidth') ) : ?><div class="container <?php if ( get_sub_field('padding_options')):?><?php the_sub_field('padding_options');?><?php endif ;?>"><?php endif; ?>

          <div class="carousel">
          <?php $images = get_sub_field('flickity-carousel');
          if( $images ): ?>
            <?php foreach( $images as $img ): ?>
              <div class="carousel-cell">
                <img src="<?php echo $img['sizes']['large']; ?>" data-flickity-lazyload="<?php echo $img['sizes']['large']; ?>" alt="<?php echo $img['alt']; ?>" />
              </div>
            <?php endforeach; ?>


          <?php endif; ?>
          </div>

     <?php if ( !get_sub_field('fullwidth' )) : ?></div><?php endif; ?>

</section>