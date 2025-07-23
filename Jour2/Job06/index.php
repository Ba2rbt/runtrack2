<?php
// Définir les dimensions du rectangle
$largeur = 20;
$hauteur = 10;

// Boucle pour chaque ligne
for ($i = 0; $i < $hauteur; $i++) {
    // Affiche chaque ligne du rectangle
    for ($j = 0; $j < $largeur; $j++) {
        echo "*";
    }
    echo "<br>"; // Saut de ligne après chaque ligne
}
?>
