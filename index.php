<?php
session_start();
require "Controller/controller.php";

if (isset($_SESSION["langue"])) {
    echo "Vous êtes en " . ($_SESSION["langue"]);
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "langage") {
        ChoixLangue();
    }
} else {
    require "menu_principal.php";
}
