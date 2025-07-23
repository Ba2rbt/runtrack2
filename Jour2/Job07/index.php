<?php
// Définir la hauteur du triangle
$hauteur = 5;

// Boucle pour générer chaque ligne du triangle
for ($i = 1; $i <= $hauteur; $i++) {
    // Afficher les espaces pour centrer le triangle
    for ($j = 1; $j <= ($hauteur - $i); $j++) {
        echo "&nbsp;"; // Utilise &nbsp; pour l'affichage HTML
    }
    
    // Affiche les étoiles pour former un triangle complet
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    // Aller à la ligne suivante
    echo "<br>";
}
?>
