<?php
// Déclaration de la chaîne
$str = "Les choses que l'on possède finissent par nous posséder.";

// Méthode simple utilisant mbstring pour gérer les caractères UTF-8
$longueur = mb_strlen($str, 'UTF-8');
$chaineInverse = '';

for ($i = $longueur - 1; $i >= 0; $i--) {
    $chaineInverse .= mb_substr($str, $i, 1, 'UTF-8');
}

// Affichage de la chaîne inversée
echo $chaineInverse;
?>
