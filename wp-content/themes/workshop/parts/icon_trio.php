<section class="trio_icon <?php if ( get_sub_field('margins_options')):?><?php the_sub_field('margins_options');?><?php endif;?> <?php if ( get_sub_field('padding_options')):?><?php the_sub_field('padding_options');?><?php endif;?> <?php if ( get_sub_field('unique_class')):?><?php the_sub_field('unique_class');?><?php endif;?>" style="<?php if ( get_sub_field('background_image') ):?>background: url('<?php the_sub_field('background_image');?>') no-repeat; background-position: 50% 50%; background-size:cover;<?php endif; ?>; <?php if ( get_sub_field('background_color') ):?>background-color: <?php the_sub_field('background_color');?><?php endif ;?>; <?php if ( get_sub_field('custom_css') ):?><?php the_sub_field('custom_css');?><?php endif ;?>;">

  <?php if ( !get_sub_field('fullwidth')):?><div class="container <?php if ( get_sub_field('padding_options')):?><?php the_sub_field('padding_options');?><?php endif;?>"><?php endif ;?>

  <?php if( have_rows('icon_repeater') ): ?>
  <?php while( have_rows('icon_repeater') ): the_row(); 
    // vars
    $icon = get_sub_field('icon_type');
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    ?>

    <div class="iconbox">
      <span class="icon">
          <?php 
          if ($icon && $icon == 'arrow-dot'){
              echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/arrow-dot.svg' );
          }
          elseif ($icon && $icon == 'close-icon') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/close-icon.svg' );
          }
          elseif ($icon && $icon == 'cloud') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/cloud.svg' );
          }
          elseif ($icon && $icon == 'cog') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/cog.svg' );
          }
          elseif ($icon && $icon == 'compass') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/compass.svg' );
          }
          elseif ($icon && $icon == 'docs') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/docs.svg' );
          }
          elseif ($icon && $icon == 'exclamation') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/exclamation.svg' );
          }
          elseif ($icon && $icon == 'factory') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/factory.svg' );
          }
          elseif ($icon && $icon == 'flag') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/flag.svg' );
          }
          elseif ($icon && $icon == 'graph') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/graph.svg' );
          }
          elseif ($icon && $icon == 'hand-shake') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/hand-shake.svg' );
          }
          elseif ($icon && $icon == 'house') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/house.svg' );
          }
          elseif ($icon && $icon == 'laptop') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/laptop.svg' );
          }
          elseif ($icon && $icon == 'link') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/link.svg' );
          }
          elseif ($icon && $icon == 'member') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/member.svg' );
          }
          elseif ($icon && $icon == 'money') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/money.svg' );
          }
          elseif ($icon && $icon == 'mountain') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/mountain.svg' );
          }
          elseif ($icon && $icon == 'padlock') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/padlock.svg' );
          }
          elseif ($icon && $icon == 'pencil') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/pencil.svg' );
          }
          elseif ($icon && $icon == 'phone-held') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/phone-held.svg' );
          }
          elseif ($icon && $icon == 'play_button') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/play_button.svg' );
          }
          elseif ($icon && $icon == 'question') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/question.svg' );
          }
          elseif ($icon && $icon == 'refresh') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/refresh.svg' );
          }
          elseif ($icon && $icon == 'scales') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/scales.svg' );
          }
          elseif ($icon && $icon == 'search') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/search.svg' );
          }
          elseif ($icon && $icon == 'skyscraper') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/skyscraper.svg' );
          }
          elseif ($icon && $icon == 'speech') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/speech.svg' );
          }
          elseif ($icon && $icon == 'speedometer') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/speedometer.svg' );
          }
          elseif ($icon && $icon == 'switch') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/switch.svg' );
          }
          elseif ($icon && $icon == 'target') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/target.svg' );
          }
          elseif ($icon && $icon == 'team') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/team.svg' );
          }
          elseif ($icon && $icon == 'temple') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/temple.svg' );
          }
          elseif ($icon && $icon == 'thumbs-up') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/thumbs-up.svg' );
          }
          elseif ($icon && $icon == 'tick') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/tick.svg' );
          }
          elseif ($icon && $icon == 'trophy') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/trophy.svg' );
          }
          elseif ($icon && $icon == 'umbrella') {
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/umbrella.svg' );
          }
          else { 
            echo file_get_contents( get_bloginfo( 'template_directory' ) . '/assets/icons/cloud.svg' );
          }
          ?>
      </span>

      <div class="content">
          <h5><?php echo $title; ?></h5>
          <?php echo $content; ?>
      </div>
    </div>

  <?php endwhile; ?>
  <?php endif; ?>
    
  <?php if ( !get_sub_field('fullwidth')):?></div><?php endif ;?>

</section>