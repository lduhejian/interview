<?php

// 函数名和内置函数相同
function date($str) {
   echo "my date {$str}\n";
}

echo date("Y-m-d");  //调的哪个？

// Fatal error: Cannot redeclare date() in /Users/apple/workspace/interview/ test.php on line 6

 ?>
