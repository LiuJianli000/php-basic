<?php

if (5 === '5') {
  print 'true';
};
if (5 == '5') {
  print 'false';
}  // false

echo "<br>";

var_dump(0 == false);  // true
var_dump(0 === false);  // false

echo "<br>";

var_dump(0 == null);  // true
var_dump(0 === null);  // false

echo "<br>";

var_dump(null == false);  // true
var_dump(null === false);  // false

echo "<br>";

var_dump('' == false);  // true
var_dump('' === false);  // false

echo "<br>";

var_dump('' == null);  // true
var_dump('' === null);  // false

?>