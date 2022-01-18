<section class="type">



        <?php foreach ($pokemons as $pokemon) { ?>


                <article class="pokemon">
                        <a href="<?= $router->generate('detail', ['id' => $pokemon->getId()]) ?>">
                                <img class="pokemon_img" src="./img/<?= $pokemon->getpokemonNumero() ?>.png">
                                <p>#<?= $pokemon->getpokemonNumero() ?> <?= $pokemon->getNom() ?> </p>
                        </a>
                </article>


        <?php }  ?>


</section>