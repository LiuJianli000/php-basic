<?php

// 函数返回变量的数据类型和值
// var_dump();

// 整数
$x = 5;
var_dump($x);

// 浮点数
$y = 0.5;
var_dump($y);

// 布尔型
$z = true;
var_dump($z);

// 数组
$a = array('1', '2', '3');
var_dump(($a));

// 对象
class car {
  var $color;
  function _construct($color="green") {
    $this->color = $color;
  }
  function what_color() {
    return $this -> color;
  }
}

// 通过设置值为 null 来清空变量
$x = null;
var_dump($x);


?>