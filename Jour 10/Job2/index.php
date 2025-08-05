<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des salles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .error {
            color: red;
            text-align: center;
            padding: 20px;
            background-color: #ffebee;
            border: 1px solid #f44336;
            border-radius: 4px;
            margin: 20px 0;
        }
        .success {
            color: green;
            text-align: center;
            padding: 10px;
            background-color: #e8f5e8;
            border: 1px solid #4CAF50;
            border-radius: 4px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Liste des salles</h1>

    <?php
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "jour09";

    try {
        $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

        if ($connexion->connect_error) {
            throw new Exception("Erreur de connexion : " . $connexion->connect_error);
        }

        $connexion->set_charset("utf8");

        echo '<div class="success">Connexion à la base de données réussie !</div>';

        $requete = "SELECT nom, capacite FROM salles";
        $resultat = $connexion->query($requete);

        if ($resultat === false) {
            throw new Exception("Erreur dans la requête : " . $connexion->error);
        }

        if ($resultat->num_rows > 0) {
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Nom</th>';
            echo '<th>Capacité</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            
            while ($ligne = $resultat->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($ligne['nom'] ?? '') . '</td>';
                echo '<td>' . htmlspecialchars($ligne['capacite'] ?? '') . '</td>';
                echo '</tr>';
            }
            
            echo '</tbody>';
            echo '</table>';
            
            echo '<div class="success">Nombre total de salles : ' . $resultat->num_rows . '</div>';
        } else {
            echo '<div class="error">Aucune salle trouvée dans la base de données.</div>';
        }

        $connexion->close();

    } catch (Exception $e) {
        echo '<div class="error">' . htmlspecialchars($e->getMessage()) . '</div>';
        
        if (strpos($e->getMessage(), 'connexion') !== false) {
            echo '<div style="margin: 20px; padding: 15px; background-color: #fff3cd; border: 1px solid #ffeaa7; border-radius: 4px;">';
            echo '<h3>Aide pour résoudre les problèmes de connexion :</h3>';
            echo '<ul>';
            echo '<li>Vérifiez que MySQL/MariaDB est démarré sur votre serveur local</li>';
            echo '<li>Vérifiez que la base de données "jour09" existe</li>';
            echo '<li>Vérifiez les paramètres de connexion (serveur, utilisateur, mot de passe)</li>';
            echo '<li>Assurez-vous que la table "salles" existe dans la base de données</li>';
            echo '</ul>';
            echo '</div>';
        }
    }
    ?>

</body>
</html>
