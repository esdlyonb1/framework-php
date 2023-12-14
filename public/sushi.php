<?php
require_once "../bordel/logique.php";
require_once "../bordel/database.php";

if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
{
    header("Location: index.php");
}

$id = $_GET['id'];

$sushi = findSushi($id);

$comments = findAllCommentsBySushi($id);

afficher('sushi/show', ["sushi"=>$sushi,
                                    "comments"=>$comments,
                                    "pageTitle"=> $sushi['poisson'] ]);