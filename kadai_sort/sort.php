<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
      $nums = [15, 4, 18, 23, 10 ];
      
      function sort_2way(array $array, bool $order):void{
        if($array!=[]){
          if($order){
            //$order=ture:昇順でソート
            sort($array);
            echo "昇順にソートします。<br>";
            foreach($array as $val){
              echo $val."<br>";
            }
          }else{
            echo "降順にソートします。<br>";
            rsort($array);
            foreach($array as $val){
              echo $val."<br>";
            }
          }
        }
      }

      sort_2way($nums,TRUE);
      sort_2way($nums,FALSE);
    ?>
  </p>
  
</body>
</html>