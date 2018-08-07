<?php

  function bubbleSort(&$arr) {
    for ($i = 0; $i < count($arr); $i ++) {
      for ($j = count($arr) - 1; $j > $i; $j --) {
        if ($arr[$j] < $arr[$j - 1]) {
          $temp = $arr[$j];
          $arr[$j] = $arr[$j - 1];
          $arr[$j - 1] = $temp;
        }
      }
    }
    return $arr;
  }

  $arr = [3, 2, 5, 1];
  bubbleSort($arr);
  echo json_encode($arr);

 ?>
