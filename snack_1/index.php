<?php

/*  ##Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$partite =[
    ['Lackers', 'celtics', 80, 75],
    ['Clippers', 'Miami Heats', 102, 82],
    ['King', 'Bulls', 97, 102],
    ['Wizzard', 'Warriors', 98, 62],
];

foreach ($partite as  $partita) {
    foreach ($partita as $key => $detail){
        echo $detail . ' ';
        if ($key == count($partita)-1){
        echo '<br>';
        }

    }
}

?>
