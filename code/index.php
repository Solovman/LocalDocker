<?php

/* Laboratory work 3: Regular expressions and file manipulation */ 

//1.Regular expressions

/* a) Напишите регулярку, которая найдет строки 'abba', 'adca','abea' по шаблону:буква'a',два
 любыхсимвола,буква'b'.Пример строки:$str='ahb acb aeb aeeb adcb axeb'; */
echo '1.Regular expressions<br>';
echo "<br>";
$regular_expressions = '/a.{2}b/';
$str = 'ahb acb aeb aeeb adcb axeb';
$matches = [];
$count = preg_match_all($regular_expressions, $str, $matches);
print_r($matches);
echo "<br>";
echo "<br>";

/* b) Дана строка с целыми числами 'a1b2c3'. С помощьюрегулярки преобразуйте строку так,
 чтобы вместо этихчисел стояли их кубы. */
$regular_expressions = "/(\d)+/";
$str = "a1b2c3";
echo preg_replace_callback($regular_expressions, fn($matches) => intval($matches[0]) ** 3, $str);
echo "<br>";
echo "<br>";
