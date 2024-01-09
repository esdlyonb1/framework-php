<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Core\Attributes\Table;
use Core\Attributes\TargetRepository;

#[TargetRepository(name: CommentRepository::class)]
#[Table(name: "comments")]
class Comment
{


}