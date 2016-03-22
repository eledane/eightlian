<?php
/* split the username and password from the submit button
so we can put in links above */
	global $base_url;
  	$form['actions']['submit']['#attributes']['class'] = array('fbut');
  	$form['actions']['submit']['#value'] = 'Submit';
?>
<div class="logregform two">
	<div class="title">
		<h3><?php print t('Create New Password') ?></h3>
		<p><?php print t('Not member yet?') ?> &nbsp;<a href="<?php print $base_url.'/user/register' ?>"><?php print t('Sign Up') ?>.</a></p>
	</div>
	<div class="feildcont">
	<?php print drupal_render_children($form); ?>
	<?php print drupal_render($form['actions']); ?>
	</div>
</div>