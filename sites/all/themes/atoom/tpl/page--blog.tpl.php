<?php require_once(drupal_get_path('theme','atoom').'/tpl/header.tpl.php');?>
<?php
	if (isset($_GET['style'])) {
		$blog_style = $_GET['style'];
	} else {
		$blog_style = theme_get_setting('blog_style', 'atoom');
		if(empty($blog_style))
			$blog_style = 'default';
	}
	if (isset($node)) $blog_style = 'default';

	if (isset($_GET['sidebar'])) {
		$sidebar = $_GET['sidebar'];
	} elseif (isset($node->field_sidebar) && !empty($node->field_sidebar))
	{
		$sidebar = $node->field_sidebar['und'][0]['value'];
	} else $sidebar = theme_get_setting('blog_layout', 'atoom');
	if (empty($sidebar)) $sidebar = 'full';

	if (isset($_GET['page']))
	{
	    $pager = $_GET['page'] ;
	} else $pager = 0;
?>

	<div class="page_title3 sty3">
		<div class="container">
			<h1><?php print drupal_get_title(); ?></h1>
			<?php if ($breadcrumb): ?>
				<?php print $breadcrumb; ?>
			<?php endif; ?>
		</div>
	</div>
	<!-- page title -->

	<div class="clearfix"></div>
<?php  if($page['content']):?>
	<div class="content_fullwidth">
		<?php if ($sidebar == 'left' && $blog_style != 'masonry' && $blog_style != 'small'): ?>
		<div class="container blog">
			<!-- left sidebar starts -->
			<div class="left_sidebar">
				<?php print render($page['sidebar']) ?>
			</div>
			<div class="content_right">
			<?php
				if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
					print render($tabs);
				endif;
				print $messages;
			?>
			<?php print render($page['content']) ?>
			</div>
		</div>
		<?php elseif ($sidebar == 'right' && $blog_style != 'masonry' && $blog_style != 'small'): ?>
		<div class="container blog">
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
		<div class="container blog <?php if ($blog_style == 'masonry' || $blog_style == 'small') print 'grid' ?>">
			<?php if ($blog_style == 'small' && $page['blog_small_image']): ?>
				<?php print render($page['blog_small_image']) ?>
			<?php endif; ?>
			<?php
				if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
					print render($tabs);
				endif;
				print $messages;
			?>
			<?php print render($page['content']) ?>
			<?php if (!isset($node) && $blog_style == 'masonry'): ?>
				<?php print getMasonryPosts('blog', $pager) ?>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
<?php  if($page['section']):?>
	<?php print render($page['section']) ?>
<?php endif; ?>
<?php require_once(drupal_get_path('theme','atoom').'/tpl/footer.tpl.php');?>