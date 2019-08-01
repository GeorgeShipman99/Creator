/* Main */

<?php the_field('google_font_import','option');?>

html body {
    color: <?php the_field('text_color','option');?>;
    font-family: <?php the_field('font_family','option');?>;
    font-size: <?php the_field('font-size','option');?>;
}

html body h1, html body h2, html body h3, html body h4, html body h5, #menu-header-menu li, #double_button, .button  {
    font-family: <?php the_field('font_family_headings','option');?>;
}

html body p, html body h1, html body h2, html body h3, html body h4, html body h5, html body h6, html body a  {
    color: <?php the_field('text_color','option');?>;
}
  
html body a {
    color: <?php the_field('link_color','option');?>;
}

html body a:hover, html body a:focus {
    color: <?php the_field('link_hover_color','option');?>;
}

img.logo { max-width: <?php the_field('logo_width','option');?> }

html body #social-icons .fa { background-color:<?php the_field('social_link_background','option');?>;}


/*Contact Form*/
.wpcf7 input::-webkit-input-placeholder { color: <?php the_field('placeholder_text','option');?>; }
.wpcf7 input::-moz-placeholder { color: <?php the_field('placeholder_text','option');?>; }
.wpcf7 input:-ms-input-placeholder { color: <?php the_field('placeholder_text','option');?>; }
.wpcf7 input:-moz-placeholder { color: <?php the_field('placeholder_text','option');?>; }
.wpcf7 textarea::-webkit-input-placeholder { color: <?php the_field('placeholder_text','option');?>; }
.wpcf7 textarea::-moz-placeholder { color: <?php the_field('placeholder_text','option');?>; }
.wpcf7 textarea:-ms-input-placeholder { color: <?php the_field('placeholder_text','option');?>; }
.wpcf7 textarea:-moz-placeholder { color: <?php the_field('placeholder_text','option');?>; }