<?php get_header();?>



<div class="row" style="margin-top: 2em; border-top: solid .05em #6d5531; border-bottom: solid .05em #6d5531;">
	<div class="col-md-3 bread_box">
		<span class="breadcrumps">Home/Buy/WhereToBuy</span>
	</div>
	<div class="col-md-5 col-md-offset-0">
		<h1 class="contact">Where To Buy</h1>
	</div>
	<div class="clearfix"></div>
</div>

<section class="mapa">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<div id="mapdiv" style="height: 370px; width: 100%;"></div>
	</div>
	</div>
</section>

<?php

$miejsca = get_field('places');

?>

<section class="places">	
	<div class="row">	
	<?php foreach ($miejsca as $item): ?>	
		<div class="col-md-3 col-md-offset-1">
			<div class="row">
				<div class="col-md-4">
					<img src="<?php echo get_theme_file_uri('img/logo_places.png'); ?>" height="80" alt="">
				</div>
				<div class="col-md-8">
					<p><?= $item['name']; ?></p>					
					<h5><?= $item['address']; ?></h5>					
				</div>
			</div>
		</div>
		<?php endforeach; ?>	
	</div>
		
</section>






<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
<script>
    var element = document.getElementById('mapdiv');
    var map = L.map(element);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

    var brownPin = L.icon({
        iconUrl: '<?php echo get_theme_file_uri('img/logo_places.png'); ?>',
        iconSize: [40],
        iconAnchor: [10, 30],
        popupAnchor: [0, -35]
    });
   <?php $miejsca = get_field('places'); ?>
   <?php foreach ($miejsca as $item): ?>

    L.marker([<?= $item['lat']; ?>, <?= $item['lng']; ?>], {icon: brownPin}).addTo(map).bindPopup("Here We Are!");
   

	<?php endforeach; ?>	
    var target = L.latLng('<?= $item['lat']; ?>', '<?= $item['lng']; ?>');
    map.setView(target, 7);
</script>


<?php get_footer(); ?>