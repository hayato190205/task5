<?php
// 正の整数n と 長さ1の文字列s が与えられたとき、s を n個 だけつなげた文字列を出力せよ。
// [実行結果例]
// n = 5, s = "@" のとき
// @@@@@
$int = filter_input(INPUT_POST, 'n', FILTER_VALIDATE_INT);
$s = $_POST['s'];
$errors = array();


if (is_numeric($int))
{
  echo str_repeat($s, $int);
}
else
{
  $errors['n'] = 'nには数字を入力してください';
}

var_dump($errors);


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>文字列の連結</title>
</head>
<body>
  <form action="" method="post">
    n: 数値を入力してください <br><input type="text" name="n" >
    <?php if ($errors['n']) : ?>
      <!-- nに数値、sに文字列を入力した時に以下のエラー文が出てしまいます。Notice: Undefined index: n in /var/www/html/Task/task5/task5.php on line 33 -->
      <?php echo htmlspecialchars($errors['n'], ENT_QUOTES, "UTF-8"); ?><br>
    <?php endif; ?>
    s: 文字列を入力してください <br><input type="text" name="s" maxlength="1"><br>
    <input type="submit" value="連結">
</body>
</html>