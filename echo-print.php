<?php

echo '<h1>learning php</h1>';
echo '<h1>', 'hello world', '</h1>';

$name = 'liu';
$hobby = ['ball', 'play', 'run'];
echo '我的名字是：{$name}';  // 使用单引号，默认将其认为是字符串输出
echo "<br>";
echo "我的名字是：$name";
echo "<br>";
echo "爱好：$hobby[0]";

print "<h2>我要学习</h2>";
print "$name"


// 总结：
// echo print  输出的字符串可以包含html标签
// echo 可以输入一个或多个字符串；速度较快 没有返回值
// print  只允许输出一个字符串，返回值总为1

?>
