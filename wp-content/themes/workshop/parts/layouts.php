<?php if( have_rows('blocks') ):
      $sc=1;
      while ( have_rows('blocks') ) : the_row();

          $file = get_row_layout().'.php';
          include($file);
?>

<?php $sc++;
      endwhile;
      endif; ?>
     