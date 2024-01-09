<h1>les pizzas</h1>

<?php foreach ($pizzas as $pizza): ?>

<div class="border border-dark">
    <h3>Nom : <?= $pizza['name'] ?></h3>
    <h4>Taille : <?= $pizza['size'] ?></h4>
    <a href="pizza.php?id=<?= $pizza['id'] ?>" class="btn btn-primary">Voir</a>

</div>



<?php endforeach; ?>
