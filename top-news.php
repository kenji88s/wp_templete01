<?php 
$args = array(
  'posts_per_page' => 4,
  'post_type' => 'news',
  'orderby' => 'date',
  'order' => 'DESC',
);
?>
<?php $the_query = new WP_Query($args); ?>
<?php if ($the_query->have_posts()): ?>
<div class="top_news_inner section_inner">
  <div class="top_news_title_box">
    <h1 class="top_news_title"><span>News</span>お知らせ</h1>
    <div class="btn_base"><a href="<?php echo home_url(); ?>/news/">一覧を見る</a></div>
  </div>
  <div class="top_news_list_box">
    <ul class="top_news_list">
      <?php while ($the_query->have_posts()) : ?>
      <?php $the_query->the_post(); ?>
      <li><a href="<?php echo the_permalink(); ?>"><span class="top_news_date"><?php echo get_the_date('Y.m.d'); ?></span><?php echo the_title(); ?></a></li>
      <?php endwhile; ?>
    </ul>
  </div>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>