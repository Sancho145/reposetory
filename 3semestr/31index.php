<?php
$a = 2;Объявляет переменную $a типа integer и присваивает ей значение 2
$b = 2.0;Объявляет переменную $b типа float и присваивает ей значение 2.0
$c = '2';Объявляет строковую переменную $c и присваивает ей значение '2'
$d = 'two';Объявляет строковую переменную $d и присваивает ей значение 'two'
$g = true;Объявляет переменную $g типа boolean и присваивает ей значение true
$f = false;Объявляет переменную $f типа boolean и присваивает ей значение false

$a_int = (int)$a;Приводит переменную $a к типу integer (остается 2)
$b_int = (int)$b;Приводит переменную $b к типу integer (2.0 становится 2)
$c_int = (int)$c;Приводит строку $c к типу integer ('2' становится 2)
$d_int = (int)$d;Приводит строку $d к типу integer ('two' становится 0)
$g_int = (int)$g;Приводит boolean $g к типу integer (true становится 1)
$f_int = (int)$f;Приводит boolean $f к типу integer (false становится 0)
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
<tr><td> <?=gettype($a);?> </td><td><?php var_dump($a_int);?> </td></tr>
<tr><td> <?=gettype($b);?> </td><td><?php var_dump($b_int);?> </td></tr>
<tr><td> <?=gettype($c);?> </td><td><?php var_dump($c_int);?> </td></tr>
<tr><td> <?=gettype($d);?> </td><td><?php var_dump($d_int);?> </td></tr>
<tr><td> <?=gettype($g);?> </td><td><?php var_dump($g_int);?> </td></tr>
<tr><td> <?=gettype($f);?> </td><td><?php var_dump($f_int);?> </td></tr>
</table>
</body>
</html>