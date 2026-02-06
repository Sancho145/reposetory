<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>57</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="Boom" id="">
        <button type="submit">Egor</button>
</form>
    
</body>
</html>
<?php
if (isset($_GET['Boom'])){
    $egor_lox = explode(' ', $_GET['Boom']);
 upFunc($egor_lox);
 echo implode(' ', $egor_lox);   
}
function upFunc(&$egor_lox){
    for($i=0; $i< count($egor_lox);$i++){
        if(($i % 2)> 0){
            $egor_lox[$i] = strtoupper($egor_lox[$i]);
        }
    }
    
}

