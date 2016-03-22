<?php print render($title_prefix); ?>

<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>

<div class="ms-phone-template">
	<div class="ms-phone-cont">
		<img src="<?php print base_path().path_to_theme(); ?>/js/masterslider/style/phone.png" class="ms-phone-bg" alt="slider" />
		<div class="ms-lt-slider-cont">
			<div class="master-slider ms-skin-default" id="masterslider2">
			<?php print $rows; ?>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>