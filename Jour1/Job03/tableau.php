<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Primitives PHP</title>
</head>
<body>
    <h1>Variables Primitives en PHP</h1>
        
        <?php
        // Déclaration des variables de différents types primitifs
        $variables = [
            // Boolean
            ['var' => 'estActif', 'value' => true],
            ['var' => 'estTermine', 'value' => false],
            ['var' => 'estConnecte', 'value' => true],
            
            // Integer
            ['var' => 'age', 'value' => 25],
            ['var' => 'temperature', 'value' => -5],
            ['var' => 'pointsDeVie', 'value' => 100],
            ['var' => 'nombreUtilisateurs', 'value' => 1250],
            
            // Float
            ['var' => 'prix', 'value' => 19.99],
            ['var' => 'poids', 'value' => 75.5],
            ['var' => 'pi', 'value' => 3.14159],
            ['var' => 'pourcentage', 'value' => 87.25],
            
            // String
            ['var' => 'nom', 'value' => "Marie Dupont"],
            ['var' => 'email', 'value' => 'marie@example.com'],
            ['var' => 'message', 'value' => 'Bonjour tout le monde !'],
            ['var' => 'adresse', 'value' => "123 Rue de la Paix, Marseille"]
        ];
        
        // Fonction pour obtenir le type en français
        function getTypeFrancais($value) {
            $type = gettype($value);
            switch($type) {
                case 'boolean': return 'Booléen';
                case 'integer': return 'Entier';
                case 'double': return 'Nombre à virgule';
                case 'string': return 'Chaîne de caractères';
                default: return $type;
            }
        }
        
        // Fonction pour formater la valeur d'affichage
        function formatValue($value) {
            if (is_bool($value)) {
                return $value ? 'true' : 'false';
            } elseif (is_string($value)) {
                return '"' . $value . '"';
            } else {
                return $value;
            }
        }
        
        // Fonction pour obtenir la classe CSS du type
        function getTypeClass($value) {
            $type = gettype($value);
            return 'type-' . $type;
        }
        ?>
        
        <table border="1">
            <thead>
                <tr>
                    <th>Type Primitif</th>
                    <th>Nom de la Variable</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($variables as $varInfo): ?>
                <tr>
                    <td>
                        <strong><?php echo getTypeFrancais($varInfo['value']); ?></strong>
                    </td>
                    <td>
                        <?php echo '
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <p><strong>Information technique :</strong></p>
        <p>Ce tableau a été généré dynamiquement avec PHP en utilisant :</p>
        <ul>
            <li>gettype() pour déterminer le type de chaque variable</li>
            <li>is_bool(), is_string() pour le formatage conditionnel</li>
            <li>Un tableau associatif PHP pour organiser les données</li>
            <li>Une boucle foreach pour générer les lignes HTML</li>
        </ul>
    </div>
</body>
</html> . $varInfo['var']; ?>
                    </td>
                    <td>
                        <?php echo formatValue($varInfo['value']); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <div style="margin-top: 30px; padding: 15px; background-color: #e8f4fd; border-left: 4px solid #2196F3; border-radius: 4px;">
            <h3>Information technique :</h3>
            <p>Ce tableau a été généré dynamiquement avec PHP en utilisant :</p>
            <ul>
                <li><code>gettype()</code> pour déterminer le type de chaque variable</li>
                <li><code>is_bool()</code>, <code>is_string()</code> pour le formatage conditionnel</li>
                <li>Un tableau associatif PHP pour organiser les données</li>
                <li>Une boucle <code>foreach</code> pour générer les lignes HTML</li>
            </ul>
        </div>
    </div>
</body>
</html>