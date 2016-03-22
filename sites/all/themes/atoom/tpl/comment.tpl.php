<?php
  $user = user_load($comment->uid); // Make sure the user object is fully loaded
  $display_name = field_get_items('user', $user, 'field_display_name');
?>
<div class="comment_wrap">
  <?php
  if($picture){
  print '<div class="gravatar">'.strip_tags($picture, '<img>').'</div>';
  }  else {
  print '<div class="gravatar"><img src="'.base_path().path_to_theme().'/images/people_img.jpg" alt="Default User Picture" /></div>';
  }
  ?>
  <div class="comment_content">
    <div class="comment_meta">
      <div class="comment_author">
        <?php if($display_name[0]['value'] != '') {print  $display_name[0]['value'] ;} else print theme('username', array('account' => $content['comment_body']['#object'], 'attributes' => array('class' => 'url'))) ?> - <i><?php print format_date($node->created, 'custom', 'F d, Y'); ?></i>
      </div>
    </div>
    <div class="comment_text">
      <p><?php hide($content['links']); print strip_tags(render($content),'<a>') ?></p>
      <?php print strip_tags(render($content['links']),'<a>'); ?>
    </div>
  </div>
</div>
<!-- end section -->