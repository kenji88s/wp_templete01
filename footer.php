<footer class="footer" id="footer">
  <div class="return" id="pagetop"><a href="#page"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pagetop-pc.png" alt="PAGE TOP" class="sp_image"></a></div>
  <div class="footer_inner">
    <div class="footernavi"><!-- ○○○○ 略 ○○○○ --></div>
  </div>
  <div class="copy">
    <p><a href="<?php echo home_url(); ?>/">Copyright ○○○○ All Rights Reserved.<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/site-img.gif" alt=""></a></p>
  </div>
</footer>
<!--//[footer class="footer"] -->
<div class="fixed_btn" id="fixed_btn">
  <div class="fixed_btn_set"> <a href="<?php echo home_url(); ?>/contents1/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/btn01-sp.png" alt=""></a> <a href="<?php echo home_url(); ?>/access/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/btn02-sp.png" alt=""></a>
    <div class="return" id="sp_pagetop"><a href="#page"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pagetop-sp.png" alt="PAGE TOP"></a></div>
    <div class="fixed-info">
      <h2>営業時間</h2>
      <p>【月～土曜日】<br>
        15:00～24:00（最終受付23:30）<br>
        【日曜日】<br>
        8:00〜24:00（最終受付23:30）</p>
      <p>【定休日】<br>
        火曜日</p>
    </div>
  </div>
</div>
</div>

<!--//[div id="page"] --> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script> 
<script src="https://xsrenta001.xbiz.jp/ga/ga.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/contents.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/linkfixed.js"></script> 
<?php if (is_front_page()) : ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/accordion.js"></script>
<?php endif; ?>
<?php if (is_page('contents1') || is_singular('news')) : ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lightbox.js"></script>
<?php endif; ?>
<?php if (is_page('inquiry')) : ?> 
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<?php endif; ?>
<?php wp_footer(); ?>
</body></html>