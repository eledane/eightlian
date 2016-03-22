<?php global $base_url; ?>

<?php

	$contact_mail = theme_get_setting('contact_mail', 'atoom');

	$contact_phone = theme_get_setting('contact_phone', 'atoom');

	if (isset($node->field_header_style) && !empty($node->field_header_style))

		{

			$header_style = $node->field_header_style['und'][0]['value'];

		} else $header_style = theme_get_setting('header_style', 'atoom');

		if(empty($header_style))

			$header_style = 'headerv1';

	if (isset($node->field_color_link_menu) && !empty($node->field_color_link_menu))

		{

			$menu_color = $node->field_color_link_menu['und'][0]['rgb'];

		} else $menu_color = '';

	if (isset($node->field_footer_style) && !empty($node->field_footer_style))

		{

			$footer_style = $node->field_footer_style['und'][0]['value'];

		} else $footer_style = theme_get_setting('footer_style', 'atoom');

		if(empty($footer_style))

			$footer_style = 'footerv1';

	if (isset($node->field_slider_wrap) && !empty($node->field_slider_wrap))

		{

			$slider_wrap = $node->field_slider_wrap['und'][0]['value'];

		} else $slider_wrap = theme_get_setting('slider_wrap', 'atoom');

		if(empty($slider_wrap))

			$slider_wrap = 'off';

?>

<?php if ($header_style == 'headerv3'): ?>

	<div class="top_nav">

		<?php if (!empty($contact_mail) || !empty($contact_phone)): ?>

	    <div class="container_full">

	        <div class="left">

	        	<?php if (!empty($contact_mail)){ ?>

	            <a href="mailto:<?php print $contact_mail; ?>"><i class="fa fa-envelope"></i>&nbsp; <?php print $contact_mail; ?></a>

	            <?php } ?>

	            <?php if (!empty($contact_phone)) {?>

	            <i class="fa fa-phone-square"></i>&nbsp; <?php print $contact_phone; ?>

	            <?php } ?>

	        </div>

	        <!-- end left -->

	        <div class="right">

	            <a href="<?php print $base_url.'/user/register'; ?>" class="tpbut two active"><i class="fa fa-pencil-square-o"></i>&nbsp; <?php print t('Register') ?></a>

	            <a href="<?php print $base_url.'/user/login'; ?>" class="tpbut"><i class="fa fa-lock"></i>&nbsp; <?php print t('Login') ?></a>
				<?php  if($page['header_top_right']):?>
	            	<?php print render($page['header_top_right']) ?>
	        	<?php endif; ?>
	        </div>

	        <!-- end right -->

	    </div>

		<?php endif; ?>

	</div>

	<!-- end top navigation links -->

	<div class="clearfix"></div>

<?php endif; ?>

<?php if ($slider_wrap == 'on' && $page['slider_wrap']): ?>

	<div id="sliderWrap">

	    <div id="openCloseIdentifier"></div>

	    <div id="slider">

	        <div id="sliderContent">

	            <div class="container_full">

	                <?php print render($page['slider_wrap']) ?>

	            </div>

	        </div>

	    </div>

	    <div id="openCloseWrap">

	        <a href="#" class="topMenuAction" id="topMenuImage">

	        	<img id="image-open" src="<?php print base_path().path_to_theme(); ?>/js/slidepanel/open.png" alt="open" title="open" />

	        	<img id="image-close" src="<?php print base_path().path_to_theme(); ?>/js/slidepanel/close.png" alt="close" title="close" />

	        </a>

	    </div>

	</div>

	<!-- end slide wrap -->

	<div class="clearfix"></div>

<?php endif; ?>



<div class="site_wrapper">

<?php if ($header_style == 'headerv1' || $header_style == 'headerv4' || $header_style == 'headerv5' || $header_style == 'headerv6'){ ?>

	<header class="header">

	    <div class="container_full">

	        <!-- Logo -->

	        <?php if($logo): ?>

	        <div class="logo"><a href="<?php print $base_url; ?>" ><img id="logo" src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a></div>

	    	<?php endif; ?>

	        <!-- Navigation Menu -->

	        <?php  if($page['main_menu']):?>

	        <div class="menu_main">

	            <div class="navbar yamm navbar-default">

	                <div class="navbar-header">

	                    <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>

	                        <button type="button" > <i class="fa fa-bars"></i></button>

	                    </div>

	                </div>

	                <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">

	                    <nav>

	                        <?php print render($page['main_menu']) ?>

	                    </nav>

	                </div>

	            </div>

	        </div>

	    	<?php endif; ?>

	        <!-- end Navigation Menu -->

	    </div>

	</header>

	<?php if ($header_style == 'headerv5' || $header_style == 'headerv6'): ?>

	<div class="clearfix"></div>

	<?php else: ?>

	<div class="clearfix margin_bottom10"></div>

	<?php endif; ?>

<?php } elseif ($header_style == 'headerv2') {?>

	<div class="top_header">

		<!-- Logo -->

		<?php if($logo): ?>

	    <div class="logo two">

	    	<a href="<?php print $base_url; ?>" ><img id="logo" src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a>

	    </div>

	   	<?php endif; ?>

		<?php if(!empty($contact_phone) || !empty($contact_mail)): ?>

		<div class="top_right">



			<ul class="tinfo">



				<li>

					<i class="fa fa-phone"></i>

					<em><?php print t('Call Us') ?></em>

					<strong><?php print $contact_phone; ?></strong>

				</li>



				<li class="vline"></li>



				<li>

					<i class="fa fa-envelope"></i>

					<em><?php print t('Mail Us') ?></em>

					<strong><a href="mailto:<?php print $contact_mail; ?>"><?php print $contact_mail; ?></a></strong>

				</li>



			</ul>



		</div><!-- end top right info -->

		<?php endif; ?>

	</div><!-- end top header -->

	<header class="header">

	    <div class="container_full">

	        <!-- Navigation Menu -->

	        <?php  if($page['main_menu']):?>

	        <div class="menu_main_full">

	            <div class="navbar yamm navbar-default">

	                <div class="navbar-header">

	                    <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>

	                        <button type="button" > <i class="fa fa-bars"></i></button>

	                    </div>

	                </div>

	                <div id="navbar-collapse-1" class="navbar-collapse collapse">

	                    <nav>

	                        <?php print render($page['main_menu']) ?>

	                    </nav>

	                </div>

	            </div>

	        </div>

	   		<?php endif; ?>

	        <!-- end Navigation Menu -->

	    </div>

	</header>

	<div class="clearfix margin_bottom6"></div>

<?php } elseif ($header_style == 'headerv3') {?>

	<header class="header">

	    <div class="container_full">

	        <!-- Logo -->

	        <?php if($logo): ?>

	        <div class="logo">

	        	<a href="<?php print $base_url; ?>" ><img id="logo" src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a>

	        </div>

	    	<?php endif; ?>

	        <!-- Navigation Menu -->

	        <?php  if($page['main_menu']):?>

	        <div class="menu_main">

	            <div class="navbar yamm navbar-default">

	                <div class="navbar-header">

	                    <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>

	                        <button type="button" > <i class="fa fa-bars"></i></button>

	                    </div>

	                </div>

	                <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">

	                    <nav>

	                        <?php print render($page['main_menu']) ?>

	                    </nav>

	                </div>

	            </div>

	        </div>

	    	<?php endif; ?>

	        <!-- end Navigation Menu -->

	    </div>

	</header>

	<div class="clearfix margin_bottom10"></div>

<?php }  ?>

	<input id="header-version" type="hidden" value="<?php print $header_style; ?>" data-path-css="<?php print $base_url.'/'.path_to_theme().'/js/mainmenu/'; ?>"/>

	<input id="menu-color" type="hidden" value="<?php print $menu_color; ?>" />

	<!-- Slider

======================================= -->

	<?php  if($page['slider']):?>

		<?php print render($page['slider']) ?>

		<div class="clearfix"></div>

	<?php endif; ?>