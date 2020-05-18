<?php

echo <<<EOF
<h1>first title</h1>
<p>first paragraph</>
EOF;
// 结束需要独立一行且前后不能有空格

// 什么情况下使用
// php 编程过程中难免会遇到用 echo 来输出大段的 html 和 js脚本
// 为了避免使用传统的输出方法（有大量的转义符来对字符串中的引号等特殊字符进行转义），为了避免出现语法错误
?>