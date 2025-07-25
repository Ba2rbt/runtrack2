<?php
$message = "";

if (isset($_GET["nombre"])) {
    $nombre = intval($_GET["nombre"]);
    if ($nombre % 2 == 0) {
        $message = "Nombre pair";
    } else {
        $message = "Nombre impair";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test Pair ou Impair (GET)</title>
</head>
<body>
    <form method="get">
        <label>Entrez un nombre :</label>
        <input type="text" name="nombre" required>
        <input type="submit" value="Vérifier">
    </form>
    <?php
    if ($message) {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
