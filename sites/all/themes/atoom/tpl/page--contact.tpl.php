<?php require_once(drupal_get_path('theme','atoom').'/tpl/header.tpl.php');?>
<?php

	if (isset($node->field_contact_style) && !empty($node->field_contact_style))
	{
		$contact_style = $node->field_contact_style['und'][0]['value'];
	} else $contact_style = 'style1';

?>

<?php if ($contact_style == 'style1'): ?>
	<div class="page_title2">
		<div class="container">
			<h1><?php print drupal_get_title(); ?></h1>
			<span class="line"></span>
			<h5><?php if (!empty($node->body['und'][0]['summary'])) print $node->body['und'][0]['summary']; ?></h5>
		</div>
	</div>
	<div class="clearfix"></div>
<?php endif; ?>
	<!-- page title -->
<?php  if($page['content']):?>
	<div class="content_fullwidth <?php if ($contact_style == 'style2') { print 'lessmtp';} elseif ($contact_style == 'style3') print 'lessmbm' ;?>">
	<?php  if($contact_style == 'style2' && $page['embed_map']):?>
		<div class="one_full">
		<?php print render($page['embed_map']) ?>
		</div>
		<div class="clearfix margin_bottom10"></div>
	<?php endif; ?>
		<div class="container">
			<?php
				if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
					print render($tabs);
				endif;
				print $messages;
			?>
			<?php print render($page['content']) ?>
		</div>
		<?php  if($contact_style == 'style3' && $page['embed_map']):?>
		<div class="clearfix margin_bottom10"></div>
		<div class="one_full">
			<?php print render($page['embed_map']) ?>
		</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
<?php  if($page['section']):?>
	<?php print render($page['section']) ?>
<?php endif; ?>
<?php require_once(drupal_get_path('theme','atoom').'/tpl/footer.tpl.php');?>