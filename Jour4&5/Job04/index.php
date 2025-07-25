<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des arguments $_POST</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin-top: 30px;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

<h2>Formulaire envoyé en POST</h2>

<form method="POST" action="">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom"><br><br>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"><br><br>

    <label for="ville">Ville :</label>
    <input type="text" id="ville" name="ville"><br><br>

    <label for="pays">Pays :</label>
    <input type="text" id="pays" name="pays"><br><br>

    <input type="submit" value="Envoyer">
</form>

<?php
if (!empty($_POST)) {
    echo "<h3>Arguments \$_POST reçus :</h3>";
    echo "<table>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    foreach ($_POST as $argument => $valeur) {
        
        $argument = htmlspecialchars($argument);
        $valeur = htmlspecialchars($valeur);
        echo "<tr><td>$argument</td><td>$valeur</td></tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
