<?php

function leetSpeak($str) {
    
    $conversions = array(
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    );
    
    
    return strtr($str, $conversions);
}


echo "Test de la fonction leetSpeak :<br>";
echo "Hello World -> " . leetSpeak("Hello World") . "<br>";
echo "BEST GAME -> " . leetSpeak("BEST GAME") . "<br>";
echo "LaPlaTeForme -> " . leetSpeak("LaPlaTeForme") . "<br>";

?>