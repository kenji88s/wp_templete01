<?php
$array_count = array(); // pagenation-single.phpにて使用

/* 不要な入力欄の削除 */
add_action('init','my_remove_post_support');
function my_remove_post_support() {
  remove_post_type_support('page','editor'); 
  remove_post_type_support('infomation','editor'); 
}

/* 最大投稿表示数の変更・代入 */
add_action('pre_get_posts','change_posts_per_page');
function change_posts_per_page($query) {
  global $array_count;

  if (is_admin() || !$query->is_main_query())
    return;
  if ($query->is_post_type_archive('activity') || $query->query["post_type"] == 'activity') {
    $query->set('posts_per_page','1');
    $array_count['activity'] = $query->query_vars['posts_per_page'];
  };
}

/* 投稿タイプ別に画像サイズを指定 */
add_image_size('activity-thumb',200,200,true);
add_image_size('activity-big',500,500,false);

/* 上記指定以外の画像・配列の要素を削除 */
add_action('intermediate_image_sizes','media_settings_by_post_type');
function media_settings_by_post_type($sizes) {
  $type = get_post_type($_REQUEST['post_id']);
  foreach($sizes as $key => $value){
    if($type=='activity' && $value != 'activity-thumb' && $value != 'activity-big') {
      unset($sizes[$key]);
    }
  }
  return $sizes;
}
?>