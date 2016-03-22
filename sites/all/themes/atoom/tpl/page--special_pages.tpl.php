<?php
	global $base_url;
	$contact_mail = theme_get_setting('contact_mail', 'atoom');
	$contact_phone = theme_get_setting('contact_phone', 'atoom');
	if (isset($node->field_page_style) && !empty($node->field_page_style))
	{
		$page_style = $node->field_page_style['und'][0]['value'];
	} else $page_style = 'onepage1';
	if ($page_style == 'history')
		require_once(drupal_get_path('theme','atoom').'/tpl/header.tpl.php');
?>

<?php if ($page_style == 'onepage1' || $page_style == 'onepage2'){ ?>
<div class="site_wrapper">
	<div id="wrap">
		<div class="navbar navbar-default <?php if ($page_style == 'onepage2') print 'onepagev2' ?>">
			<div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only"><?php print t('Toggle navigation') ?></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        </button>
		        <?php if($logo): ?>
				<a class="navbar-brand" href="<?php print $base_url; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a>
				<?php endif; ?>
    		</div>

    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php  if($page['onepage_menu']):?>
		        	<?php print render($page['onepage_menu']) ?>
				<?php endif; ?>
				<?php if (!empty($contact_mail) || !empty($contact_phone)): ?>
		        <ul class="nav navbar-nav navbar-right">
		        	<?php if (!empty($contact_mail)) { ?>
		        	<li><a href="mailto:<?php print $contact_mail; ?>" class="grl"><?php print $contact_mail; ?></a></li>
		        	<?php } ?>
		        	<?php if (!empty($contact_phone)) {?>
		        	<li><b><?php print $contact_phone; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		        	<?php } ?>
		        </ul>
		    	<?php endif; ?>
			</div><!-- /.navbar-collapse -->

		</div><!-- end header section -->

	<?php if ($page_style == 'onepage1') { ?>
		<div class="margin_top9"></div>
		<div class="clearfix"></div>
	<?php } else { ?>
	<div class="clearfix"></div>
	<?php } ?>
	<?php  if($page['slider']):?>
		<?php print render($page['slider']) ?>
	<?php endif; ?>
	</div><!-- end Wrap -->
	<?php  if($page['content']):?>
		<?php
			if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
			print render($tabs);
			endif;
			print $messages;
		?>
		<?php print render($page['content']) ?>
	<?php endif; ?>
<?php } elseif ($page_style == 'landing'){ ?>
<ul role="tablist" class="lanscroll">
    <li id="p1"><a href="#" role="tab" class="active" id="pane1"></a></li>
</ul>
<div class="site_wrapper_full">
	<div class="pane1">
	    <div class="slider_area">
	    	<?php $logo2 = $base_url.'/'.path_to_theme()."/logo-white2.png"; ?>
	        <?php if (getimagesize($logo2) != false): ?>
	        <div class="lanlogo">
	        	<img src="<?php print base_path().path_to_theme(); ?>/logo-white2.png" alt="" class="animate" data-anim-type="fadeInUp" data-anim-delay="300" />
	        </div>
	        <p class="clearfix"></p>
	        <?php endif; ?>
	        <?php  if($page['slider']):?>
			<?php print render($page['slider']) ?>
			<p class="clearfix"></p>
			<?php endif; ?>
			<h1 class="big2 white animate" data-anim-type="fadeInUp" data-anim-delay="900"><?php print drupal_get_title(); ?></h1>
	    </div>
	    <!-- end of masterslider -->
	</div>
	<!-- end this scroll section -->
	<?php  if($page['content']):?>
		<?php
			if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
			print render($tabs);
			endif;
			print $messages;
		?>
		<?php print render($page['content']) ?>
	<?php endif; ?>
	<?php } elseif ($page_style == 'coming') { ?>
	<?php
	if (isset($node->field_image) && !empty($node->field_image)) {
		$arr_image = '';
		foreach ($node->field_image['und'] as $key => $value) {
			$image_uri = $node->field_image['und'][$key]['uri'];
			$image_url = file_create_url($image_uri);
			$arr_image .= $image_url.',';
		}
	}
	if (isset($node->field_time_out) && !empty($node->field_time_out)) {
		$time_out = $node->field_time_out['und'][0]['value'];
	}
	?>
	<div id="bg-body">
	</div><!--end -->
	<div class="site_wrapper">
		<input type="hidden" id="background-coming" value="<?php print rtrim($arr_image, ","); ?>"/>
		<input type="hidden" id="time-out" value="<?php print $time_out; ?>"/>
	    <div class="comingsoon_page">
	        <div class="container two">
	            <div class="topcontsoon">
	                <img src="<?php print base_path().path_to_theme();?>/logo-white2.png" alt="" />
	                <div class="clearfix"></div>
	                <h5><?php print drupal_get_title(); ?></h5>
	            </div>
	            <!-- end section -->
	            <div class="countdown_dashboard">
	                <div class="flipTimer">
	                    <div class="days"></div>
	                    <div class="hours"></div>
	                    <div class="minutes"></div>
	                    <div class="seconds"></div>
	                    <div class="clearfix"></div>
	                    <div class="fttext">DAYS</div>
	                    <div class="fttext">HRS</div>
	                    <div class="fttext">MIN</div>
	                    <div class="fttext">SEC</div>
	                </div>
	            </div>
	            <!-- end section -->
	            <div class="clearfix"></div>
	            <?php  if($page['content']):?>
				<?php
					if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
					print render($tabs);
					endif;
					print $messages;
				?>
				<?php print render($page['content']) ?>
				<?php endif; ?>
	        </div>
	    </div>
	</div>

	<?php } else {?>
	<div class="page_title2">
		<div class="container">
			<h1><?php print drupal_get_title(); ?></h1>
			<span class="line"></span>
			<?php if (!empty($node->body['und'][0]['summary'])): ?>
			<h5><?php print $node->body['und'][0]['summary']; ?></h5>
			<?php endif; ?>
		</div>
	</div>
	<!-- page title -->

	<div class="clearfix"></div>
	<div class="content_fullwidth">
		<?php  if($page['content']):?>
			<?php
				if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
				print render($tabs);
				endif;
				print $messages;
			?>
			<?php print render($page['content']) ?>
		<?php endif; ?>
	</div>
	<?php } ?>
<?php  if($page['section']):?>
	<?php print render($page['section']) ?>
<?php endif; ?>
<?php if ($page_style == 'onepage1' || $page_style == 'onepage2' || $page_style == 'landing' || $page_style == 'history'): ?>
	<?php require_once(drupal_get_path('theme','atoom').'/tpl/footer.tpl.php');?>
<?php endif; ?>