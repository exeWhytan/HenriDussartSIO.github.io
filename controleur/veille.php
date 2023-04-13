<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

$titre = "Liste des formation";
include "$racine/vue/header.php";
include "$racine/vue/vueVeille.php";
include "$racine/vue/footer.php";
?>