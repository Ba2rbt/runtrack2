<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$longueur = mb_strlen($str, 'UTF-8');
$str_modifiee = '';
$premier_caractere = mb_substr($str, 0, 1, 'UTF-8');
for ($i = 0; $i < $longueur - 1; $i++) {
    $car_suivant = mb_substr($str, $i + 1, 1, 'UTF-8');
    $str_modifiee .= $car_suivant;
}
$str_modifiee .= $premier_caractere;
echo $str_modifiee;
?>
