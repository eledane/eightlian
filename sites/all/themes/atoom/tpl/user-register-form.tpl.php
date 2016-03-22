<?php
/* split the username and password from the submit button
so we can put in links above */
	global $base_url;
  	$form['actions']['submit']['#attributes']['class'] = array('fbut');
  	$form['actions']['submit']['#value'] = 'Create Account';
?>
<div class="logregform two">
	<div class="title">
		<h3><?php print t('REGISTRATION') ?></h3>
		<p><?php print t('Already Registered?') ?> &nbsp;<a href="<?php print $base_url.'/user/login' ?>"><?php print t('Log In') ?>.</a></p>
	</div>
	<div class="feildcont">
	<?php print drupal_render_children($form); ?>
	<?php print drupal_render($form['actions']); ?>
	</div>
</div>