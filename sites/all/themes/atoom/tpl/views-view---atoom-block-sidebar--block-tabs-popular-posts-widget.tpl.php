<?php print render($title_prefix); ?>

<div id="tabs">
	<?php if ($header): ?>
	<?php print $header; ?>
	<?php endif; ?>
	<div class="tab_container">
		<?php if ($rows): ?>
		<div id="tab1" class="tab_content">
			<?php print $rows; ?>
		</div>
		<?php endif; ?>
		<?php if ($attachment_after): ?>
		<div id="tab2" class="tab_content">
			<?php print $attachment_after; ?>
		</div>
		<?php endif; ?>
		<?php if ($footer): ?>
		<div id="tab3" class="tab_content">
			<?php print $footer; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
