<?php print render($title_prefix); ?>
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
<div class="masonry_section1">
<?php print $rows; ?>
</div>
<?php endif; ?>