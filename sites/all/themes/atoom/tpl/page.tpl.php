<?php require_once(drupal_get_path('theme','atoom').'/tpl/header.tpl.php');?>
<?php

	if (isset($node->field_sidebar) && !empty($node->field_sidebar))
	{
		$sidebar = $node->field_sidebar['und'][0]['value'];
	} else $sidebar = 'full';
	if (isset($node->field_padding_off) && !empty($node->field_padding_off))
	{
		$padding_off = $node->field_padding_off['und'][0]['value'];
		if (isset($node->field_padding_off['und'][1]['value'])){
			$padding_off_1 = $node->field_padding_off['und'][1]['value'];
		} else $padding_off_1 = '';
	} else {
		$padding_off = '';
		$padding_off_1 = '';
	}
	if (isset($node)) {
	 	$node_type = $node->type;
	 	$nid = $node->nid;
	}
	else {
	 	$node_type = '';
	 	$nid = '';
	}
	if (isset($node->field_page_title_style) && !empty($node->field_page_title_style))
	{
		$page_title_style = $node->field_page_title_style['und'][0]['value'];
	} else $page_title_style = 'style1';

?>
<?php if ($node_type == 'page' && $page_title_style != 'style2' && $page_title_style != 'disable'): ?>
	<div class="page_title2">
		<div class="container">
			<h1><?php print drupal_get_title(); ?></h1>
			<span class="line"></span>
			<h5><?php if (!empty($node->body['und'][0]['summary'])) print $node->body['und'][0]['summary']; ?></h5>
		</div>
	</div>
<?php elseif ($node_type != 'page' || $page_title_style == 'style2' && $page_title_style != 'disable'): ?>
	<div class="page_title3 sty3">
		<div class="container">
			<h1><?php print drupal_get_title(); ?></h1>
			<?php if ($breadcrumb): ?>
				<?php print $breadcrumb; ?>
			<?php endif; ?>
		</div>
	</div>
<?php else: ?>

<?php endif; ?>
	<!-- page title -->

	<div class="clearfix"></div>
<?php  if($page['content']):?>
	<div class="content_fullwidth <?php print $padding_off.' '.$padding_off_1; ?>">
		<?php if ($sidebar == 'left'): ?>
		<div class="container">
			<!-- left sidebar starts -->
			<div class="left_sidebar">
				<?php print render($page['sidebar']) ?>
			</div>
			<div class="content_right">
			<?php
				if ((!empty($tabs['#primary']) || !empty($tabs['#secondary'])) && arg(0) != 'user'):
					print render($tabs);
				endif;
				print $messages;
			?>
			<?php print render($page['content']) ?>
			</div>
		</div>
		<?php elseif ($sidebar == 'right' || arg(0) == 'archive'): ?>
		<div class="container">
			<div class="content_left">
				<?php
				if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
					print render($tabs);
				endif;
				print $messages;
			?>
			<?php print render($page['content']) ?>
			</div>
			<!-- right sidebar starts -->
			<div class="right_sidebar">
				<?php print render($page['sidebar']) ?>
			</div>
		</div>
		<?php else: ?>
		<?php if ($node_type != 'page'): ?>
		<div class="container">
			<?php
				if ((!empty($tabs['#primary']) || !empty($tabs['#secondary'])) && arg(0) != 'user'):
					print render($tabs);
				endif;
				print $messages;
			?>
			<?php print render($page['content']) ?>
		</div>
		<?php else: ?>
			<?php
				if ((!empty($tabs['#primary']) || !empty($tabs['#secondary'])) && arg(0) != 'user'):
					print render($tabs);
				endif;
				print $messages;
			?>
			<?php print render($page['content']) ?>
		<?php endif; ?>
		<?php endif; ?>
		<?php  if($page['section']):?>
		<?php print render($page['section']) ?>
		<?php endif; ?>
	</div>
<?php endif; ?>

<?php require_once(drupal_get_path('theme','atoom').'/tpl/footer.tpl.php');?>