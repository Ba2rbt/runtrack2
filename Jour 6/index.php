<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice - Styles Dynamiques</title>
    
    <?php
    
    $style_selectionne = isset($_POST['style']) ? $_POST['style'] : 'style1';
    
    /
    echo "<link rel='stylesheet' href='{$style_selectionne}.css'>";
    ?>
</head>
<body>
    <div class="container">
        <h1>Formulaire avec Styles Dynamiques</h1>
        
        <form method="POST" action="" class="formulaire">
            <div class="form-group">
                <label for="style">Choisissez un style :</label>
                <select name="style" id="style" class="select-style">
                    <option value="style1" <?php echo ($style_selectionne == 'style1') ? 'selected' : ''; ?>>Style 1 - Élégant</option>
                    <option value="style2" <?php echo ($style_selectionne == 'style2') ? 'selected' : ''; ?>>Style 2 - Moderne</option>
                    <option value="style3" <?php echo ($style_selectionne == 'style3') ? 'selected' : ''; ?>>Style 3 - Coloré</option>
                </select>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn-submit">Appliquer le Style</button>
            </div>
        </form>
        
        <?php if (isset($_POST['style'])): ?>
            <div class="message">
                <p>Vous avez sélectionné : <strong><?php echo htmlspecialchars($style_selectionne); ?></strong></p>
                <p>Le style a été appliqué avec succès !</p>
            </div>
        <?php endif; ?>
        
        
        <div class="demo-content">
            <h2>Contenu de démonstration</h2>
            <p>Ce texte vous permet de voir les effets du style sélectionné.</p>
            <ul>
                <li>Premier élément de liste</li>
                <li>Deuxième élément de liste</li>
                <li>Troisième élément de liste</li>
            </ul>
        </div>
    </div>
</body>
</html>
