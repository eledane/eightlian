<?php

/**

 * @file

 * Default theme implementation to display a node.

 */

  global $base_root, $base_url;

  $user = user_load($uid); // Make sure the user object is fully loaded

  $display_name = field_get_items('user', $user, 'field_display_name');

  $about = field_get_items('user', $user, 'field_about');



  if(isset($node->field_image) && !empty($node->field_image)){

    $imageone = $node->field_image['und'][0]['uri'];

    $uri =$node->field_image['und'][0]['uri'];

    $url_image = file_create_url($uri);

  }else {

    $imageone = '';

  }

  $node_type = $node->type;



  if(!$page){ ?>



    <div class="blog_post">

      <div class="blog_postcontent">

          <?php if (!empty($imageone)): ?>

          <div class="image_frame">

            <a href="<?php print $node_url; ?>"><?php print theme('image_style', array('path' => $imageone, 'style_name' => 'image_600x266', 'attributes'=>array('alt'=>$title)));?></a>

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

            print strip_tags(render($content),'<a>');

          ?>

          <a href="<?php print $node_url; ?>">read more...</a>

        </p>

      </div>

    </div>

    <!-- /# end post -->

    <div class="clearfix divider_line1"></div>



  <?php } else { ?>
    <?php if ($node_type != 'page' && $node_type != 'homepage' && $node_type != 'special_pages'): ?>
    <div class="blog_post">
        <div class="blog_postcontent">
        <?php if (isset($node->field_embeded_video) && !empty($node->field_embeded_video)) : ?>
          <div class="video_frame"><?php print render($content['field_embeded_video']); ?></div>
        <?php elseif (!empty($node->field_image)): ?>
          <div class="image_frame"><a href="<?php print $node_url; ?>"><?php print theme('image', array('path' => $imageone, 'style_name' => '', 'attributes'=>array('alt'=>$title)));?></a>
          </div>
        <?php endif; ?>
          <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
          <ul class="post_meta_links">
            <li><a href="<?php print $node_url; ?>" class="date"><?php print format_date($node->created, 'custom', 'd F Y');?></a></li>
            <li class="post_by"><i><?php print t('by') ?>:</i> <?php print $name; ?></li>
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
    <?php else: ?>
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
    <?php endif; ?>

  <?php } ?>

