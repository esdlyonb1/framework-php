<?php







function afficher($nomDeTemplate, $donnees){

    ob_start();
  extract($donnees);

    require_once "../templates/${nomDeTemplate}.html.php";

    $content = ob_get_clean();

    if(!isset($pageTitle)){ $pageTitle = "Pas de titre"; }

    require_once "../templates/base.html.php";


}












