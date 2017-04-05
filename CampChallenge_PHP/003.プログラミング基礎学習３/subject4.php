<?php
function my_profile(){
  echo "私の名前は米坂省吾です。<br>";
  echo "1994年1月26日生まれです。<br>";
  echo "趣味は筋トレです。<br>";
  return ture;
}

$a = my_profile();

if ($a == ture) {
  echo "「この処理は正しく実行できました」";
} else {
  echo "「正しく実行できませんでした」";
}



 ?>
