<?php
// local
function test() {
  $x = 5;
}
echo $x;  // 无法打印
echo "<br>";


// global
$x = 5;
$y = 6;
function test1() {
  $GLOBALS['x'] = $GLOBALS['x'] + $GLOBALS['y'];
}
test();
echo $x;
echo "<br>";

// static
function test2() {
  static $x = 0;
  echo $x;
  $x++;
  echo "<br>";
}
test2();
test2();
test2();
echo "<br>";

// parameter
function test3($x) {
  echo $x;
}
test3('liu')
?>