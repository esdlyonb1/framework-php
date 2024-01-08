<?php


namespace App\Controller;


use Core\View\View;
use App\Model\Comment;
use App\Model\Sushi;

class SushiController
{
    public function index()
    {

        $modelSushi = new Sushi();

        $sushis = $modelSushi->findAll();

     return View::render("sushi/index", [
            "pageTitle"=>"Les Sushis",
            "sushis"=>$sushis]);


    }

    public function show()
    {
        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            header("Location: index.php");
        }

        $id = $_GET['id'];

        $modelSushi = new Sushi();

        $sushi = $modelSushi->find($id);

        $modelComment = new Comment();

        $comments = $modelComment->findAllBySushi($id);

       return View::render('sushi/show', ["sushi"=>$sushi,
            "comments"=>$comments,
            "pageTitle"=> $sushi['poisson'] ]);
    }

}