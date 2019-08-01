<?php if ( get_sub_field('background_image_mob') ):?>
<style>
  @media only screen and (max-width: 1024px) {
      #boxed_content { background: url('<?php the_sub_field('background_image_mob');?>') 50% 50% scroll !important; }
  } 
</style>
<?php endif; ?>

<section class="boxed_content <?php if ( get_sub_field('margins_options' ) ) : ?><?php the_sub_field('margins_options');?><?php endif; ?> <?php if ( get_sub_field('padding_options' ) ) : ?><?php the_sub_field('padding_options');?><?php endif; ?> <?php if ( get_sub_field('unique_class' ) ) : ?><?php the_sub_field('unique_class');?><?php endif; ?>" style="<?php if ( get_sub_field('custom_css' )) : ?><?php the_sub_field('custom_css');?><?php endif; ?>">

  <div class="bg" style="<?php if ( get_sub_field('background_image') ) :?>background: url('<?php the_sub_field('background_image');?>') no-repeat <?php the_sub_field('background_position');?> <?php the_sub_field('background_fixed');?>;<?php endif ;?>background-size:cover;"></div>

    <?php if ( !get_sub_field('fullwidth') ) : ?>
    <div class="container <?php if ( get_sub_field('padding_options' ) ) : ?><?php the_sub_field('padding_options');?><?php endif; ?>">
    <?php endif; ?>
      	
      <div class="content" <?php if ( get_sub_field('position','option') ) : ?> style="float:<?php the_sub_field('position','option');?>"<?php endif ;?>>
        <div class="textbox <?php if ( get_sub_field('theme_color','option') ) : ?><?php the_sub_field('theme_color','option');?><?php endif ;?>">
          <h1 <?php if ( get_sub_field('title_super') ) : ?>class="super"<?php endif ;?>><?php the_sub_field('title');?></h1>
          <p><?php the_sub_field('subtitle');?></p>

          <?php if ( get_sub_field('button_confirm') ):?>
            <a class="button <?php if ( get_sub_field('button_color')) : ?><?php the_sub_field('button_color' );?><?php endif; ?> <?php if ( get_sub_field('button_orientation')) : ?><?php the_sub_field('button_orientation' );?><?php endif; ?>" href="<?php the_sub_field('button_link') ;?>">
            <?php if ( get_sub_field('button_text')):?><?php the_sub_field('button_text');?><?php else : ?>Find Out More<?php endif ;?>
            </a>
          <?php endif ;?>
        </div>
      </div>

    <?php if ( !get_sub_field('fullwidth') ) : ?></div><?php endif; ?>

</section>