<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello laPlateforme</title>
</head>
<body>
    <button onclick="afficherMessage()">Cliquez ici pour afficher le message</button>
    <div id="message"></div>

    <script>
        function afficherMessage() {
            fetch('index.php?action=hello')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('message').innerHTML = data;
                });
        }
    </script>

    <?php
    function hello() {
        echo "Hello laPlateforme!";
    }

    if (isset($_GET['action']) && $_GET['action'] === 'hello') {
        hello();
        exit;
    }
    ?>
</body>
</html>