<?php
$prev_text = "<span>前へ</span>";
$next_text = "<span>次へ</span>";

$links_array = paginate_links(array(
  'prev_text' => $prev_text,
  'next_text' => $next_text,
  'mid_size' => 1,
  'type' => 'array',
));
// ↑ ページネーションの配列を生成
?>

<?php if($links_array) : ?>
<ul class="archive_pagelist">
<?php
$prev = array_shift($links_array);
$next = array_pop($links_array);
// ↑ 配列から最初と最後の要素を取り出す

strpos($prev, $prev_text) > -1 ? print("<li class=\"prev\">{$prev}</li>") : array_unshift($links_array, $prev);
strpos($next, $next_text) > -1 ? print("<li class=\"next\">{$next}</li>") : array_push($links_array, $next);
// ↑ 「前へ」「次へ」を先に出力、変数が「前へ」もしくは「次へ」がでなければ（数字のとき）は配列に入れ直す

echo "<li class=\"pagelist\">";
foreach($links_array as $link){
  echo $link;
};
echo "</li>";
// ↑ 要素が数字と「…」のみになった配列を出力
?>
</ul>
<?php endif; ?>
