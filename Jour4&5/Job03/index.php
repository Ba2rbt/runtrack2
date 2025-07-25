<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST et nombre d'arguments</title>
</head>
<body>

<h1>Formulaire en méthode POST</h1>

<form method="POST" action="">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom"><br><br>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"><br><br>

    <label for="age">Âge :</label>
    <input type="text" id="age" name="age"><br><br>

    <input type="submit" value="Envoyer">
</form>

<?php

if (!empty($_POST)) {
    
    $nombre_arguments_post = count($_POST);

    
    echo "<p>Nombre d'arguments \$_POST : " . $nombre_arguments_post . "</p>";
} else {
    echo "<p>Aucun argument \$_POST n'a encore été envoyé.</p>";
}
?>

</body>
</html>
