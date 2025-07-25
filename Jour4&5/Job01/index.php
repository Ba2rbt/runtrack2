<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>

<form method="GET" action="index.php">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom"><br><br>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"><br><br>

    <label for="age">Âge :</label>
    <input type="text" id="age" name="age"><br><br>

    <input type="submit" value="Envoyer">
</form>

<?php
if (!empty($_GET)) {
    $nombre_arguments_get = count($_GET);

    echo "<p>Nombre d'arguments \$_GET : " . $nombre_arguments_get . "</p>";
    
    foreach ($_GET as $cle => $valeur) {
    }
} else {
    echo "<p>Aucun argument \$_GET n'a été envoyé.</p>";
}
?>

</body>
</html>
