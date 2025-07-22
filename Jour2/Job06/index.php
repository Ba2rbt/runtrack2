<?php
// Variables pour les dimensions du rectangle (facilement modifiables)
$largeur = 20;
$hauteur = 10;

echo "Rectangle de $largeur x $hauteur :\n\n";

// Affichage du rectangle
for ($i = 0; $i < $hauteur; $i++) {
    for ($j = 0; $j < $largeur; $j++) {
        echo "$largeur";
        echo "$hauteur";
    }
    echo "\n";
}
?>
