<?php
require_once "../bordel/debugmode.php";
require_once "../bordel/logique.php";
require_once "../bordel/database.php";

if(!isset($_POST['content']) || empty($_POST['content'])){

    header("Location: index.php");
}

if(!isset($_POST['sushiId']) || !ctype_digit($_POST['sushiId']) )
{
    header("Location: index.php");

}

$commentContent = $_POST['content'];
$sushiId = $_POST['sushiId'];

insertComment($commentContent, $sushiId);

   header("Location: sushi.php?id=$sushiId");

