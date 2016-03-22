<?php print render($title_prefix); ?>
<?php if ($rows): ?>
<div class="container our-team">
	<?php if ($header): ?>
	<?php print $header; ?>
	<?php endif; ?>
	<?php print $rows; ?>
	<?php if ($attachment_after): ?>
	<p class="clearfix margin_bottom10"></p>
	<?php print $attachment_after;?>
	<?php endif; ?>
</div>
<?php endif; ?>