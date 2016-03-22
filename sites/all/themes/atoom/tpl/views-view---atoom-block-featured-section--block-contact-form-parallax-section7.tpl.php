<?php print render($title_prefix); ?>

<div class="container">
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<p class="clearfix margin_bottom3"></p>
<?php if ($rows): ?>
	<?php print $rows; ?>
<?php endif; ?>
</div>