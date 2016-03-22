<?php print render($title_prefix); ?>

<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
<div id="grid-container2" class="cbp-l-grid-fullScreen">
	<?php print $rows; ?>
</div>
<?php endif; ?>
