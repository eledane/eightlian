<?php print render($title_prefix); ?>

<div class="clearfix divider_line1 nomp"></div>
    <div class="container">
    	<p class="clearfix margin_bottom12"></p>
		<?php if ($header): ?>
		<?php print $header; ?>
		<?php endif; ?>
		<?php if ($rows): ?>
		<div class="one_half_big">
        	<div class="pro_bar">
			<?php print $rows; ?>
			</div>
		</div>
		<?php endif; ?>
		<?php if ($footer): ?>
		<div class="one_half_big last">
			<?php print $footer; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
<p class="clearfix margin_bottom12"></p>