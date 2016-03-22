<?php print render($title_prefix); ?>

<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<p class="clearfix margin_bottom3"></p>
<?php if ($rows): ?>
<div id="owl-demo13" class="owl-carousel">
	<div class="slidesec">
		<?php print $rows; ?>
	</div>
	<?php if ($attachment_before): ?>
	<div class="slidesec">
      <?php print $attachment_before; ?>
	</div>
	<?php endif; ?>
	<?php if ($attachment_after): ?>
	<div class="slidesec">
      <?php print $attachment_after; ?>
	</div>
	<?php endif; ?>
</div>
<?php endif; ?>