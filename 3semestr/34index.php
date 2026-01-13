<?php
$a = 2;Объявляет переменную $a типа integer и присваивает ей значение 2
$b = 2.0;Объявляет переменную $b типа float и присваивает ей значение 2.0
$c = '2';Объявляет строковую переменную $c и присваивает ей значение '2'
$d = 'two';Объявляет строковую переменную $d и присваивает ей значение 'two'
$g = true;Объявляет переменную $g типа boolean и присваивает ей значение true
$f = false;Объявляет переменную $f типа boolean и присваивает ей значение false

$a_bool = (bool)$a;Приводит переменную $a к типу boolean (2 становится true)
$b_bool = (bool)$b;Приводит переменную $b к типу boolean (2.0 становится true)
$c_bool = (bool)$c;Приводит строку $c к типу boolean (непустая строка '2' становится true)
$d_bool = (bool)$d;Приводит строку $d к типу boolean (непустая строка 'two' становится true)
$g_bool = (bool)$g;Приводит boolean $g к типу boolean (true остается true)
$f_bool = (bool)$f;Приводит boolean $f к типу boolean (false остается false)
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Пример таблицы</title>
    <style>
        table, td {
            border: 1px solid black;
        }
        table {
            border-collapse: collapse;
        }
        td {
            padding: 5px;
        }
    </style>
</head>
<body>
<table>
<tr><td>type</td><td>gettype</td></tr>
<tr><td> <?=gettype($a);?> </td><td><?php var_dump($a_bool);?> </td></tr>
<tr><td> <?=gettype($b);?> </td><td><?php var_dump($b_bool);?> </td></tr>
<tr><td> <?=gettype($c);?> </td><td><?php var_dump($c_bool);?> </td></tr>
<tr><td> <?=gettype($d);?> </td><td><?php var_dump($d_bool);?> </td></tr>
<tr><td> <?=gettype($g);?> </td><td><?php var_dump($g_bool);?> </td></tr>
<tr><td> <?=gettype($f);?> </td><td><?php var_dump($f_bool);?> </td></tr>
</table>
</body>
</html>