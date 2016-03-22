<?php print render($title_prefix); ?>
<p class="clearfix margin_bottom12"></p>
<div class="container piechart">
	<?php if ($header): ?>
	<?php print $header; ?>
	<?php endif; ?>
	<?php if ($rows): ?>
	<?php print $rows; ?>
	<?php endif; ?>
</div>