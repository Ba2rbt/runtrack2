<?php
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Division par zéro impossible";
            }
    }
}


echo "Test de la calculatrice :<br><br>";

echo "10 + 5 = " . calcule(10, '+', 5) . "<br>";
echo "10 - 5 = " . calcule(10, '-', 5) . "<br>";
echo "10 * 5 = " . calcule(10, '*', 5) . "<br>";
echo "10 / 5 = " . calcule(10, '/', 5) . "<br>";
echo "10 / 0 = " . calcule(10, '/', 0) . "<br>";
                