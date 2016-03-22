<?php

function atoom_form_system_theme_settings_alter(&$form, $form_state) {

  $theme_path = drupal_get_path('theme', 'atoom');
  $form['settings'] = array(
      '#type' => 'vertical_tabs',
      '#title' => t('Theme settings'),
      '#weight' => 2,
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
      '#attached' => array(
          'css' => array(drupal_get_path('theme', 'atoom') . '/css/drupalet_base/admin.css'),
          'js' => array(
            drupal_get_path('theme', 'atoom') . '/js/drupalet_admin/admin.js',
          ),
      ),
  );

  $form['settings']['general_setting'] = array(
      '#type' => 'fieldset',
      '#title' => t('General Settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['general_setting']['general_setting_tracking_code'] = array(
      '#type' => 'textarea',
      '#title' => t('Tracking Code'),
      '#default_value' => theme_get_setting('general_setting_tracking_code', 'atoom'),
  );

  $form['settings']['general_setting']['layout_style'] = array(

      '#title' => t('Layout style'),

      '#type' => 'select',

      '#options' => array(
        'wide' => t('Wide'),
        'boxed' => t('Boxed'),
        ),

      '#default_value' => theme_get_setting('layout_style', 'atoom'),

  );


   $form['settings']['header'] = array(
      '#type' => 'fieldset',
      '#title' => t('Header settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

    $form['settings']['header']['header_style'] = array(

      '#title' => t('Header version'),

      '#type' => 'select',

      '#options' => array(
        'headerv1' => t('Header version 1'),
        'headerv2' => t('Header version 2'),
        'headerv3' => t('Header version 3'),
        'headerv4' => t('Header version 4'),
        'headerv5' => t('Header version 5'),
        'headerv6' => t('Header version 6'),
        ),

      '#default_value' => theme_get_setting('header_style', 'atoom'),

  );

   $form['settings']['header']['slider_wrap'] = array(

      '#title' => t('Slider wrap'),

      '#type' => 'select',

      '#options' => array(
        'off' => t('OFF'),
        'on' => t('ON'),
        ),

      '#default_value' => theme_get_setting('slider_wrap', 'atoom'),
      '#description'  => t('Display slider wrap on top website')

  );

   $form['settings']['header']['contact_mail'] = array(

      '#title' => t('Top right email'),

      '#type' => 'textfield',

      '#default_value' => theme_get_setting('contact_mail', 'atoom'),

  );

   $form['settings']['header']['contact_phone'] = array(

      '#title' => t('Top right phone'),

      '#type' => 'textfield',

      '#default_value' => theme_get_setting('contact_phone', 'atoom'),

  );



   $form['settings']['blogs'] = array(
      '#type' => 'fieldset',
      '#title' => t('Blogs settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['blogs']['blog_style'] = array(

      '#title' => t('Blog style'),

      '#type' => 'select',

      '#options' => array(
        'default' => t('Blog default'),
        'masonry' => t('Blog masonry'),
        'small' => t('Blog small image'),
        ),

      '#default_value' => theme_get_setting('blog_style', 'atoom'),

  );


  $form['settings']['blogs']['blog_layout'] = array(

      '#title' => t('Blog layout'),

      '#type' => 'select',

      '#options' => array(
        'fullwidth' => t('Full width'),
        'sidebarleft' => t('Sidebar left'),
        'sidebarright' => t('Sidebar right'),
        ),

      '#default_value' => theme_get_setting('blog_layout', 'atoom'),

  );

  $form['settings']['footer'] = array(
      '#type' => 'fieldset',
      '#title' => t('Footer settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['footer']['footer_style'] = array(

      '#title' => t('Footer style'),

      '#type' => 'select',

      '#options' => array(
        'footerv1' => t('Footer version 1'),
        'footerv2' => t('Footer version 2'),
        'footerv3' => t('Footer version 3'),
        'footerv4' => t('Footer version 4'),
        'footerv5' => t('Footer version 5'),
        'footerv6' => t('Footer version 6'),
        ),

      '#default_value' => theme_get_setting('footer_style', 'atoom'),

  );

  $form['settings']['footer']['footer_copyright_message'] = array(
      '#type' => 'textarea',
      '#title' => t('Footer copyright message'),
      '#default_value' => theme_get_setting('footer_copyright_message', 'atoom'),
  );


	$form['settings']['custom_css'] = array(
		  '#type' => 'fieldset',
		  '#title' => t('Custom CSS'),
		  '#collapsible' => TRUE,
		  '#collapsed' => FALSE,
	  );

	$form['settings']['custom_css']['custom_css'] = array(
		  '#type' => 'textarea',
		  '#title' => t('Custom CSS'),
		  '#default_value' => theme_get_setting('custom_css', 'atoom'),
		  '#description'  => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')
	  );

  $form['settings']['skin'] = array(

        '#type' => 'fieldset',

        '#title' => t('Switcher Style'),

        '#collapsible' => TRUE,

        '#collapsed' => FALSE,

    );


  //Disable Switcher style;

  $form['settings']['skin']['atoom_disable_switch'] = array(

      '#title' => t('Switcher style'),

      '#type' => 'select',

      '#options' => array('on' => t('ON'), 'off' => t('OFF')),

      '#default_value' => theme_get_setting('atoom_disable_switch', 'atoom'),

  );
  $form['settings']['skin']['built_in_skins'] = array(
    '#type' => 'radios',
    '#title' => t('Built-in Skins'),
    '#options' => array(
        'default.css' => t('Default'),
        'green.css' => t('Green'),
        'cyan.css' => t('Cyan'),
        'orange.css' => t('Orange'),
        'lightblue.css' => t('Light Blue'),
        'blue.css' => t('Blue'),
        'purple.css' => t('Purple'),
        'bridge.css' => t('Bridge'),
        'pink.css' => t('Pink'),
        'slate.css' => t('Slate'),
        'yellow.css' => t('yellow'),
        'darkred.css' => t('Darkred'),
    ),

    '#default_value' => theme_get_setting('built_in_skins','atoom')
  );

  $form['settings']['skin']['bg_patterns'] = array(
    '#type' => 'radios',
    '#title' => t('BG Patterns'),
    '#options' => array(
        '' => t('None pattern'),
        'pattern-one.css' => t('Pattern-one'),
        'pattern-two.css' => t('Pattern-two'),
        'pattern-three.css' => t('Pattern-three'),
        'pattern-four.css' => t('Pattern-four'),
        'pattern-five.css' => t('Pattern-five'),
        'pattern-six.css' => t('Pattern-six'),
        'pattern-seven.css' => t('Pattern-seven'),
        'pattern-eight.css' => t('pattern-eight'),
        'pattern-nine.css' => t('Pattern-nine'),
        'pattern-ten.css' => t('Pattern-ten'),
        'pattern-eleven.css' => t('Pattern-eleven'),
        'pattern-twelve.css' => t('Pattern-twelve'),
        'pattern-thirteen.css' => t('Pattern-thirteen'),
        'pattern-fourteen.css' => t('Pattern-fourteen'),
        'pattern-fifteen.css' => t('Pattern-fifteen'),
        'pattern-sixteen.css' => t('Pattern-sixteen'),
    ),

    '#default_value' => theme_get_setting('bg_patterns','atoom')
  );


}