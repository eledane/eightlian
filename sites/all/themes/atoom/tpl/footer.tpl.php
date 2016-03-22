<?php
if (isset($node->field_footer_style) && !empty($node->field_footer_style))
	{
		$footer_style = $node->field_footer_style['und'][0]['value'];
	} else $footer_style = theme_get_setting('footer_style', 'atoom');
	if(empty($footer_style))
		$footer_style = 'footerv1';
?>
<?php if ($footer_style == 'footerv1') {?>

<?php if ($page['footer_style1_col1'] || $page['footer_style1_col2']): ?>
	<div class="footer">
	    <div class="container">
	    	<?php  if($page['footer_style1_col1']):?>
	        <div class="onecol_sixty">
	            <?php print render($page['footer_style1_col1']) ?>
	        </div>
	    	<?php endif; ?>
	    	<?php  if($page['footer_style1_col2']):?>
	        <div class="onecol_forty last animate" data-anim-type="fadeInUp" data-anim-delay="300">
	            <?php print render($page['footer_style1_col2']) ?>
	        </div>
	    	<?php endif; ?>
	    </div>
	</div>
<?php endif; ?>

<?php } elseif ($footer_style == 'footerv2') { ?>
	<div class="footer sty2">
		<?php if ($page['footer']): ?>
	    <div class="container">
	        <?php print render($page['footer']) ?>
	    </div>
		<?php endif; ?>
	</div>
<?php } elseif ($footer_style == 'footerv3') { ?>
	<div class="footer sty3">
		<?php if ($page['footer_style3']): ?>
	    <div class="container">
	        <?php print render($page['footer_style3']) ?>
	    </div>
		<?php endif; ?>
	</div>
<?php } elseif ($footer_style == 'footerv4') { ?>
	<div class="footer sty4">
		<?php if ($page['footer']): ?>
	    <div class="container">
	        <?php print render($page['footer']) ?>
	    </div>
		<?php endif; ?>
	</div>
<?php } elseif ($footer_style == 'footerv5') { ?>
	<div class="footer sty5">
		<?php if ($page['footer']): ?>
	    <div class="container">
	        <?php print render($page['footer']) ?>
	    </div>
		<?php endif; ?>
	</div>
<?php } else { ?>
	<div class="footer sty6">
		<?php if ($page['footer']): ?>
	    <div class="container">
	        <?php print render($page['footer']) ?>
	    </div>
		<?php endif; ?>
	</div>
<?php } ?>
	<!-- end footer -->

	<div class="clearfix"></div>

	<a href="#" class="scrollup"><?php print t('Scroll') ?></a><!-- end scroll to top of the page-->
    <?php
        $disable_switch = theme_get_setting('atoom_disable_switch', 'atoom');
        if (empty($disable_switch)) $disable_switch = 'on';
    ?>
    <?php if ($disable_switch == 'on'): ?>
    <?php require_once(drupal_get_path('theme','atoom').'/tpl/switcher-style.tpl.php'); ?>
    <?php endif; ?>
</div>
<!-- End Site Wrapper -->
