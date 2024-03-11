
<!DOCTYPE html>
<html>

<head>
    <title>Choix de la Langue</title>
</head>

<body>
    <a href="/Bloc3/TP_PHP_MultiLangue/index.php">Retour</a>
    <h2>Choisissez une langue :</h2>
    <form action="/Bloc3/TP_PHP_MultiLangue/index.php?action=langage" method="post">
        <label for="langue">Langue :</label>
        <select name="langue" id="langue">
            <option value="FR">Français</option>
            <option value="EN">Anglais</option>
        </select>
        <br>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>