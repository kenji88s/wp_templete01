<?php
### 上書きしたいtitle,keywords,desription,canonical,bodyId
$page_bodyId = "404";
/*
$page_title = "";
$page_description = "";
$page_keywords = "";
$page_canonical = "";
*/
?>

<?php get_header(); ?>
<main id="contents">
  <div class="contents_header">
    <div class="head_inner">
      <h1 class="title">記事が見つかりません。</h1>
    </div>
  </div>
  <div class="breadcrumbs">
    <ul>
      <li><a href="<?php echo home_url(); ?>/">ホーム</a> &gt; </li>
      <li>記事が見つかりません。</li>
    </ul>
  </div>
  <section class="section">
    <h2 class="thanks_title">記事が見つかりません。</h2>
    <div class="section_inner">
      <div class="thanks_msg">
        <p>記事が見つかりません。</p>
      </div>
    </div>
  </section>
  <?php get_template_part('foot-access'); ?>
</main>
<!--//[div id="contents"] -->
<?php get_footer(); ?>