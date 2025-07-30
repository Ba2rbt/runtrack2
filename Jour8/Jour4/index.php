<?php
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    setcookie('prenom', $_POST['prenom'], time() + 3600, '/');
    $_COOKIE['prenom'] = $_POST['prenom'];
}

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600, '/');
    unset($_COOKIE['prenom']);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        
        input[type="text"]:focus {
            border-color: #4CAF50;
            outline: none;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin: 10px;
        }
        
        button:hover {
            background-color: #45a049;
        }
        
        .logout-btn {
            background-color: #f44336;
        }
        
        .logout-btn:hover {
            background-color: #da190b;
        }
        
        .welcome-message {
            color: #2E7D32;
            font-size: 18px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if (isset($_COOKIE['prenom']) && !empty($_COOKIE['prenom'])): ?>
            <h1>Bienvenue !</h1>
            <p class="welcome-message">Bonjour <?php echo htmlspecialchars($_COOKIE['prenom']); ?> !</p>
            
            <form method="post" action="">
                <button type="submit" name="deco" class="logout-btn">Déconnexion</button>
            </form>
            
        <?php else: ?>
            <h1>Connexion</h1>
            
            <form method="post" action="">
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required placeholder="Entrez votre prénom">
                </div>
                
                <button type="submit" name="connexion">Connexion</button>
            </form>
            
        <?php endif; ?>
    </div>
</body>
</html>
