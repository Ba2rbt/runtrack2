<?php
// Déclare la variable
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcours la chaîne et affiche un caractère sur deux
for ($i = 0; $i < strlen($str); $i += 2) {
    echo $str[$i];
}
?>
