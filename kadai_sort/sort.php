<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
   function sort_2way($array, $order) {
    if ($order) {
      sort($array); //昇順ソート 
      echo "昇順にソートします。<br>"; 
      foreach ($array as $num) {
        echo "{$num}<br>";
       }
    
    } else {
      rsort($array); //降順ソート
      echo "降順にソートします。<br>";
      foreach ($array as $num) {
       echo "{$num} <br>";
      }
    }
    
   }

   //ソートする配列
   $nums = [15, 4, 18, 23, 10];

   //昇順ソート
   sort_2way($nums, true);
  
   //降順ソート
   sort_2way($nums, false);
 
   
   ?>
   </p>


  
</body>
</html>