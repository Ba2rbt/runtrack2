<?php
// Définir la hauteur du triangle
$hauteur = 5;

// Boucle pour générer chaque ligne du triangle
for ($i = 1; $i <= $hauteur; $i++) {
    // Affiche les étoiles selon le numéro de ligne actuelle
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    // Aller à la ligne suivante
    echo "<br>";
}
?>