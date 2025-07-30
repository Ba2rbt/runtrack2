<?php
session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Vérification sécurisée des données POST
if (isset($_POST['action'])) {
    if ($_POST['action'] === 'add' && !empty($_POST['prenom'])) {
        $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom'], ENT_QUOTES, 'UTF-8');
    }
    
    if ($_POST['action'] === 'reset') {
        $_SESSION['prenoms'] = [];
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des prénoms</title>
</head>
<body>
    <h1>Gestion des prénoms</h1>
    
    <!-- Formulaire pour ajouter un prénom -->
    <form method="POST" action="">
        <label for="prenom">Ajouter un prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <input type="hidden" name="action" value="add">
        <button type="submit">Ajouter</button>
    </form>
    
    <!-- Bouton pour reset la liste -->
    <form method="POST" action="" style="margin-top: 10px;">
        <input type="hidden" name="action" value="reset">
        <button type="submit">Vider la liste</button>
    </form>
    
    <!-- Affichage de la liste des prénoms -->
    <h2>Liste des prénoms :</h2>
    <?php if (!empty($_SESSION['prenoms'])): ?>
        <ul>
            <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
                <li><?php echo htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
        </ul>
        <p>Nombre total de prénoms : <?php echo count($_SESSION['prenoms']); ?></p>
    <?php else: ?>
        <p>Aucun prénom enregistré.</p>
    <?php endif; ?>
</body>
</html>