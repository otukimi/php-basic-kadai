<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>foreach文を使って連想配列の値とキーを出力しよう</title>
</head>
<body>
<p>
<?php
    //連想配列に値を代入する
    $date = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];
    
    //連想配列$dateのキーと値を一つずつ順番に出力する
    foreach ($date as $key => $value) {
        echo "{$key}：{$value} <br>";
    }
?>
</p>    

<p>
<?php
    //連想配列に値を代入する
    $date = ['id' => '1', '名前' => '侍太郎', '年齢' => '30'];
    
    //連想配列$dateのキーと値を一つずつ順番に出力する
    foreach ($date as $key => $value) {
        echo "{$key}：{$value} <br>";
    }
?>
</p>    

</body>
</html>