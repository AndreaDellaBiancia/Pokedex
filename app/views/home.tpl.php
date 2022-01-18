<section class="home">

    <?php
    foreach ($pokemons as $pokemon) {     ?>



        <article class="pokemon">
            <a href="<?= $router->generate('detail', ['id' => $pokemon->getId()]) ?>">
                <img class="pokemon_img" src="./img/<?= $pokemon->getNumero() ?>.png">
                <p>#<?= $pokemon->getNumero() ?> <?= $pokemon->getNom() ?></p>
            </a>
        </article>
        
    <?php } ?>

</section>