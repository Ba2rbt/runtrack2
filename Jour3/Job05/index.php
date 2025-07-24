<?php
// Création de la variable string
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

// Création du dictionnaire avec les clés voyelles et consonnes
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// Définition des voyelles (y compris les accents)
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'à', 'â', 'ä', 'é', 'è', 'ê', 'ë', 'î', 'ï', 'ô', 'ö', 'ù', 'û', 'ü', 'ÿ'];

// Conversion en minuscules pour l'analyse
$str_lower = strtolower($str);

// Parcours de chaque caractère de la chaîne
for ($i = 0; $i < strlen($str_lower); $i++) {
    $char = $str_lower[$i];
    
    // Vérification si c'est une lettre
    if (ctype_alpha($char)) {
        // Vérification si c'est une voyelle
        if (in_array($char, $voyelles)) {
            $dic["voyelles"]++;
        } else {
            // Si c'est une lettre mais pas une voyelle, c'est une consonne
            $dic["consonnes"]++;
        }
    }
}

// Affichage des résultats
echo "<h3>Analyse du texte : \"$str\"</h3>";
echo "<table border='1' style='border-collapse: collapse; margin: 20px 0;'>";
echo "<thead>";
echo "<tr style='background-color: #f2f2f2;'>";
echo "<th style='padding: 10px;'>Voyelles</th>";
echo "<th style='padding: 10px;'>Consonnes</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td style='padding: 10px; text-align: center;'>" . $dic["voyelles"] . "</td>";
echo "<td style='padding: 10px; text-align: center;'>" . $dic["consonnes"] . "</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";

// Affichage détaillé pour vérification
echo "<h4>Détails :</h4>";
echo "<p><strong>Texte analysé :</strong> $str</p>";
echo "<p><strong>Longueur totale :</strong> " . strlen($str) . " caractères</p>";
echo "<p><strong>Lettres analysées :</strong> " . ($dic["voyelles"] + $dic["consonnes"]) . " lettres</p>";
echo "<p><strong>Voyelles trouvées :</strong> " . $dic["voyelles"] . "</p>";
echo "<p><strong>Consonnes trouvées :</strong> " . $dic["consonnes"] . "</p>";
?>