<?php
// 型宣言と異なるデータ型の場合にエラーを発生させる
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>PHPマニュアルを参照してソート関数を実装してみよう</title>
  </head>

  <body>
    <p>
      <?php
      // ここにコードを書いていく
      $nums = [15, 4, 18, 23, 10 ];

      // 関数定義
      function sort_2way($array, bool $order) {
        if($order) {
          sort($array);
          echo "昇順にソートします。<br>";
        } else {
          rsort($array);
          echo "降順にソートします。<br>";
        }

        // 出力
        foreach($array as $num) {
          echo $num . '<br>';
        };
      }

      // 関数呼び出し
      sort_2way($nums, TRUE);
      sort_2way($nums, FALSE);

      ?>
    </p>
  </body>

</html>