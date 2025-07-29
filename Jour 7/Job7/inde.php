<?php
function gras($str) {
    return "<b>" . $str . "</b>";
}

function cesar($str, $decalage = 3) {
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $base = ctype_upper($char) ? ord('A') : ord('a');
            $shifted = (($ascii - $base + $decalage) % 26 + 26) % 26;
            $result .= chr($base + $shifted);
        } else {
            $result .= $char;
        }
    }
    return $result;
}

function plateforme($str) {
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (in_array($char, $voyelles)) {
            $result .= 'p' . strtolower($char) . 'p';
        } else {
            $result .= $char;
        }
    }
    return $result;
}

$texte_transforme = '';
$texte_original = '';

if ($_POST && isset($_POST['str']) && isset($_POST['fonction'])) {
    $texte_original = htmlspecialchars($_POST['str']);
    $fonction = $_POST['fonction'];
    
    switch ($fonction) {
        case 'gras':
            $texte_transforme = gras($texte_original);
            break;
        case 'cesar':
            $texte_transforme = cesar($texte_original);
            break;
        case 'plateforme':
            $texte_transforme = plateforme($texte_original);
            break;
        default:
            $texte_transforme = $texte_original;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformateur de texte</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #007cba;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #005a87;
        }
        .resultat {
            margin-top: 30px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 4px;
            border-left: 4px solid #007cba;
        }
    </style>
</head>
<body>
    <h1>Transformateur de texte</h1>
    
    <form method="POST">
        <div class="form-group">
            <label for="str">Texte à transformer :</label>
            <input type="text" name="str" id="str" value="<?= htmlspecialchars($texte_original) ?>" required>
        </div>
        
        <div class="form-group">
            <label for="fonction">Fonction :</label>
            <select name="fonction" id="fonction" required>
                <option value="">-- Choisir une fonction --</option>
                <option value="gras" <?= (isset($_POST['fonction']) && $_POST['fonction'] == 'gras') ? 'selected' : '' ?>>Gras</option>
                <option value="cesar" <?= (isset($_POST['fonction']) && $_POST['fonction'] == 'cesar') ? 'selected' : '' ?>>César</option>
                <option value="plateforme" <?= (isset($_POST['fonction']) && $_POST['fonction'] == 'plateforme') ? 'selected' : '' ?>>Plateforme</option>
            </select>
        </div>
        
        <button type="submit">Transformer</button>
    </form>

    <?php if (!empty($texte_transforme)): ?>
    <div class="resultat">
        <h2>Résultat :</h2>
        <p><strong>Texte original :</strong> <?= $texte_original ?></p>
        <p><strong>Texte transformé :</strong> <?= $texte_transforme ?></p>
        <p><strong>Fonction utilisée :</strong> <?= ucfirst($_POST['fonction']) ?></p>
    </div>
    <?php endif; ?>
    </body>
    </html>