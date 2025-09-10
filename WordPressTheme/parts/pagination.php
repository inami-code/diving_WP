<div class="<?php if (is_home('blog')) echo 'sub-blog__pagination'; ?> 
<?php if (is_post_type_archive('campaign')) echo 'sub-campaign__pagination'; ?> 
<?php if (is_post_type_archive('voice')) echo 'sub-voice__pagination'; ?> 
pagination top-pagination">
  <?php
  $links = paginate_links(array(
    'end_size'   => 2,
    'mid_size'   => 3,
    'prev_next'  => true,
    'prev_text'  => '',
    'next_text'  => '',
    'type'       => 'array', // 配列で取得
  ));

  if ($links) :
    foreach ($links as $link) {
      // 数字リンクかどうかを判定
      if (preg_match('/>[0-9]+</', $link)) {
        // 数字リンクにだけ is-numeric を追加
        echo str_replace('page-numbers', 'page-numbers is-numeric', $link);
      } else {
        // prev / next / dots はそのまま出力
        echo $link;
      }
    }
  endif;
  ?>
</div>