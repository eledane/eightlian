<?php print render($title_prefix); ?>


<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>

<?php if ($rows): ?>
<div class="featured_section121">
	<div id="cd-timeline" class="cd-container">
		<?php print $rows; ?>
	</div>
</div>
<?php endif; ?>
<?php if ($pager): ?>
    <?php print $pager; ?>
<?php endif; ?>
