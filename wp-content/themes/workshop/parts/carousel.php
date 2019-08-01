<section class="carousels <?php if ( get_sub_field('border_options')) : ?><?php the_sub_field('border_options');?><?php endif ;?>  <?php if ( get_sub_field('margins_options')) : ?><?php the_sub_field('margins_options');?><?php endif ;?> <?php if ( get_sub_field('unique_class')) : ?><?php the_sub_field('unique_class');?><?php endif ;?> ">

    <?php if ( !get_sub_field('fullwidth') ) : ?><div class="container <?php if ( get_sub_field('padding_options')) : ?><?php the_sub_field('padding_options');?><?php endif ;?>"><?php endif; ?>

          <?php if ( get_sub_field('title') ) : ?><h2 class="column_title"><?php the_sub_field('title');?></h2><?php endif; ?>
          <?php if ( get_sub_field('subtitle') ) : ?><p class="column_subtitle"><?php the_sub_field('subtitle');?></p><?php endif; ?>
      	
          <?php $images = get_sub_field('carousel');
          if( $images ): ?>

            <div class="imgslider flexslider">
                <ul class="slides">
                    <?php foreach( $images as $img ): ?>
                        <li>
                          <div class="article">
                              <div class="featured">
                                <img src="<?php echo $img['sizes']['large']; ?>" alt="<?php echo $img['alt']; ?>" />
                                
                                <?php if( $img['caption'] ): ?>
                                  <div class="details">      
                                   <p><?php echo $img['caption']; ?></p> 
                                  </div>
                                <?php endif; ?> 

                              </div>
                          </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

          <?php endif; ?>

          <?php if ( get_sub_field('button_confirm' )) : ?>
            <a class="button" href="<?php the_sub_field('page_link');?>" title="<?php the_sub_field('button_text');?>"><?php the_sub_field('button_text');?></a>
          <?php elseif ( !get_sub_field('page_link') && get_sub_field('link') ) : ?>
            <a class="button" href="<?php the_sub_field('link');?>" title="<?php the_sub_field('button_text');?>"><?php the_sub_field('button_text');?></a>
          <?php else : // Do nothing ?>
          <?php endif; ?>

     <?php if ( !get_sub_field('fullwidth' )) : ?></div><?php endif; ?>

</section>