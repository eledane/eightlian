<?php print render($title_prefix); ?>
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
	<?php print $rows; ?>
	<div class="clearfix divider_line13 margin_top4 lessm"></div>
<?php endif; ?>
<?php if ($pager): ?>
    <?php print $pager; ?>
<?php endif; ?>