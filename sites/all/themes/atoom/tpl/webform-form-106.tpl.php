<div class="one_half">
	<?php print drupal_render($form['submitted']['name']); ?>
	<?php print drupal_render($form['submitted']['e_mail']); ?>
	<?php print drupal_render($form['submitted']['subject']); ?>
</div>
<div class="one_half last">
	<?php print drupal_render($form['submitted']['message']); ?>
</div>
<div class="clearfix"></div>
<?php print drupal_render($form['submitted']); ?>
<?php print drupal_render_children($form); ?>