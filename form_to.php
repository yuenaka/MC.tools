<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>変換完了</title>
</head>
<body>
<?php
  // 改行コード(\r\n, \r, \n) を全て \n に統一
  $text = str_replace(array('\r\n','\r','\n'), '\n', $_POST["novel"]);
  // 改行コード毎に分割し配列に格納
  $text = explode("\n", $text);
  print_r($text);
?>
<br />
<a href="index.php">TOP</a>
</body>
</html>
