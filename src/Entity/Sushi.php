<?php

namespace App\Entity;

use App\Repository\SushiRepository;
use Core\Attributes\Table;
use Core\Attributes\TargetRepository;

#[TargetRepository(name: SushiRepository::class)]
#[Table(name:"sushis")]
class Sushi
{

   // protected string $tableName = "sushis";



}