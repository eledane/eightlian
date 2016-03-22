<?php require_once(drupal_get_path('theme','atoom').'/tpl/header.tpl.php');?>


<?php  if($page['content']):?>

	<?php

		if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):

			print render($tabs);

		endif;

		print $messages;

		unset($page['content']['system_main']['default_message']);

	?>

	<?php print render($page['content']) ?>

<?php endif; ?>



<?php  if($page['section']):?>

	<?php print render($page['section']) ?>

<?php endif; ?>

<?php



	if (isset($node->field_background_color) && !empty($node->field_background_color))

	{

			$background_color = $node->field_background_color['und'][0]['rgb'];

	} else $background_color = '#ffffff';

	if (isset($node->field_image) && !empty($node->field_image))

	{

			$uri_image = $node->field_image['und'][0]['uri'];

			$background_image = file_create_url($uri_image);

	} else $background_image = '';

?>

<input type="hidden" value="<?php print $background_color; ?>" id="home-background" />

<input type="hidden" value="<?php print $background_image; ?>" id="background-image" />

<?php require_once(drupal_get_path('theme','atoom').'/tpl/footer.tpl.php');?>