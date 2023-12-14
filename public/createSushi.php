<?php
require_once "../debugmode.php";
require_once "../bordel/logique.php";
require_once "../bordel/database.php";

if(isset($_POST['type']) &&
    isset($_POST['description']) &&
    isset($_POST['poisson'])
){
    $type = $_POST['type'];
    $description = $_POST['description'];
    $poisson = $_POST['poisson'];

    //aussi ajouter une verification
    // //que les variables contiennent bien du texte

    insertSushi($type, $description, $poisson);

    header("Location: index.php");



}


afficher("sushi/create", ["pageTitle"=> "nouveau sushi"]);