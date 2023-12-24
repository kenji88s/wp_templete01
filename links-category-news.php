<?php
/* カテゴリボタンリストの生成 */
if(get_terms('activity-category',array('hide_empty'=>false,))):
  $code = '<ul>';
  $code .= "<li><a href=\"".get_post_type_archive_link('news')."\"/>すべて</a></li>";
  
  foreach(get_terms('news-category',array('hide_empty'=>false,)) as $term){
    $code .= "<li><a href=\"".get_term_link($term)."\">{$term->name}</a></li>";
  }
  // ↑ スラッグからタームを取得し（設定：0件のカテゴリも表示）、HTMLコードを生成

  $code .= '<ul>';
  echo $code;
endif;
?>