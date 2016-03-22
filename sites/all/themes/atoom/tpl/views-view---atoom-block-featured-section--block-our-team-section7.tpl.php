<?php print render($title_prefix); ?>

<div class="container">
	<?php if ($header): ?>
	<div class="onecol_forty_big">
	<?php print $header; ?>
	</div>
	<?php endif; ?>
	<?php if ($rows): ?>
	<div class="onecol_sixty_big last">
		<?php print $rows; ?>
	</div>
	<?php endif; ?>
</div>