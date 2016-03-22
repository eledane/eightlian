<?php print render($title_prefix); ?>

<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<p class="clearfix margin_bottom2"></p>
<div class="less6">
	<?php if ($rows): ?>
	<div id="owl-demo12" class="owl-carousel">
		<?php print $rows; ?>
	</div>
	<?php endif; ?>
</div>