<?php


namespace App\Controller;


use App\Repository\CommentRepository;
use App\Repository\SushiRepository;
use Core\Controller\Controller;


class SushiController extends Controller
{
    public function index()
    {

        $sushiRepository = new SushiRepository();

        $sushis = $sushiRepository->findAll();

     return $this->render("sushi/index", [
            "pageTitle"=>"Les Sushis",
            "sushis"=>$sushis]);


    }

    public function show()
    {
        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            return $this->redirect();
        }

        $id = $_GET['id'];

        $sushiRepository = new SushiRepository();

        $sushi = $sushiRepository->find($id);

        $commentRepository = new CommentRepository();

        $comments = $commentRepository->findAllBySushi($id);

       return $this->render('sushi/show', ["sushi"=>$sushi,
            "comments"=>$comments,
            "pageTitle"=> $sushi['poisson'] ]);
    }

    public function delete()
    {
        // logique de suppression du sushi

        return $this->redirect();


    }

}