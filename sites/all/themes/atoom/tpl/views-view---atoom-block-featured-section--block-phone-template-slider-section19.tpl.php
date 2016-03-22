<?php print render($title_prefix); ?>

<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($attachment_before): ?>
<div class="one_half">
      <?php print $attachment_before; ?>
</div>
<?php endif; ?>
<?php if ($rows): ?>
<div class="one_half last">
	<?php print $rows; ?>
</div>
<?php endif; ?>