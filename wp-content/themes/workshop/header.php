<!doctype html>
<html lang="en">
<head>  
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo get_bloginfo( 'name' ); ?></title>

<meta http-equiv="Default-Style" content="brand">
<link href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
   integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
   crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
   integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
   crossorigin=""></script>
<meta name="author" content="">
<meta content="" name="DC.title">
<meta content="" name="geo.region">
<meta content="" name="geo.placename">
<?php wp_head();?>

<style>
@font-face {
    font-family: 'flexslider-icon';
    font-weight: normal;
    font-style: normal;
    src: url('<?php echo get_bloginfo( 'template_directory' );?>/assets/fonts/flexslider-icon.eot');
    src: url('<?php echo get_bloginfo( 'template_directory' );?>/assets/fonts/flexslider-icon.eot?#iefix') format('embedded-opentype'),
    url('<?php echo get_bloginfo( 'template_directory' );?>/assets/fonts/flexslider-icon.woff') format('woff'),
    url('<?php echo get_bloginfo( 'template_directory' );?>/assets/fonts/flexslider-icon.ttf') format('truetype'),
    url('<?php echo get_bloginfo( 'template_directory' );?>/assets/fonts/flexslider-icon.svg#flexslider-icon') format('svg');
}
@font-face {
    font-family: 'star';
    src: url('../fonts/star.eot');
    src: url('../fonts/star.eot?#iefix') format('embedded-opentype'),
    url('../fonts/star.woff') format('woff'),
    url('../fonts/star.ttf') format('truetype'),
    url('../fonts/star.svg#star') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'WooCommerce';
    src: url('<?php echo get_bloginfo( 'template_directory' );?>/assets/fonts/WooCommerce.eot');
    src: url('<?php echo get_bloginfo( 'template_directory' );?>/assets/fonts/WooCommerce.eot?#iefix') format('embedded-opentype'),
    url('<?php echo get_bloginfo( 'template_directory' );?>/assets/fonts/WooCommerce.woff') format('woff'),
    url('<?php echo get_bloginfo( 'template_directory' );?>/assets/fonts/WooCommerce.ttf') format('truetype'),
    url('<?php echo get_bloginfo( 'template_directory' );?>/assets/fonts/WooCommerce.svg#WooCommerce') format('svg');
    font-weight: normal;
    font-style: normal;
}

.woocommerce-product-search input[type=search] { 
    background: #f1f1f1 url('<?php echo get_bloginfo( 'template_directory' );?>/assets/img/search.png') no-repeat 11px center;
}
</style>
</head>

<body> 

<?php include('sections/headers/header1.php'); ?>
  
