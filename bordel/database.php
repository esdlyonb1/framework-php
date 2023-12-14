<?php

function getPdo(){

    $dbHost = "localhost";
    $dbName = "nourriture";

    $username = "sushi-admin";
    $password = "blablabla";

    $pdo = new PDO(
        "mysql:host=$dbHost;dbname=$dbName",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ]
    );
    return $pdo;
}

function findAllSushis():array
{
    $pdo = getPdo();

    $query = $pdo->query("SELECT * FROM sushis");

    $sushis = $query->fetchAll();

    return $sushis;
}

function findSushi(int $id):array
{
    $pdo = getPdo();

    $query = $pdo->prepare("SELECT * FROM sushis WHERE id = :id");

    $query->execute([
        "id" => $id
    ]);

    $sushi = $query->fetch();

    return $sushi;
}

function findAllCommentsBySushi(int $id):array
{
    $pdo = getPdo();

    $queryComments = $pdo->prepare("SELECT * FROM comments WHERE sushi_id = :sushiId");

    $queryComments->execute([
        "sushiId"=>$id]);


    $comments = $queryComments->fetchAll();

    return $comments;
}

function insertSushi(string $type, string $description, string $poisson):void
{
    $pdo = getPdo();
    $query = $pdo->prepare("INSERT INTO sushis SET type = :type, description = :description, poisson = :poisson");

    $query->execute([
        "type"=>$type,
        "description"=>$description,
        "poisson"=>$poisson
    ]);
}

function deleteSushi(int $id):void
{
    $pdo = getPdo();
    $query = $pdo->prepare("DELETE FROM sushis WHERE id = :id");
    $query->execute([
        "id"=>$id
    ]);

}

function updateSushi(string $type, string $description, string $poisson, int $id):void
{
    $pdo = getPdo();
    $query = $pdo->prepare("UPDATE sushis SET type = :type, description = :description, poisson = :poisson WHERE id = :id");

    $query->execute([
        "type" => $type,
        "description" => $description,
        "poisson" => $poisson,
        "id" => $id
    ]);
}

function insertComment(string $content, int $sushiId):void
{
    $pdo = getPdo();
    $query = $pdo->prepare("INSERT INTO comments SET content = :content, sushi_id = :sushiId");
    $query->execute([
        "content"=>$content,
        "sushiId"=>$sushiId
    ]);
}