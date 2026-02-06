<?php
$count=file_get_contents('count.txt');// считали из файла
$count++;
file_put_contents('count.txt',$count);// записали в файл
