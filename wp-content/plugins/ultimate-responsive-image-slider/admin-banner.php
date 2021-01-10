<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
wp_enqueue_style( 'uris-feature-notice-css', URIS_PLUGIN_URL . 'assets/css/uris-feature-notice.css', array(), '1.2', 'all' );
wp_enqueue_style('uris-bootstrap-min', URIS_PLUGIN_URL.'assets/css/bootstrap-latest/bootstrap.css');
?>
<div class="row col-md-12 wpfrank_banner">
	<div class="col-md-6 col-sm-12 wpfrank_banner_img">
		<a href="http://wpfrank.com/account/signup/ultimate-responsive-image-slider-pro" target="_blank"><img class="img-fluid" src="<?php echo URIS_PLUGIN_URL . "assets/img/products/Ultimate-Responsive-Image-Slider-Pro.jpg"; ?>"></a>
	</div>
	<div class="col-md-6 col-sm-12 wpfrank_banner_features">
		<h1 style="color:#FFFFFF;">Тут можно добавлять или удалять фотографии в галерее</h1>
		<div class="plugin_version">
			<span><b>7.x</b>Version</span>
		</div>
	</div>
</div>