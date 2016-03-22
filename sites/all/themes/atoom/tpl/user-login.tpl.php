<?php
/* split the username and password from the submit button
so we can put in links above */
	global $base_url;
  $form['actions']['submit']['#attributes']['class'] = array('fbut');
  $form['actions']['submit']['#value'] = 'Login Now!';
?>
<div class="logregform">
	<div class="title">
		<h3><?php print t('Account Login') ?></h3>
		<p><?php print t('Not member yet?') ?> &nbsp;<a href="<?php print $base_url.'/user/register' ?>"><?php print t('Sign Up') ?>.</a></p>
	</div>
	<div class="feildcont">
	<?php print drupal_render($form['name']); ?>
	<?php print drupal_render($form['pass']); ?>
	<label class="forgot-pass"><a href="<?php print $base_url.'/user/password' ?>"><?php print t('Forgot Password?') ?></a></label>
	<?php print drupal_render($form['actions']); ?>
	<?php print drupal_render_children($form); ?>
	</div>
</div>