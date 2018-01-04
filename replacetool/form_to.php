<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-style-type" content="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
  <title>変換完了</title>
</head>
<body>
<div id="main">
<h2>Result</h2>
<div class="text">
不具合等のご連絡は<label for="check">こちら</label>まで。<br />
<input id="check" type="checkbox" style="display:none">
<form id="mailform" action="mail.php" method="post">
<p><label for="sendername">お名前：</label><input type="text" name="name" id="sendername" size="40"></p>
<textarea name="mailbody" cols="50" rows="3" onclick="this.focus()" onfocus="this.select()">
返信が必要な場合はリターンアドレスの明記をお願いします。
</textarea><br />
<input type="submit" value="送信" />
</form>
<br />
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
  <a href="form_from.php">←Back</a>
</div>
</body>
</html>
