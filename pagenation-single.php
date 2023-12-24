<?php
/* 記事名（ID）が存在する記事一覧ページのURLの生成 */
function make_url($type) {
  global $array_count;

  if(strpos($_SERVER['HTTP_REFERER'], '-category') > -1){
    $url = $_SERVER['HTTP_REFERER'];
    // ↑ 前のページがカテゴリ別投稿一覧ページの場合
  } else {
    $int = is_null($array_count[$type]) ? get_option('posts_per_page') : $array_count[$type];
    $id_current = get_the_ID();
    $id_array = all_ID($type);
    $index_array = array_search($id_current, $id_array) + 1;
    $index_archive = ceil($index_array / $int);
    // ↑ 現在の記事のIDを取得 → 現在の記事が何件目か取得 → ÷「1ページに表示する最大投稿数」で一覧ページのインデックス番号を取得

    $url = get_post_type_archive_link($type)."page/".$index_archive;
  }

  return $url;
}

/* 全記事のIDの取得 */
function all_ID($type) {
  $args = array(
    'posts_per_page' => -1,
    'post_type' => $type,
    'orderby' => 'date',
    'order' => 'DESC',
  );
  
  $the_query = new WP_Query($args);
  $array = array();
  
  while ($the_query->have_posts()) {
    $the_query->the_post();
    array_push($array, get_the_ID());
  }
  // ↑ 指定の投稿タイプでデータを取得 → 全記事のIDを配列に格納
  
  return $array;
}
?>

<ul class="sigle_pagelist">
  <?php if (get_previous_post()): ?>
  <li class="prev">
    <?php previous_post_link('%link', '<span class="text">前の記事へ</span><span class="arrow-left"></span>'); ?>
  </li>
  <?php endif; ?>
  <?php if (get_next_post()): ?>
  <li class="next">
    <?php next_post_link('%link', '<span class="text">次の記事へ</span><span class="arrow-right"></span>'); ?>
  </li>
  <?php endif; ?>
  <li class="tolist">
    <a href="<?php echo make_url(get_post_type()); ?>">一覧へ</a>
  </li>
</ul>
