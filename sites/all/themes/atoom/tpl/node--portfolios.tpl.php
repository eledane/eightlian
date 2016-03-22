<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
global $base_root, $base_url;

  if(isset($node->field_image) && !empty($node->field_image)){
    $imageone = $node->field_image['und'][0]['uri'];
    $uri =$node->field_image['und'][0]['uri'];
    $url_image = file_create_url($uri);
  }else{
    $imageone = '';
    $url_image = '';
  }
  if(!$page){ ?>

  <?php } else { ?>
  <div class="portfolio_area">
    <div class="portfolio_area_left"><a href="<?php if (!empty($node->field_link_site)) print $node->field_link_site['und'][0]['value']; ?>" target="_blank"><?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_800x600', 'attributes'=>array('alt'=>$title))) ?></a>
    </div>
    <div class="portfolio_area_right">
      <h3><?php print t('Project Description'); ?></h3>
      <p>
      <?php
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_featured']);
        hide($content['field_image']);
        hide($content['field_project_category']);
        hide($content['field_link_site']);
        hide($content['field_header_style']);
        hide($content['field_footer_style']);
        hide($content['field_video_url']);
        hide($content['field_author']);
        print render($content);
      ?>
      </p>
      <ul class="small_social_links">
        <li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php print $base_root.$node_url; ?>"><i class="fa fa-facebook"></i></a></li>
        <li><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php print $title; ?>&amp;url=<?php print $base_root.$node_url; ?>"><i class="fa fa-twitter"></i></a></li>
        <li><a target="_blank" href="http://plus.google.com/share?url=<?php print $base_root.$node_url; ?>"><i class="fa fa-google-plus"></i></a></li>
        <li><a target="_blank" href="https://www.linkedin.com/cws/share?url=<?php print $base_root.$node_url; ?>"><i class="fa fa-linkedin"></i></a></li>
        <li><a target="_blank" href="https://pinterest.com/pin/create/bookmarklet/?media=<?php print $url_image ?>&amp;url=<?php print $base_root.$node_url; ?>&amp;description=<?php print $title; ?>"><i class="fa fa-pinterest"></i></a></li>
      </ul>
      <div class="project_details">
        <h5><?php print t('Project Details'); ?></h5>
        <span><strong><?php print t('Date') ?></strong> <em><?php print format_date($node->created, 'custom', 'd F Y');?></em></span>
        <span>
          <strong><?php print t('Categories'); ?></strong>
          <em><?php print strip_tags(render($content['field_project_category']),'<a>'); ?> </em>
        </span>
        <span><strong><?php print t('Author'); ?></strong> <em><?php if (!empty($node->field_author)) print $node->field_author['und'][0]['value']; ?></em></span>
        <div class="clearfix margin_top5"></div>
        <?php if (!empty($node->field_link_site)): ?>
        <a href="<?php  print $node->field_link_site['und'][0]['value']; ?>" class="but_medium1"><i class="fa fa-hand-o-right fa-lg"></i>&nbsp; <?php print t('Visit Site'); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php } ?>
  <!-- End main content -->