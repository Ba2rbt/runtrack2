<?php
// Algorithme pour afficher les nombres premiers jusqu'à 1000

// Fonction pour vérifier si un nombre est premier
function estPremier($nombre) {
    // 0 et 1 ne sont pas premiers
    if ($nombre <= 1) {
        return false;
    }
    
    // 2 est premier
    if ($nombre == 2) {
        return true;
    }
    
    // Les nombres pairs (sauf 2) ne sont pas premiers
    if ($nombre % 2 == 0) {
        return false;
    }
    
    // Vérifier les diviseurs impairs jusqu'à la racine carrée du nombre
    for ($i = 3; $i <= sqrt($nombre); $i += 2) {
        if ($nombre % $i == 0) {
            return false;
        }
    }
    
    return true;
}

// Afficher tous les nombres premiers de 2 à 1000
echo "<h2>Nombres premiers jusqu'à 1000 :</h2><br />";

for ($i = 2; $i <= 1000; $i++) {
    if (estPremier($i)) {
        echo $i . "<br />";
    }
}
?>