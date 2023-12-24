<?php
### 上書きしたいtitle,keywords,desription,canonical,bodyId
$page_title = get_post_field('post_title', get_the_ID())."｜お知らせ｜";
$page_description = "○○○○";
$page_bodyId = "news";
/*
$page_keywords = "";
$page_canonical = "";
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
      <li><?php echo the_title(); ?></li>
    </ul>
  </div>
  <section class="section">
    <div class="section_inner">
      <h2 class="news_title"><?php echo the_title(); ?></h2>
      <p class="news_date"><?php echo get_the_date('Y.m.d'); ?></p>
      <div class="news_text_inner">
      <?php
      $class = get_field('news-image01')['width'] > get_field('news-image01')['height'] + 50 ? "" : "single";
      $class = get_field('news-image01') && get_field('news-image02') ? "two_image" : $class;
      ?>
        <?php if(get_field('news-image01') || get_field('news-image02')): ?>
        <div class="news_img_box <?php echo $class; ?>">
          <?php if(get_field('news-image01')): ?>
          <img src="<?php echo get_field('news-image01')['url'] ?>">
          <?php endif; ?>
          <?php if(get_field('news-image02')): ?>
          <img src="<?php echo get_field('news-image02')['url'] ?>">
          <?php endif; ?>
        </div>
        <?php endif; ?>
        <div> <?php echo the_content(); ?> </div>
        <?php if(get_field('news-images01')): ?>
        <ul class="image_list three_image sp_two_image news_images">
          <?php foreach(get_field('news-images01') as $item): ?>
          <li><a href="<?php echo $item['image']['url']; ?>" rel="lightbox[<?php echo get_the_date('Y.m.d'); ?>]"><img src="<?php echo $item['image']['url']; ?>" alt=""></a></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </div>
      <?php get_template_part('pagenation-single'); ?>
    </div>
  </section>
  <?php get_template_part('foot-access'); ?>
</main>
<!--//[div id="contents"] -->
<?php get_footer(); ?>
