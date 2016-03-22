<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="<?php print $language->language; ?>" class="no-js">
<!--<![endif]-->

	<head>
		<title><?php print $head_title; ?></title>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    	<!-- this styles only adds some repairs on idevices  -->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    	<?php print $styles; ?><?php print $head; ?>
    	<?php
		//Tracking code
		$tracking_code = theme_get_setting('general_setting_tracking_code', 'atoom');
		print $tracking_code;
		//Custom css
		$custom_css = theme_get_setting('custom_css', 'atoom');
		if(!empty($custom_css)):
		?>
		<style type="text/css" media="all">
		<?php print $custom_css;?>
		</style>
		<?php
			endif;
		?>
	</head>
	<body class="<?php print $classes;?>"  <?php print $attributes;?> >
		<div id="skip-link">
			<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
		</div>
		<?php print $page_top; ?><?php print $page; ?><?php print $page_bottom; ?>
		<?php print $scripts; ?>
	</body>
</html>