<?php print render($title_prefix); ?>

<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<div class="container">
<?php if ($attachment_before): ?>
	<div class="box">
		<div id="owl-demo20" class="owl-carousel">
    	<?php print $attachment_before; ?>
    	</div>
	</div>
<?php endif; ?>
	<?php if ($rows): ?>
	<div class="box two animate" data-anim-type="fadeIn" data-anim-delay="300">
	<?php print $rows; ?>
	</div>
	<?php endif; ?>
</div>