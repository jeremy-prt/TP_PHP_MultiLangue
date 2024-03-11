<?php
require('Model/modele.php');


function ChoixLangue()
{
    $langueChoisie = $_POST["langue"];
    $_SESSION["langue"] = $langueChoisie;
    // Redirection vers la page précédente
    header("Location: /Bloc3/TP_PHP_MultiLangue/index.php");
}
