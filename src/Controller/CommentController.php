<?php

namespace App\Controller;

use App\Model\Comment;

class CommentController
{

    public function create()
    {
        if(!isset($_POST['content']) || empty($_POST['content'])){

            header("Location: index.php");
        }

        if(!isset($_POST['sushiId']) || !ctype_digit($_POST['sushiId']) )
        {
            header("Location: index.php");

        }

        $commentContent = $_POST['content'];
        $sushiId = $_POST['sushiId'];

        $modelComment = new Comment();

        $modelComment->insert($commentContent, $sushiId);

       return header("Location: sushi.php?id=$sushiId");
    }
}