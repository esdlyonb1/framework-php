<?php require_once "../bordel/debugmode.php";
require_once "../src/Model/Sushi.php";

if(!isset($_GET['id']) || !ctype_digit($_GET['id'])){
    header("Location: index.php");
}
   $id = $_GET['id'];
$modelSushi = new \Model\Sushi();
$modelSushi->delete($id);

    header('Location: index.php');

