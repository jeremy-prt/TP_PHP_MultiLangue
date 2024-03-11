<?php
require("langue_form.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Se connecter</title>
</head>

<body>
    <p><a href="/Bloc3/TP_PHP_MultiLangue/index.php">Retour</a></p>
    <form method="post" action="/Bloc3/TP_PHP_MultiLangue/index.php">
        <label for="prenom"><?php echo $langueChoisie[$_SESSION["langue"]]["prenom_label"]; ?></label>
        <input type="text" name="prenom">
        <br>
        <label for="nom"><?php echo $langueChoisie[$_SESSION["langue"]]["nom_label"]; ?></label>
        <input type="text" name="nom">
        <br>
        <input type="submit" value="<?php echo $langueChoisie[$_SESSION["langue"]]["inserer"]; ?>">
    </form>
</body>

</html>