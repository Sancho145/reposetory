<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>57</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="silka" id="">
        <button type="submit">Egor</button>
</form>
    
</body>
</html>
<?php
$XVI="Иван Васильевич";
$XVI="Петр Алексеевич";
$XIX="Нколай Павлович";
if (isset($_GET['silka'])){
    $vek=$_GET['silka'];
    echo 'В'.$vek.'веке царствовал'.$$vek;
}

