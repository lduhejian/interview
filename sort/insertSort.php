<?php

  function insertSort(&$arr) {
    for ($i = 1; $i < count($arr); $i ++) {
      for ($j = $i - 1, $k = $i; $j >= 0; $j --, $k --) {
        if ($arr[$k] < $arr[$j]) {
          $temp = $arr[$k];
          $arr[$k] = $arr[$j];
          $arr[$j] = $temp;
        } else {
          break;
        }
      }
    }
  }

  $arr = [4, 2, 5, 3];
  insertSort($arr);
  echo json_encode($arr);

 ?>
