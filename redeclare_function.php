<?php

function test() {
  echo "test 1";
}

function test() {
  echo "test 2";
}

test();

// Fatal error: Cannot redeclare test() (previously declared in /Users/apple/workspace/interview/redeclare_function.php:4) in /Users/apple/workspace/interview/redeclare_function.php on line 9

 ?>
