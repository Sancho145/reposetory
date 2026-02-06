<?php
$count=file_get_contents('count.txt');// считали из файла
$result=($count .'!');
file_put_contents('count.txt',$result);// записали в файл
echo $result;