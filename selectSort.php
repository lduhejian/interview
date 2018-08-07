<?php

function selectSort(&$arr) {
  for ($i = 0; $i < count($arr) - 1; $i ++) {
    for ($j = $i + 1; $j < count($arr); $j ++) {
      if ($arr[$i] > $arr[$j]) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
      }
    }
  }
  return $arr;
}

$arr = [3, 1, 6, 5];
selectSort($arr);
echo json_encode($arr);

 ?>
