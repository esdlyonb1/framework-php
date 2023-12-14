<?php

require_once '../bordel/logique.php';
require_once '../bordel/database.php';

// récuperer tous les sushis


$sushis = findAllSushis();

afficher("sushi/index", [
                                        "pageTitle"=>"Les Sushis",
                                        "sushis"=>$sushis]);