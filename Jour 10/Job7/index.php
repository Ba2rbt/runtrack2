<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superficie totale des étages</title>
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
            text-align: center;
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
    <h1>Superficie totale des étages</h1>

    <?php
    // Paramètres de connexion à la base de données
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "jour09";

    try {
        // Connexion à la base de données
        $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

        // Vérifier la connexion
        if ($connexion->connect_error) {
            throw new Exception("Erreur de connexion : " . $connexion->connect_error);
        }

        // Définir l'encodage
        $connexion->set_charset("utf8");

        // Requête SQL pour récupérer la superficie totale des étages
        $requete = "SELECT SUM(superficie) AS superficie_totale FROM etages";
        $resultat = $connexion->query($requete);

        if (!$resultat) {
            throw new Exception("Erreur dans la requête : " . $connexion->error);
        }

        // Affichage du tableau HTML
        if ($resultat->num_rows > 0) {
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>superficie_totale</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            
            // Récupérer et afficher le résultat
            $ligne = $resultat->fetch_assoc();
            echo '<tr>';
            echo '<td>' . htmlspecialchars($ligne['superficie_totale'] ?? '0') . '</td>';
            echo '</tr>';
            
            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<div class="error">Aucun résultat trouvé.</div>';
        }

        // Fermer la connexion
        $connexion->close();

    } catch (Exception $e) {
        echo '<div class="error">' . htmlspecialchars($e->getMessage()) . '</div>';
    }
    ?>

</body>
</html>
