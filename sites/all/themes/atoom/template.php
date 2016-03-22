<?php
global $base_url;

function atoom_preprocess_html(&$variables) {
	//-- Google web fonts -->
	drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic', array('type' => 'external'));
	drupal_add_css('http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900', array('type' => 'external'));
	drupal_add_css('http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700', array('type' => 'external'));

}

// Add css Menu skin
//$menu_skin = theme_get_setting('built_in_skins', 'atoom');
// if(!empty($setting_skin)){
// 	$skin_color = '/css/colors/'.$setting_skin;
// }else{
// 	$skin_color = '/css/colors/1.css';
// }

// Add css skin

function atoom_form_comment_form_alter(&$form, &$form_state) {
	$form['comment_body']['#after_build'][] = 'atoom_customize_comment_form';
  	$form['your_comment']['subject'] = $form['subject'];
  	unset($form['subject']);
  	$form['your_comment']['subject']['#access'] = FALSE;
  	//Comment
  	$form['your_comment']['comment_body'] = $form['comment_body'];
  	unset($form['comment_body']);
  	$form['author']['name']['#title'] = 'Name';
  	$form['author']['mail']['#title'] = 'Mail';
  	$form['author']['mail']['#description'] = FALSE;
  	$form['author']['mail']['#access'] = TRUE;
  	$form['author']['homepage']['#title'] = 'Website';
  	$form['author']['homepage']['#access'] = TRUE;
  	$form['author']['mail']['#required'] = TRUE;
  	$form['author']['name']['#required'] = TRUE;
  	$form['actions']['submit']['#value'] = 'Submit Comment';

  	//echo '<pre>'; print_r($form['actions']);echo '</pre>';
}

function atoom_customize_comment_form(&$form) {
  $form[LANGUAGE_NONE][0]['format']['#access'] = FALSE;
  return $form;
}

function atoom_preprocess_page(&$vars) {

	if (isset($vars['node'])) {
		$vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
	}

	//404 page
	$status = drupal_get_http_header("status");
	if($status == "404 Not Found") {
		$vars['theme_hook_suggestions'][] = 'page__404';
	}

  	if(isset($vars['node']) && $vars['node']->type == 'special_pages' && isset($vars['node']->field_page_style)) {
  		if (!empty($vars['node']->field_page_style) && ($vars['node']->field_page_style['und'][0]['value'] == 'onepage1' || $vars['node']->field_page_style['und'][0]['value'] == 'onepage2')):
	  		$css_onepage_bootstrap = array(
			'#tag' => 'link', // The #tag is the html tag - <link />
			'#attributes' => array( // Set up an array of attributes inside the tag
			'href' => base_path().path_to_theme()."/js/onepage/bootstrap.min.css",
			'rel' => 'stylesheet',
			'type' => 'text/css',
			'data-baseurl'=>base_path().path_to_theme()
			),
			'#weight' => 2,
			);
			drupal_add_html_head($css_onepage_bootstrap, 'onepage-bootstrap');
	  		$css_onepage_menu = array(
			'#tag' => 'link', // The #tag is the html tag - <link />
			'#attributes' => array( // Set up an array of attributes inside the tag
			'href' => base_path().path_to_theme()."/js/onepage/jPinning.css",
			'rel' => 'stylesheet',
			'type' => 'text/css',
			'data-baseurl'=>base_path().path_to_theme()
			),
			'#weight' => 3,
			);
			drupal_add_html_head($css_onepage_menu, 'onepage-menu');
		    // drupal_add_css(path_to_theme(). "/js/onepage/jPinning.css", "atoom");
		    // $vars['styles'] = drupal_get_css();
		    drupal_add_js(path_to_theme() . '/js/onepage/jPinning.js');
		elseif (!empty($vars['node']->field_page_style) && $vars['node']->field_page_style['und'][0]['value'] == 'coming'):
			$css_comingsoon = array(
			'#tag' => 'link', // The #tag is the html tag - <link />
			'#attributes' => array( // Set up an array of attributes inside the tag
			'href' => base_path().path_to_theme()."/js/comingsoon/csoon.css",
			'rel' => 'stylesheet',
			'type' => 'text/css',
			'data-baseurl'=>base_path().path_to_theme()
			),
			'#weight' => 2,
			);
			drupal_add_html_head($css_comingsoon, 'coming-soon');
			function atoom_js_alter(&$js)
			{
			   unset($js[path_to_theme().'/js/universal/jquery.js']);
			}
			drupal_add_js('http://code.jquery.com/jquery-1.9.0.min.js');
			drupal_add_js(path_to_theme() . '/js/comingsoon/jquery.bcat.bgswitcher.js');
			drupal_add_js(path_to_theme() . '/js/comingsoon/custom.js');
			drupal_add_js(path_to_theme() . '/js/comingsoon/jquery.flipTimer.js');
		elseif (!empty($vars['node']->field_page_style) && $vars['node']->field_page_style['und'][0]['value'] == 'history'):
			$menu_skin = array(
			'#tag' => 'link', // The #tag is the html tag - <link />
			'#attributes' => array( // Set up an array of attributes inside the tag
			'href' => base_path().path_to_theme().'/js/mainmenu/menu.css',
			'rel' => 'stylesheet',
			'type' => 'text/css',
			'id' => 'menu-skin',
			'data-baseurl'=>base_path().path_to_theme()
			),
			'#weight' => 1,
			);
			drupal_add_html_head($menu_skin, 'menu');
			$timeline = array(
				'#tag' => 'link', // The #tag is the html tag - <link />
				'#attributes' => array( // Set up an array of attributes inside the tag
				'href' => base_path().path_to_theme().'/js/timeline/timeline.css',
				'rel' => 'stylesheet',
				'type' => 'text/css',
				'id' => 'menu-skin',
				'data-baseurl'=>base_path().path_to_theme()
				),
				'#weight' => 2,
			);
			drupal_add_html_head($timeline, 'timeline-css');
		endif;

  	} else {
  		$menu_skin = array(
			'#tag' => 'link', // The #tag is the html tag - <link />
			'#attributes' => array( // Set up an array of attributes inside the tag
			'href' => base_path().path_to_theme().'/js/mainmenu/menu.css',
			'rel' => 'stylesheet',
			'type' => 'text/css',
			'id' => 'menu-skin',
			'data-baseurl'=>base_path().path_to_theme()
			),
			'#weight' => 1,
		);
		drupal_add_html_head($menu_skin, 'menu');
  	}

}


// Remove superfish css files.
function atoom_css_alter(&$css) {
	unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
	unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);

//	unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
}



function atoom_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == 'search_block_form') {
		$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
		$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
		$form['search_block_form']['#attributes']['id'] = array("mod-search-searchword");
		//disabled submit button
		//unset($form['actions']['submit']);
		unset($form['search_block_form']['#title']);
		$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
		$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
	}
	if($form_id == 'contact_site_form'){
		$form['mail']['#attributes']['class'] = array("input-contact-form");
		$form['name']['#attributes']['class'] = array("input-contact-form");
		$form['subject']['#attributes']['class'] = array("input-contact-form");
		$form['message']['#attributes']['class'] = array("message-contact-form");
		$form['actions']['submit']['#attributes']['class'] = array('btn btn-success contact-form-button');
	}
	if ($form_id == 'comment_form') {
		$form['comment_filter']['format'] = array(); // nuke wysiwyg from comments
	}

}

function atoom_textarea($variables) {
  $element = $variables['element'];
  $element['#attributes']['name'] = $element['#name'];
  $element['#attributes']['id'] = $element['#id'];
  $element['#attributes']['cols'] = $element['#cols'];
  $element['#attributes']['rows'] = $element['#rows'];
  _form_set_class($element, array('form-textarea'));

  $wrapper_attributes = array(
    'class' => array('form-textarea-wrapper'),
  );

  // Add resizable behavior.
  if (!empty($element['#resizable'])) {
    $wrapper_attributes['class'][] = 'resizable';
  }

  $output = '<div' . drupal_attributes($wrapper_attributes) . '>';
  $output .= '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
  $output .= '</div>';
  return $output;
}
function atoom_breadcrumb($variables) {
	$crumbs ='';
	$breadcrumb = $variables['breadcrumb'];
	if (!empty($breadcrumb)) {
		$crumbs .= '<div class="pagenation">&nbsp;';
		foreach($breadcrumb as $value) {

			$crumbs .= $value.' <i>/</i> ';
		}
		$crumbs .= drupal_get_title();
		return $crumbs.'</div>';
	}else{
		return NULL;
	}
}
//custom main menu
function atoom_menu_tree__main_menu(array $variables) {
	if (preg_match("/\bexpanded\b/i", $variables['tree'])){
	return '<ul class="nav navbar-nav">' . $variables['tree'] . '</ul>';
	} else {
	return '<ul class="dropdown-menu">' . $variables['tree'] . '</ul>';
	}
}

function atoom_menu_tree__menu_onepage_menu(array $variables) {
	$str = '';
	$str .= '<ul class="nav navbar-nav">';
		$str .= $variables['tree'];
	$str .= '</ul>';

	return $str;
}

/**Override Menu theme */


function atoom_links__system_menu_onepage_menu($variables) {
	$str = 'class="nav navbar-nav"';
		foreach ($variables['links'] as $link) {
        $str .= "<li class='menu-item'>".l($link['title'], $link['path'], $link)."</li>";
    }
	$str .= '</ul>';
	return $str;
}
function hook_preprocess_page(&$variables) {
	if (arg(0) == 'node' && is_numeric($nid)) {
		if (isset($variables['page']['content']['system_main']['nodes'][$nid])) {
			$variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][$nid];
			if (empty($variables['node_content']['field_show_page_title'])) {
			$variables['node_content']['field_show_page_title'] = NULL;
			}
		}
	}
}

function getRelatedPosts($ntype,$nid){
	$nids = db_query("SELECT n.nid, title FROM {node} n WHERE n.status = 1 AND n.type = :type AND n.nid <> :nid ORDER BY RAND() LIMIT 0,6", array(':type' => $ntype, ':nid' => $nid))->fetchCol();
	$nodes = node_load_multiple($nids);
	$return_string = '' ;
	if (!empty($nodes)):
		foreach ($nodes as $node) :
			$field_image = field_get_items('node', $node, 'field_image');
			$return_string .= '<div class="related-post"><figure>';
			$return_string .= '<a href="'.url("node/" . $node->nid).'">';
			$return_string .= theme('image_style', array('style_name' => 'image_112x70', 'path' => $field_image[0]['uri'], 'attributes'=>array('alt'=>$node->title)));
			$return_string .= '</a></figure>';
			$return_string .= '<p class="title"><a href="'.url("node/" . $node->nid).'">';
			$return_string .= $node->title.'</a></p>';
			$return_string .= '<p class="meta">'.format_date($node->created, 'custom', 'd M Y').', '.$node->comment_count.' Comments</p></div>';
		endforeach;
	endif;
	return $return_string.'<div class="riva-insert-menu-here"></div>';
}

function getMasonryPosts($ntype, $pager){
	$style_image = array(
		'image_400x600',
		'image_400x400',
		'image_400x400',
		'image_400x600',
		'image_400x600',
		'image_400x400',
		'image_400x400',
		'image_400x400',
		'image_400x600',
		'image_400x400',
		'image_400x400',
		'image_400x400'
		);
	$result = db_query("SELECT COUNT(*) amount FROM {node} n WHERE n.type = :type", array(':type' => $ntype))->fetch();
	$count_post = $result->amount;
	$count_page = ceil($count_post/12);
	$count = $pager*12;
	$nids = db_query("SELECT n.nid, title FROM {node} n WHERE n.status = 1 AND n.type = :type  ORDER BY n.created DESC LIMIT $count,12", array(':type' => $ntype))->fetchCol();
	$nodes = node_load_multiple($nids);
	$return_string = '<div id="grid-container9" class="cbp-l-grid-masonry-projects">' ;
	if (!empty($nodes)):
		$i = 0;
		foreach ($nodes as $node) :
			$field_image = field_get_items('node', $node, 'field_image');
			$terms = field_view_field('node', $node, 'field_categories');
			$term_name = $terms['#items'][0]['taxonomy_term']->name;
			$return_string .= '<div class="cbp-item graphic"><div class="cbp-caption"><div class="cbp-caption-defaultWrap">';
			$return_string .= '<a href="'.url("node/" . $node->nid).'">';
			$return_string .= theme('image_style', array('style_name' => $style_image[$i], 'path' => $field_image[0]['uri'], 'attributes'=>array('alt'=>$node->title)));
			$return_string .= '</a></div></div><a href="'.url("node/" . $node->nid).'" class="cbp-l-grid-masonry-projects-title">';
			$return_string .= $node->title.'</a><div class="cbp-l-grid-masonry-projects-desc">'.$term_name.'</div></div>';
			$i++;
		endforeach;
	endif;
	$return_string .= '</div><div class="pagination">';
	if($pager > 0){
		$prev = $pager - 1;
		$return_string.= "<a href='blog?style=masonry&page={$prev}' class='navlinks'>&lt; Previous</a>";
	}
	for ( $i = 0; $i < $count_page; $i++ )
	{
		if ($i == $pager) {
			$current = 'current';
		} else $current = '';
		$page = $i + 1 ;
		$return_string.= "<a class='navlinks {$current}' href='blog?style=masonry&page={$i}'>{$page}</a>";
	}
	if($pager < $count_page - 1){
		$next = $pager + 1;
		$return_string.= "<a href='blog?style=masonry&page={$next}' class='navlinks'>Next ></a>";
	}
	return $return_string.'</div>';
}

function atoom_preprocess_node(&$vars) {
	unset($vars['content']['links']['statistics']['#links']['statistics_counter']);
}

function atoom_menu_link(array $variables) {
  	$element = $variables['element'];
  	$sub_menu = '';
  	if($element['#original_link']['menu_name'] == 'main-menu') {

	  	if ($element['#below'] && $element['#original_link']['depth'] == 1) {
	  		unset($element['#below']['#theme_wrappers']);
	  		$element['#attributes']['class'][] = 'dropdown level-' . $element['#original_link']['depth'];
	    	$sub_menu = '<ul class="dropdown-menu">'.drupal_render($element['#below']).'</ul>';
	  	} elseif ($element['#below'] && $element['#original_link']['depth'] != 1) {
	  		$element['#attributes']['class'][] = 'dropdown-submenu mul level-' . $element['#original_link']['depth'];
	  		$sub_menu = drupal_render($element['#below']);
	  	} else {
	  		$element['#attributes']['class'][] = 'level-' . $element['#original_link']['depth'];
	  	}
	  	$output = l($element['#title'], $element['#href'], $element['#localized_options']);

	} else {
		if ($element['#below']) {
	    $sub_menu = drupal_render($element['#below']);
	  	}
		$output = l($element['#title'], $element['#href'], $element['#localized_options']);
	}
	return '<li' . drupal_attributes($element ['#attributes']) . '>' . $output . $sub_menu . "</li>\n";

}

function atoom_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'atoom') . '/tpl',
  'template' => 'user-login',
  'preprocess functions' => array(
  'atoom_preprocess_user_login'
  ),
 );

  $items['user_register_form'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'atoom') . '/tpl',
  'template' => 'user-register-form',
  'preprocess functions' => array(
  'atoom_preprocess_user_register_form'
  ),
 );

  $items['user_pass_reset'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'atoom') . '/tpl',
  'template' => 'user-reset',
  'preprocess functions' => array(
  'atoom_preprocess_user_pass_reset'
  ),
 );

return $items;
}

