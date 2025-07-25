<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>

<h2>Formulaire de connexion</h2>

<form method="POST" action="">
    <label for="username">Identifiant :</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Se connecter">
</form>

<?php
if (!empty($_POST)) {
    
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    
    if ($username === "John" && $password === "Rambo") {
        echo "<p style='color:green;font-weight:bold;'>C’est pas ma guerre</p>";
    } else {
        echo "<p style='color:red;font-weight:bold;'>Votre pire cauchemar.</p>";
    }
}
?>

</body>
</html>
