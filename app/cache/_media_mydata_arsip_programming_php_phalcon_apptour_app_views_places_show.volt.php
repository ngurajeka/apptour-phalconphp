<main class="content" role="main">
	<section id="blog-intro" class="indigo lighten-4 section z-depth-1 article-intro" style="background-image:url('/assets/images/<?php echo $place->images; ?>');margin-bottom: 2rem;background-size: cover;background-position: center;height: 20rem;"></section>
	<section class="container" style="position: relative;">
		<article class="post card-panel z-depth-1 article-container" style="margin-top: -5rem;">
			
			<header>
				<time class="post-date grey-text" datetime="2014-07-02"><i class="mdi-device-access-time"></i> <?php echo $place->added_date . ', ' . $place->added_time; ?></time>
				<h2 class="center"><?php echo $place->name; ?></h2>
				<div class="center">
					<span><i class="mdi-maps-local-offer"></i> <?php echo $this->tag->linkTo(array('category/show/' . $category->urlname, $category->name)); ?></span>
				</div>
			</header>

			<section class="post-excerpt" style="padding-top: 15px;">

				<div class="row">
					<div class="col s12 m6">
						<h6 class="section-title"><span>Informasi</span></h6>
						<p class="flow-text"><?php echo $place->description; ?></p>
						<p class="flow-text"><address><?php echo $place->address; ?></address></p>
						<p class="flow-text">Latitude: <?php echo $place->latitude; ?>, Longitude: <?php echo $place->longitude; ?></p>
					</div>
					<div class="col s12 m6">
						<h6 class="section-title"><span>Peta</span></h6>
						<div id="googleMap" style="max-width:100%;height:500px;"></div>
					</div>
				</div>

			</section>
		</article>
	</section>
</main>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>

	(function() {

    if(!!navigator.geolocation) {
    	var map;

    	var mapOptions = {
    		zoom: 15,
    		mapTypeId: google.maps.MapTypeId.ROADMAP
    	};

    	map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

    	geolocate = new google.maps.LatLng(<?php echo $place->latitude; ?>,<?php echo $place->longitude; ?>);

    	var infowindow = new google.maps.InfoWindow({
    		map: map,
    		position: geolocate,
    		content: '<p><strong><?php echo $place->name; ?></strong></p>'
    	});
    	map.setCenter(geolocate);

    } else {
        document.getElementById('google_canvas').innerHTML = 'No Geolocation Support.';
    }
    
})();
	</script>