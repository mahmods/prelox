
<style type="text/css">
.acf-map {
	width: 100%;
	height: 400px;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}
</style>

<script>
<?php $info = App::contactInfo() ?>
var address = '<?=$info['address']?>';
</script>
<?php
$location = get_field('map', 'options');

if( !empty($location) ):
?>
<div class="acf-map map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>