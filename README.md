# 【WP】既存サイトのWP化の手順／テンプレ
在籍する企業での効率化のための手順／テンプレです。

## 手順&#9312; htmlファイルのPHP化／分離化
- ヘッダーとフッター、共通するパーツは分離（モジュール化）
- href属性とsrc属性はhome_url() か get_stylesheet_directory_uri() で置換／付加
- jQueryプラグインの上書きプロパティのコンフリクト「$」は「jQuery」に変更
- トップページに遷移するボタンのhref属性は「index.html」から「index.php」に変更
- PHPのファイル名に接頭辞（固定ページ：page- 投稿一覧ページ：archive-[] 投稿ページ：single-[] etc）を付加

## 手順&#9313; データベース作成
https://lucy.ne.jp/bazubu/xampp-wordpress-23795.html  
→ 5.データベースを作成する

## 手順&#9314; WPのインストール／設定
https://lucy.ne.jp/bazubu/xampp-wordpress-23795.html  
→ 6.WordPressをXAMPPにインストールする

## 手順&#9315; 固定ページの作成
- 「page-○○.php」の○○の部分を固定ページの編集画面の「URLスラッグ」欄に入力

https://propagandes.info/wordpress-post-url/  
→ 【ブロックエディター編】パーマリンクの設定・変更方法

## 手順&#9316; プラグインの挿入／設定
- ディレクトリ：wp-content\plugins\

**必須プラグイン**
- advanced-custom-fields
- advanced-custom-fields-pro
- custom-post-type-ui
- duplicate-post
- intuitive-custom-post-order
- movabletype-importer
- post-type-switcher
- siteguard
- wordpress-importer
- wordpress-seo
- instagram-feed


・カスタム投稿タイプ  
https://olein-design.com/blog/all-about-custom-post-type-ui-custom-post-type  
https://dezanari.com/wordpress-cpt-single/  
https://dezanari.com/wordpress-cpt-archive/  

・カスタムフィールド  
https://usagicode.com/wordpress/how-to-use-advanced-custom-fields/  

・カテゴリ／タクソノミー  
https://tomorrowgate.co.jp/blog/2967/  
https://shu-naka-blog.com/website/custom-post-categories02/  
https://sachips.byeto.jp/wordpress/custom-taxonomy-checkbox.html  

・投稿の順番を並び替えるプラグイン  
https://junpei-sugiyama.com/intuitive-custom-post-order/  

## 手順&#9317; テーマファイル
- ディレクトリ：wp-content\themes\
- 新テーマ／フォルダを挿入後、既存のテーマ／フォルダは削除（twentytwenty, twentytwentyone, twentytwentytwo）
- 新テーマ／フォルダには「index.php」「style.css」は必須
- 新テーマの名前は「style.css」の「Theme Name: ○○」の○○
 
## 手順&#9318; function.php
・不要な入力欄の削除  
https://www.aimdesign.net/blog/?p=76  

・最大投稿表示数の変更・代入  
https://www.wp-tech.net/article/373/  

・投稿タイプ別に画像サイズを指定、指定以外の画像・配列の要素を削除  
https://jo-design.net/functions01/  
https://wpqw.jp/wordpress/themes/add-image-size/  

## タグ／テンプレ
- header.php
- footer.php
- top-○○.php（top-news.php）
- page-○○.php（page-privacy.php）
- single-○○.php（single-news.php）
- archive-○○.php（archive-news.php）
- taxonomy-○○-○○.php（taxonomy-news-category.php）
- pagenation-single.php
- pagenation-archive.php
- links-○○-○○.php（links-category-news.php）
- functions.php
- 404.php
- style.css
etc

## 参考文献
・インストール手順  
https://lucy.ne.jp/bazubu/xampp-wordpress-23795.html  

・テンプレート／テーマファイル  
https://wpmake.jp/contents/theme/theme_create/  
https://webgaku.net/jp/wordpress/template-hierarchy/  
https://ja.wordpress.org/team/handbook/theme-development/basics/template-hierarchy/  

・カスタム投稿タイプ  
https://olein-design.com/blog/all-about-custom-post-type-ui-custom-post-type  
https://dezanari.com/wordpress-cpt-single/  
https://dezanari.com/wordpress-cpt-archive/  
https://wordpress-web.and-ha.com/specific-single-page-archive-page/  

・カスタムフィールド  
https://usagicode.com/wordpress/how-to-use-advanced-custom-fields/  

・カテゴリ／タクソノミー  
https://sachips.byeto.jp/wordpress/custom-taxonomy-checkbox.html  
https://www.conoha.jp/lets-wp/wp-category/  
https://tomorrowgate.co.jp/blog/2967/  
https://shu-naka-blog.com/website/custom-post-categories02/  

・ページネーション  
https://recooord.org/wordpress-prevpost-nextpost/  
https://code-step.com/wp-pagination/  

・プラグイン  
https://junpei-sugiyama.com/intuitive-custom-post-order/  

・function.php  
https://www.aimdesign.net/blog/?p=76  
https://www.wp-tech.net/article/373/  
https://jo-design.net/functions01/  
https://wpqw.jp/wordpress/themes/add-image-size/  

・テンプレートタグ・スラッグ関連  
https://on-ze.com/archives/1144  
https://marycore.jp/wordpress/is_home-is_front_page/  
https://dezanari.com/wordpress-get-post-slug/  
https://webgaku.net/jp/wordpress/template-tag/  
https://canonono.com/web/wp/template-tag  
https://bambooworks.co/wordpress-conditional-tag/  

・データベース  
https://wpmake.jp/contents/security/database/  
https://bge.jp/wordpress-database/  

・etc  
https://knowledge.sakura.ad.jp/25847/  
https://www.vektor-inc.co.jp/post/how-to-use-post-type-switcher/


<!--
## バージョン情報
-->

<!--
## メモ
_e('お知らせは現在ございません');
is_home();
esc_url();
the_time('Y.m.d');
get_sidebar();
get_the_title();
get_the_content();

usces_remove_filter();
usces_the_item();
usces_have_skus();

$cat = get_the_category();
$catname = $cat[0]->cat_name; //カテゴリー名
$catslug = $cat[0]->slug; //スラッグ名

the_posts_pagination(
  array(
    'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
    'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
    'prev_text'     => __( '前へ'), // 「前へ」リンクのテキスト
    'next_text'     => __( '次へ'), // 「次へ」リンクのテキスト
    'type'          => 'list', // 戻り値の指定 (plain/list)
  )
); 

アップロードしたファイルを年月ベースのフォルダーに整理
_posts
_postmeta
_terms
_term_taxonomy
_term_relationships
-->
