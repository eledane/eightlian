<?php print render($title_prefix); ?>

<div class="container">
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($attachment_before): ?>
	<?php print $attachment_before	; ?>
<?php endif; ?>
<?php if ($rows): ?>
	<div class="one_half last animate" data-anim-type="fadeInRight" data-anim-delay="200">
	    <div id="st-accordion-three" class="st-accordion-two">
		<?php print $rows; ?>
		</div>
	</div>
<?php endif; ?>
</div>