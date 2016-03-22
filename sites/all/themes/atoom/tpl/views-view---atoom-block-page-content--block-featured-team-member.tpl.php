<?php print render($title_prefix); ?>
<?php if ($rows): ?>
<div class="container our-team">
	<?php if ($header): ?>
	<?php print $header; ?>
	<p class="clearfix margin_top3"></p>
	<?php endif; ?>
	<?php print $rows; ?>
</div>
<p class="clearfix margin_bottom11"></p>
<div class="container"><div class="divider_line"></div></div>
<?php endif; ?>