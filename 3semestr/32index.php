<?php
$a = 2;Объявляет переменную $a типа integer и присваивает ей значение 2
$b = 2.0;Объявляет переменную $b типа float и присваивает ей значение 2.0
$c = '2';Объявляет строковую переменную $c и присваивает ей значение '2'
$d = 'two';Объявляет строковую переменную $d и присваивает ей значение 'two'
$g = true;Объявляет переменную $g типа boolean и присваивает ей значение true
$f = false;Объявляет переменную $f типа boolean и присваивает ей значение false

$a_flo = (float)$a;Приводит переменную $a к типу float (2 становится 2.0)
$b_flo = (float)$b;Приводит переменную $b к типу float (остается 2.0)
$c_flo = (float)$c;Приводит строку $c к типу float ('2' становится 2.0)
$d_flo = (float)$d;Приводит строку $d к типу float ('two' становится 0.0)
$g_flo = (float)$g;Приводит boolean $g к типу float (true становится 1.0)
$f_flo = (float)$f;Приводит boolean $f к типу float (false становится 0.0)
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
<tr><td> <?=gettype($a);?> </td><td><?php var_dump($a_flo);?> </td></tr>
<tr><td> <?=gettype($b);?> </td><td><?php var_dump($b_flo);?> </td></tr>
<tr><td> <?=gettype($c);?> </td><td><?php var_dump($c_flo);?> </td></tr>
<tr><td> <?=gettype($d);?> </td><td><?php var_dump($d_flo);?> </td></tr>
<tr><td> <?=gettype($g);?> </td><td><?php var_dump($g_flo);?> </td></tr>
<tr><td> <?=gettype($f);?> </td><td><?php var_dump($f_flo);?> </td></tr>
</table>
</body>
</html>
