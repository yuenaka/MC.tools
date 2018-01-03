<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>変換完了</title>
</head>
<body>
<form>
<textarea name="novel" cols="100" rows="15" onclick="this.focus()" onfocus="this.select()">
<?php
  // 改行コード(\r\n, \r, \n) を全て \n に統一
  $text = str_replace(array('\r\n','\r','\n'), '\n', $_POST["novel"]);
  // 改行コード毎に分割し配列に格納
  $text = explode("\n", $text);
  
  foreach($text as $line) {
    $line = strip_tags($line);
    if (strpos($line, '*') !== false) {
      $line = str_replace('*', '', $line);
      // 変換対象
      $pattern = "/([、。！？」\n\s])/u";
      $array = preg_split($pattern, $line, -1, PREG_SPLIT_DELIM_CAPTURE);

      $line = "";
      foreach ($array as $work) {
        if (!preg_match($pattern, $work)) {
          // 文字列の最後を全角カタカナに変換
          $tmp = mb_convert_kana(mb_substr($work, -1), "KVC");
          $work = substr_replace($work, $tmp, -(strlen($tmp)));
        }
        $line .= $work;
      }
    }
    echo print_r($line,true);
  }
  ?>
</textarea>
</form>
  <br />
  <a href="index.php">TOP</a>
</body>
</html>
