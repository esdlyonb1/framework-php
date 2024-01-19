<?php

namespace App\Entity;

use Core\Attributes\Table;
use Core\Attributes\TargetRepository;
use App\Repository\TrucRepository;

#[TargetRepository(name: TrucRepository::class)]
#[Table(name: "trucs")]
class Truc
{

}