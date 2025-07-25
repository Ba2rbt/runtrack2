<?php
function dessinerMaison($largeur, $hauteur) {
    $maison = "";

    $niveauxToit = max(2, intval($largeur / 2) + 1);

    for ($i = 0; $i < $niveauxToit; $i++) {
        $nb_spaces = $niveauxToit - $i - 1;
        
        $nb_tirets = 2 * $i;
        
        if ($i == $niveauxToit - 1) {
            $nb_tirets = $largeur;
        }

        $line = str_repeat(" ", $nb_spaces) . "/";
        $line .= str_repeat("-", $nb_tirets);
        $line .= "\\";
        $maison .= $line . "\n";
    }

    for ($h = 0; $h < $hauteur; $h++) {
        $maison .= "|" . str_repeat(" ", $largeur) . "|\n";
    }

    $maison .= "+" . str_repeat("-", $largeur) . "+\n";

    return $maison;
}

$largeur = isset($_GET['largeur']) ? intval($_GET['largeur']) : 10;
$hauteur = isset($_GET['hauteur']) ? intval($_GET['hauteur']) : 5;
$maisonResult = "";

if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    if ($largeur > 1 && $hauteur > 1) {
        $maisonResult = dessinerMaison($largeur, $hauteur);
    } else {
        $maisonResult = "Veuillez entrer des valeurs supérieures à 1 pour la largeur et la hauteur.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dessiner une maison ASCII</title>
    <style>
        pre {
            font-family: monospace;
            font-size: 16px;
            line-height: 1.2;
        }
    </style>
</head>
<body>
    <h2>Dessiner une maison ASCII</h2>
    <form method="get">
        <label for="largeur">Largeur (ex : 10)</label>
        <input type="number" id="largeur" name="largeur" min="2" value="<?php echo htmlspecialchars($largeur); ?>" required>
        <br><br>
        <label for="hauteur">Hauteur (ex : 5)</label>
        <input type="number" id="hauteur" name="hauteur" min="2" value="<?php echo htmlspecialchars($hauteur); ?>" required>
        <br><br>
        <input type="submit" value="Dessiner la maison">
    </form>

    <?php if ($maisonResult): ?>
        <h3>Voici votre maison :</h3>
        <pre><?php echo htmlspecialchars($maisonResult); ?></pre>
    <?php endif; ?>
</body>
</html>
