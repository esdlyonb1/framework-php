<?php

namespace App\Controller;


use App\Repository\CommentRepository;
use Core\Controller\Controller;

class CommentController extends Controller
{

    public function create()
    {
        if(!isset($_POST['content']) || empty($_POST['content'])){

          return $this->redirect();
        }

        if(!isset($_POST['sushiId']) || !ctype_digit($_POST['sushiId']) )
        {
            return $this->redirect();

        }

        $commentContent = $_POST['content'];
        $sushiId = $_POST['sushiId'];

        $commentRepository = new CommentRepository();

        $commentRepository->insert($commentContent, $sushiId);

       return $this->redirect("sushi.php?id=$sushiId");
    }
}