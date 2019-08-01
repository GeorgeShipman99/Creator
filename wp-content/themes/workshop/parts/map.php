<section class="map_container <?php if ( get_sub_field('margins_options' ) ) : ?><?php the_sub_field('margins_options');?><?php endif; ?> <?php if ( get_sub_field('unique_class' ) ) : ?><?php the_sub_field('unique_class');?><?php endif; ?>" <?php if ( get_sub_field('custom_css' )) : ?>style="<?php the_sub_field('custom_css');?>"<?php endif; ?>>

	<?php if ( !get_sub_field('fullwidth')) : ?><div class="container <?php if ( get_sub_field('padding_options' ) ) : ?><?php the_sub_field('padding_options');?><?php endif; ?>"><?php endif; ?>

		<div class="map">
			<div id="map" class="mapid"></div>
		</div>

	<?php if ( !get_sub_field('fullwidth')) : ?></div><?php endif; ?>
</section>


<script>
var millIcon = L.icon({
    iconUrl: '<?php $icon = get_sub_field('icon'); if ( get_sub_field('icon')) : ?><?php echo $icon['url']; ?><?php else : ?><?php echo get_bloginfo( 'template_directory' );?>/assets/img/map-icon.png<?php endif;?>',
        shadowSize:   [0, 0],
        iconAnchor:   [67, 74],
        shadowAnchor: [0, 0],
        popupAnchor:  [-0, -6]
});

// create a map in the "map" div, set the view to a given place and zoom
var map = L.map('map').setView([<?php if ( get_sub_field('lat_lng')) : ?><?php the_sub_field('lat_lng');?><?php else : ?>52.1984856,0.1198099<?php endif;?>], 14);

// add an OpenStreetMap tile layer
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    maxZoom: 18,
    color: '#222',
    fillOpacity: '0.2',
    id: 'mapbox.light',
    accessToken: 'pk.eyJ1IjoiZ2Vvcmdlc3ltYmlhbiIsImEiOiJjampvZzlpanYyOG5pM3ZuenVkbnN1dnZ5In0.M_7ySs2e9JBzm-rLunXl3Q'
}).addTo(map);

// add a marker in the given location, attach some popup content to it and open the popup
L.marker([<?php if ( get_sub_field('lat_lng')) : ?><?php the_sub_field('lat_lng');?><?php else : ?>52.1984856,0.1198099<?php endif;?>], {icon: millIcon}).addTo(map);

</script>