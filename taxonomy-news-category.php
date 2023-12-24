<?php
### 上書きしたいtitle,keywords,desription,canonical,bodyId
$page_title = "お知らせ｜";
$page_description = "○○○○";
$page_canonical = home_url()."/news/";
$page_bodyId = "news";
/*
$page_keywords = "";
*/
?>
<?php get_header(); ?>

<main id="contents">
  <div class="contents_header">
    <div class="head_inner">
      <h1 class="title">お知らせ</h1>
    </div>
  </div>
  <div class="breadcrumbs">
    <ul>
      <li><a href="<?php echo home_url(); ?>/">ホーム</a> &gt; </li>
      <li><a href="<?php echo get_post_type_archive_link('news'); ?>">お知らせ</a> &gt; </li>
      <li><?php single_tag_title(); ?></li>
    </ul>
  </div>
  <?php get_template_part('links-category-news'); ?>
  <section class="section">
    <div class="section_inner">
      <?php if(have_posts()): ?>
      <div class="news_list_box">
        <ul class="news_list">
          <?php while (have_posts()): ?>
          <?php the_post(); ?>
          <li><a href="<?php echo the_permalink(); ?>"><span class="news_list_date"><?php echo get_the_date('Y.m.d'); ?></span><?php echo the_title(); ?></a></li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php else: ?>
      <p class="nothing_text">現在表示できる記事がございません。</p>
      <?php endif; ?>
    </div>
    <?php get_template_part('pagenation-archive'); ?>
  </section>
  <?php get_template_part('foot-access'); ?>
</main>
<!--//[div id="contents"] -->
<?php get_footer(); ?>