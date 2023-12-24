<?php
### 上書きしたいtitle,keywords,desription,canonical,bodyIdは各ページに記入
global $page_title;
global $page_keywords;
global $page_description;
global $page_canonical;
global $page_bodyId;

if (is_null($page_title)) {
  $page_title = is_front_page() || is_404() ? "" : get_post_field('post_title', get_the_ID())."｜";
}
if (is_null($page_keywords)) {
  $page_keywords = "○○○○";
}
if (is_null($page_description)) {
  $page_description = "○○○○";
}
if (is_null($page_canonical)) {
  $page_canonical = is_front_page() ? home_url() : get_the_permalink();
}
if (is_null($page_bodyId)) {
  $page_bodyId = is_front_page() ? "index" : get_post_field('post_name', get_the_ID());
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<?php wp_head(); ?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $page_title; ?>○○○○</title>
<meta name="keywords" content="<?php echo $page_keywords; ?>">
<meta name="description" content="<?php echo $page_description; ?>">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700|Noto+Serif+JP:400,700&display=swap&subset=japanese" rel="stylesheet">
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/contents.css">
<?php if (is_front_page()) : ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/top.css">
<?php endif; ?>
<?php if (is_page('contents1') || is_singular('news')) : ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/lightbox.css">
<?php endif; ?>
<?php if (is_post_type_archive('news') || is_singular('news') || is_tax()) : ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
<?php endif; ?>
<link rel="canonical" href="<?php echo $page_canonical; ?>">
<meta name="viewport" content="width=device-width,user-scalable=no">
<meta name="format-detection" content="telephone=no">
</head>


<body id="<?php echo $page_bodyId; ?>">
<div id="page">

<div id="header_back">
    <header id="header">
      <div class="header">
        <div class="head-logo"><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-pc.png" alt="○○○○" class="sp_image"></a></div>
        <div class="head-inquiry">
          <h2>営業時間</h2>
          <p>【月～土曜日】15:00～24:00（最終受付23:30）<br>
            【日曜日】8:00〜24:00（最終受付23:30）</p>
          <p>【定休日】火曜日</p>
        </div>
        <ul id="sp_navi">
          <li id="sp_navi_tel"><a href="○○○○"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tel-navi.png" alt=""></a></li>
          <li id="gnavi_open"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/open-navi.png" alt=""></li>
        </ul>
      </div>
    </header>
    <!--//[header id="header"] -->
    <nav id="gnavi"><!-- ○○○○ 略 ○○○○ --></nav>
    <!--//[nav id="gnavi"]--> 
  </div>