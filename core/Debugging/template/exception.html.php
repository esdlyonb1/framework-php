
<div style="background-color: teal">

    <p>Erreur : <?= $exception->getCode()?></p>
    <p>Message : <strong> <?= $exception->getMessage() ?></strong></p>

    <p>Ligne : <?= $exception->getLine() ?></p>
    <p>fichier : <?= $exception->getFile() ?></p>

</div>


