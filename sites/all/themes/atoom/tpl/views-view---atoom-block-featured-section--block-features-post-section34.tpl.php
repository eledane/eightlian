<?php print render($title_prefix); ?>

<div class="container">
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>

<?php if ($rows): ?>
	<?php print $rows; ?>
<?php endif; ?>
<?php if ($attachment_after): ?>
	<p class="clearfix margin_bottom7"></p>
    <?php print $attachment_after; ?>
<?php endif; ?>
</div>