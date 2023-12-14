<?php
require_once "../bordel/debugmode.php";
require_once "../core/View/View.php";
require_once "../src/Model/Sushi.php";

if(isset($_POST['type']) &&
    isset($_POST['description']) &&
    isset($_POST['poisson'])
){
    $type = $_POST['type'];
    $description = $_POST['description'];
    $poisson = $_POST['poisson'];

    //aussi ajouter une verification
    // //que les variables contiennent bien du texte

    $modelSushi = new \Model\Sushi();

    $modelSushi->insert($type, $description, $poisson);

    header("Location: index.php");



}


View::render("sushi/create", ["pageTitle"=> "nouveau sushi"]);