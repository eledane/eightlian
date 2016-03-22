<?php require_once(drupal_get_path('theme','atoom').'/tpl/header.tpl.php');?>

<?php  if($page['content']):?>
	<div class="content_fullwidth">
		<div class="container">
		<?php
			if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
				print render($tabs);
			endif;
			print $messages;
		?>
		<?php print render($page['content']) ?>
		</div>
	</div>
<?php endif; ?>


<?php require_once(drupal_get_path('theme','atoom').'/tpl/footer.tpl.php');?>