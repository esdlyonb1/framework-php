<?php
require_once "../core/View/View.php";

require_once "../src/Model/Sushi.php";

if(isset($_POST['type']) &&
    isset($_POST['description']) &&
    isset($_POST['poisson']) &&
    isset($_POST['id'])
) {
    $type = $_POST['type'];
    $description = $_POST['description'];
    $poisson = $_POST['poisson'];
    $id = $_POST['id'];



    //aussi ajouter une verification
    // //que les variables contiennent bien du texte

    $modelSushi = new \Model\Sushi();

    $modelSushi->update($type, $description, $poisson, $id);

    header("Location: sushi.php?id=$id");

}


$id = $_GET['id'];

$modelSushi = new \Model\Sushi();
$sushi = $modelSushi->find($id);

View::render('sushi/edit', ["sushi"=>$sushi,
                                    "pageTitle"=> $sushi['poisson'] ]);