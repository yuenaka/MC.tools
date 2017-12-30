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
  
  foreach($text as $line) {
    if (strpos($line, '*') !== false) {
      $line = str_replace('*', '', $line);
    // 変換対象 句読点前を検出したい
      $pattern = "/([、。！？」])/u";
      $array = preg_split($pattern, $line, -1, PREG_SPLIT_DELIM_CAPTURE);
      
    // test
      echo nl2br(print_r($array,true));
      
      foreach ($array as $work) {
        if (!preg_match($pattern, $work)) {
          $work = mb_convert_kana($work, "KVC");
        }
        echo $work;
      }
    }
    echo nl2br($line);
  }
  ?>
  <br />
  <a href="index.php">TOP</a>
</body>
</html>
