<?php
### 上書きしたいtitle,keywords,desription,canonical,bodyId
$page_description = "○○○○";
/*
$page_title = "";
$page_keywords = "";
$page_canonical = "";
$page_bodyId = "";
*/
?>

<?php get_header(); ?>
<main id="contents">
  <div class="contents_header">
    <div class="head_inner">
      <h1 class="title">個人情報保護方針</h1>
    </div>
  </div>
  <div class="breadcrumbs">
    <ul>
      <li><a href="<?php echo home_url(); ?>/">ホーム</a> &gt; </li>
      <li>個人情報保護方針</li>
    </ul>
  </div>
  <section class="privacy_section">
    <div class="everywhere_block">
      <p>私たちは、個人情報に関する法律を遵守し、お客様からご提供いただいた個人情報の保護に努めております。<br>
        以下に私たちのプライバシー保護の方針を明示します。</p>
    </div>
    <div class="privacy_section_inner">
      <section class="privacy_set">
        <h2 class="privacy_set_title">1. 個人情報をお伺いする場合</h2>
        <div class="privacy_set_inner">
          <p>私たちは、お客様により良いサービスを提供するため、以下の利用目的のために必要な範囲でお客様に個人情報をお伺いすることがあります。</p>
          <ul class="privacy_list">
            <li>（1）電子メールやその他の方法で製品・サービスに関する情報を提供すること</li>
            <li>（2）商品や懸賞品の発送、アフターサービスを提供すること</li>
            <li>（3）お客様からのご質問やお問い合わせに回答すること</li>
          </ul>
        </div>
      </section>
      <section class="privacy_set">
        <h2 class="privacy_set_title">2. 個人情報の管理・保護について</h2>
        <div class="privacy_set_inner">
          <p> 私たちは、お客様の個人情報の管理・取り扱いは充分に注意を払います。なお、より質の高いサービスを提供するため、個人情報の取り扱いを外部に委託することがあります。この場合、私たちは業務委託先には、委託契約等において個人情報の管理、秘密の保持等、情報漏洩の無いよう義務付けるとともに必要かつ適切な監督を行います。 </p>
        </div>
      </section>
      <section class="privacy_set">
        <h2 class="privacy_set_title">3. 個人情報の共同利用について</h2>
        <div class="privacy_set_inner">
          <p>私たちにご提供いただいた個人情報は、次の範囲で共同利用いたします。</p>
          <dl class="privacy_item">
            <dt>（1）共同利用する個人データの項目</dt>
            <dd>ご提供いただいた情報（氏名、生年月日、性別、住所、電話番号、メールアドレス等の個人を識別できる情報）</dd>
            <dt>（2）共同利用者の範囲</dt>
            <dd>共同利用者は、将来、新設・統廃合・事業内容の変更などにより変更される場合があります。</dd>
            <dt>（3）利用目的</dt>
            <dd>上記1.（1）～（3）に記載した個人情報の利用目的の範囲</dd>
          </dl>
        </div>
      </section>
      <section class="privacy_set">
        <h2 class="privacy_set_title">4. 個人情報開示について</h2>
        <div class="privacy_set_inner">
          <p>私たちは、法令に定める場合を除き、お客様の個人情報をあらかじめお客様の同意を得ることなく、業務委託先以外の第三者に開示することはありません。</p>
        </div>
      </section>
    </div>
  </section>
  <?php get_template_part('foot-access'); ?>
</main>
<!--//[div id="contents"] -->
<?php get_footer(); ?>