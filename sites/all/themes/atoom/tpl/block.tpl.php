<?php



// if(!empty($block->background_color)) {

// 	$background_color = 'background-color: '.$block->background_color;

// } else {

// 	$background_color = '';

// }

$out = '';

if($block->region == 'section'){



	$out .= '<div class="'.$classes.'" '.$attributes.' >';

	$out .= render($title_suffix);

	if ($block->subject):

		$out .= '<div class="sectitile">';

		$out .= '<h5 class="caps">'.$block->subject.'<span class="line"></span></h5></div>';

	endif;

	$out .= $content;

	$out .= '</div><div class="clearfix"></div>';





} else if($block->region == 'footer_style1_col1'){



	$out .= '<div class="one_third animate '.$classes.'" '.$attributes.' data-anim-type="fadeInUp" data-anim-delay="300">';

	$out .= render($title_suffix);

	if ($block->subject):

		$out .= '<h4 class="gray"><strong>'.$block->subject.'</strong></h4>';

	endif;

	$out .= $content;

	$out .= '</div>';



} else if($block->region == 'footer_style1_col2'){



	$out .= '<div class="'.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject):

		$out .= '<h4 class="gray"><strong>'.$block->subject.'</strong></h4>';

	endif;

	$out .= $content;

	$out .= '</div>';



} else if($block->region == 'footer_style3'){



	$out .= '<div class="'.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject):

		$out .= '<h4>'.$block->subject.'</h4><p class="clearfix margin_bottom1"></p>';

	endif;

	$out .= $content;

	$out .= '</div>';



}elseif($block->region == 'slider_wrap' || $block->region == 'footer'){

	$out .= '<div class="'.$classes.'"  '.$attributes.' >';

	$out .= render($title_suffix);

	if ($block->subject):

		$out .= '<h5 class="white">'.$block->subject.'</h5>';

	endif;

	$out .= $content;

	$out .= '</div>';



}elseif($block->region == 'slider' || $block->region == 'content'){

	$out .= '<div class="'.$classes.'"  '.$attributes.' >';

	$out .= render($title_suffix);

	if ($block->subject):

		$out .= 'h2>'.$block->subject.'</h2>';

	endif;

	$out .= $content;

	$out .= '</div>';



}elseif($block->region == 'sidebar'){



	$out .= '<div class="sidebar_widget '.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

    if ($block->subject)

		$out .= '<div class="sidebar_title"><h4>'.$block->subject.'</h4></div>';

	$out .= $content;

	$out .= '</div><div class="clearfix margin_top5"></div>';



}elseif($block->region == 'related_portfolio'){

	$out .= '<section id="related_portfolio" '.$classes.'" '.$attributes.'>';

	$out .= '<div class="container">';

	$out .= render($title_suffix);

    if ($block->subject)

		$out .= '<h4 class="column_title_center">'.$block->subject.'</h4>';

	$out .= $content;

	$out .= '</div></section>';





}elseif($block->region == 'footer1_col1' || $block->region == 'footer1_col2' || $block->region == 'footer1_col3'){



	$out .= '<aside class="widget '.$classes.'" '.$attributes.' >';



	$out .= render($title_suffix);



   if ($block->subject)



		$out .= '<h2 class="widget-title">'.$block->subject.'</h2>';

	$out .= '<div class="widget-content">';



	$out .= $content;



	$out .= '</div></aside>';



}elseif($block->region == 'footer2_col1' || $block->region == 'footer2_col2' || $block->region == 'footer2_col3' || $block->region == 'footer2_col4' || $block->region == 'footer2_col5'){



	$out .= '<aside class="widget '.$classes.'" '.$attributes.' >';



	$out .= render($title_suffix);



   if ($block->subject)



		$out .= '<h2 class="widget-title">'.$block->subject.'</h2>';

	$out .= '<div class="widget-content">';



	$out .= $content;



	$out .= '</div></aside>';



}elseif($block->region == 'footer_top'){

	if(!empty($block->block_id)) {

		$id = 'id="'.$block->block_id.'"';

	} else $id = "";

	$out .= '<div '.$id. ' class="' .$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject):

		$out .= '<h4>'.$block->subject.'</h4>';

	endif;

	$out .= $content;

	$out .= '</div>';



}elseif($block->region == 'main_menu'){

	$out .= '<nav '.$attributes.'>';

	$out .= $content;

	$out .= '</nav>';



}elseif($block->region == 'sidebar_second'){

	$out .= '<aside class="'.$classes.'" '.$attributes.' >';

	$out .= render($title_suffix);

   if ($block->subject)

		$out .= '<h4>'.$block->subject.'</h4>';

	$out .= $content;

	$out .= '</aside>';





}else{

	$out .= '<div id="'.$block_html_id.'" class="'.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

	 if ($block->subject)

		$out .= '<h5>'.$block->subject.'</h5>';

	$out .= $content;

	$out .= '</div>';

}

print $out;

?>