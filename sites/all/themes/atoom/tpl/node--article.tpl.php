<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
global $base_root, $base_url;
  $user = user_load($uid); // Make sure the user object is fully loaded
  $display_name = field_get_items('user', $user, 'field_display_name');
  $about = field_get_items('user', $user, 'field_about');

  if(!empty($node->field_image)){
    $imageone = $node->field_image['und'][0]['uri'];
    $uri =$node->field_image['und'][0]['uri'];
    $url_image = file_create_url($uri);
  }else{
    $imageone = '';
  }

  if(isset($node->field_sidebar) && !empty($node->field_sidebar)){
    $sidebar = $node->field_sidebar['und'][0]['value'];
  }else{
    $sidebar = 'right';
  }

if(!$page){ ?>

  <div class="blog_post">
      <div class="blog_postcontent">
        <?php if (isset($node->field_embeded_video) && !empty($node->field_embeded_video)) : ?>
        <div class="video_frame"><?php print render($content['field_embeded_video']); ?></div>
        <?php elseif (!empty($node->field_image)): ?>
          <div class="image_frame"><a href="<?php print $node_url; ?>"><?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1170x520', 'attributes'=>array('alt'=>$title)));?></a></div>
        <?php endif; ?>
          <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
          <ul class="post_meta_links">
              <li><a href="<?php print $node_url; ?>" class="date"><?php print format_date($node->created, 'custom', 'd F Y');?></a></li>
              <li class="post_by"><i><?php print t('by') ?>:</i> <?php print $name ?></li>
              <li class="post_categoty"><i><?php print t('in') ?>:</i> <?php print strip_tags(render($content['field_categories']), '<a>'); ?>
              <li class="post_comments"><i><?php print t('note') ?>:</i> <a href="<?php print $node_url; ?>"><?php print $comment_count; ?> <?php print t('Comments'); ?></a></li>
          </ul>
          <div class="clearfix"></div>
          <div class="margin_top1"></div>
          <p>
          <?php
            hide($content['links']);
            hide($content['comments']);
            hide($content['field_categories']);
            hide($content['field_image']);
            hide($content['field_tags']);
            hide($content['field_sidebar']);
            print strip_tags(render($content),'<a>');
          ?>
          <a href="<?php print $node_url; ?>">read more...</a>
        </p>
      </div>
  </div>
  <!-- /# end post -->
  <div class="clearfix divider_line1"></div>
<?php } else { ?>
  <div class="blog_post">
    <div class="blog_postcontent">
    <?php if (isset($node->field_embeded_video) && !empty($node->field_embeded_video)) : ?>
      <div class="video_frame"><?php print render($content['field_embeded_video']); ?></div>
    <?php elseif (!empty($node->field_image)): ?>
      <div class="image_frame"><a href="<?php print $node_url; ?>"><?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_1170x520', 'attributes'=>array('alt'=>$title)));?></a>
      </div>
    <?php endif; ?>
      <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
      <ul class="post_meta_links">
        <li><a href="<?php print $node_url; ?>" class="date"><?php print format_date($node->created, 'custom', 'd F Y');?></a></li>
        <li class="post_by"><i><?php print t('by') ?>:</i> <?php print $name; ?></li>
        <li class="post_categoty"><i><?php print t('in') ?>:</i> <?php print strip_tags(render($content['field_categories']), '<a>'); ?></li>
        <li class="post_comments"><i><?php print t('note') ?>:</i> <a href="<?php print $node_url; ?>"><?php print $comment_count; ?> <?php print t('Comments') ?></a></li>
      </ul>
      <div class="clearfix"></div>
      <div class="margin_top1"></div>
      <p>
      <?php
        hide($content['links']);
        hide($content['comments']);
        hide($content['field_categories']);
        hide($content['field_image']);
        hide($content['field_tags']);
        hide($content['field_sidebar']);
        hide($content['field_featured']);
        print render($content);
      ?>
      </p>
    </div>
  </div>
  <!-- /# end post -->
  <div class="clearfix divider_line1"></div>
  <div class="sharepost">
    <h5 class="light"><?php print t('Share this Post'); ?></h5>
    <ul>
      <li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php print $base_root.$node_url; ?>">&nbsp;<i class="fa fa-facebook fa-lg"></i>&nbsp;</a></li>
      <li><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php print $title; ?>&amp;url=<?php print $base_root.$node_url; ?>"><i class="fa fa-twitter fa-lg"></i></a></li>
      <li><a target="_blank" href="http://plus.google.com/share?url=<?php print $base_root.$node_url; ?>"><i class="fa fa-google-plus fa-lg"></i></a></li>
      <li><a target="_blank" href="http://www.reddit.com/submit?url=<?php print $base_root.$node_url; ?>&amp;title=<?php print $title; ?>"><i class="fa fa-reddit"></i></a></li>
      <li><a target="_blank" href="http://digg.com/submit?url=<?php print $base_root.$node_url; ?>&amp;title=<?php print $title; ?>"><i class="fa fa-digg fa-lg"></i></a></li>
      <li><a target="_blank" href="https://www.linkedin.com/cws/share?url=<?php print $base_root.$node_url; ?>"><i class="fa fa-linkedin fa-lg"></i></a></li>
      <li><a target="_blank" href="https://pinterest.com/pin/create/bookmarklet/?media=<?php print $url_image ?>&amp;url=<?php print $base_root.$node_url; ?>&amp;description=<?php print $title; ?>"><i class="fa fa-pinterest fa-lg"></i></a></li>
      <li><a target="_blank" href="http://www.tumblr.com/share/link?url=<?php print $base_root.$node_url; ?>&amp;name=<?php print $title; ?>"><i class="fa fa-tumblr-square fa-lg"></i></a></li>
    </ul>
  </div>
  <!-- end share post links -->
  <div class="clearfix"></div>
  <h5 class="light"><?php print t('About the Author'); ?></h5>
  <div class="about_author">
    <?php if($user_picture): ?>
    <?php print $user_picture; ?>
    <?php endif; ?>
    <span><?php if (!empty($display_name)) {print $display_name[0]['value'];} else print $name; ?></span>
    <?php if (!empty($about)): ?>
    <p><?php print $about[0]['value'] ?></p>
    <?php endif; ?>
  </div>
  <!-- end about author -->
  <div class="clearfix margin_top7"></div>
  <div class="one_half">
    <div class="popular-posts-area">
      <h5 class="light"><?php print t('Recent Posts') ?></h5>
      <div class="clearfix marb2"></div>
      <?php
        print views_embed_view('_atoom_block_sidebar', 'block_recent_posts_widget',$node->nid);
      ?>
    </div>
  </div>
  <!-- end recent posts -->
  <div class="one_half last">
    <div class="popular-posts-area">
      <h5 class="light"><?php print t('Popular Posts'); ?></h5>
      <div class="clearfix marb2"></div>
      <?php
        print views_embed_view('_atoom_block_sidebar', 'block_popular_posts_widget',$node->nid);
      ?>
    </div>
  </div>
  <!-- end popular posts -->
  <div class="clearfix divider_line9 lessm"></div>
  <h5 class="title-comment"><?php print t('Comments') ;?></h5>
  <div class="mar_top_bottom_lines_small3"></div>
  <?php print render($content['comments']);?>
<?php } ?>

