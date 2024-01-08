<?php

namespace App\Entity;

use App\Repository\SushiRepository;
use Core\Attributes\TargetRepository;

#[TargetRepository(name: SushiRepository::class)]
class Sushi
{

   // protected string $tableName = "sushis";



}