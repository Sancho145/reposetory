<?php
$a = 2;Объявляет переменную $a типа integer и присваивает ей значение 2
$b = 2.0;Объявляет переменную $b типа float и присваивает ей значение 2.0
$c = '2';Объявляет строковую переменную $c и присваивает ей значение '2'
$d = 'two';Объявляет строковую переменную $d и присваивает ей значение 'two'
$g = true;Объявляет переменную $g типа boolean и присваивает ей значение true
$f = false;Объявляет переменную $f типа boolean и присваивает ей значение false

$a_string = (string)$a;Приводит переменную $a к типу string (2 становится '2')
$b_string = (string)$b;Приводит переменную $b к типу string (2.0 становится '2')
$c_string = (string)$c;Приводит строку $c к типу string (остается '2')
$d_string = (string)$d;Приводит строку $d к типу string (остается 'two')
$g_string = (string)$g;Приводит boolean $g к типу string (true становится '1')
$f_string = (string)$f;Приводит boolean $f к типу string (false становится '')
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
<tr><td> <?=gettype($a);?> </td><td><?php var_dump($a_string);?> </td></tr>
<tr><td> <?=gettype($b);?> </td><td><?php var_dump($b_string);?> </td></tr>
<tr><td> <?=gettype($c);?> </td><td><?php var_dump($c_string);?> </td></tr>
<tr><td> <?=gettype($d);?> </td><td><?php var_dump($d_string);?> </td></tr>
<tr><td> <?=gettype($g);?> </td><td><?php var_dump($g_string);?> </td></tr>
<tr><td> <?=gettype($f);?> </td><td><?php var_dump($f_string);?> </td></tr>
</table>
</body>
</html>