<?php print render($title_prefix); ?>

<div class="container">
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($attachment_before): ?>
	<div id="sync4" class="owl-carousel">
    	<?php print $attachment_before; ?>
	</div>
<?php endif; ?>
<p class="clearfix margin_bottom5"></p>
<?php if ($rows): ?>
	<div id="sync3" class="owl-carousel">
	<?php print $rows; ?>
	</div><!-- end section -->
	<?php endif; ?>
</div>