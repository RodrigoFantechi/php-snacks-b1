<?php

/*  ##Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$partite =[
    [
       'in' => 'Lackers', 
       'out' => 'Celtics', 
       'pointIn' =>80, 
       'pointOut' =>75
    ],
    [
        'in' => 'Clippers', 
        'out' => 'Miami Heats', 
        'pointIn' =>102, 
        'pointOut' =>82
    ],
    [
        'in' => 'King', 
        'out' => 'Bulls', 
        'pointIn' =>97, 
        'pointOut' =>102
    ],
    [
        'in' => 'Wizzard', 
        'out' => 'Warriors', 
        'pointIn' =>98, 
        'pointOut' =>62
    ],


];

foreach ($partite as  $partita) {
    foreach ($partita as $key => $detail){
        echo $detail . ' ';
        if($key == 'in'){
            echo ' - ';
        }elseif($key == 'out'){
            echo ' | ';
        }elseif($key == 'pointIn'){
            echo '-';
        }
        elseif ($key == 'pointOut'){
        echo '<br>';
        }

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li></li>
</body>
</html>