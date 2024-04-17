<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>連想配列を作って値とキーを出力</title>
</head>
<body>
  <p>
    <?php
    //連想配列に値を代入する
    $associative = ['name' => 'onion', 'price' => '200', 'weight' => '160'];

    //連想配列の値を出力する
    print_r($associative);

    ?>
  </p>
</body>
</html>