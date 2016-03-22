<?php
	if ($content['#node']->comment and !($content['#node']->comment == 1 and $content['#node']->comment_count)) { ?>

		<?php print render($content['comments']); ?>
		<div class="comment_form">
			<h5><?php print t('Leave a comment') ?></h5>
			<?php print str_replace('resizable', '', render($content['comment_form'])); ?>
		</div><!-- end comment form -->
		<div class="clearfix mar_top2"></div>
<?php
	}
?>
