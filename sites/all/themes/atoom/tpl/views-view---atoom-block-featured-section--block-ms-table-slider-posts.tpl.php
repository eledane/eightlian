<?php print render($title_prefix); ?>
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
<div class="ms-tablet-template ms-tablet-land">
    <div class="ms-tablet-cont">
        <div class="ms-lt-slider-cont">
            <!-- masterslider -->
            <div class="master-slider ms-skin-default" id="masterslider">
			<?php print $rows; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>