<section class="types-list">
    <p class="p-list">Cliquez sur un type pour voir tous les Pokémon de ce type</p>

    <div class="list-container">

        <?php foreach ($types as $type) {  ?>

            <a href="<?= $router->generate('type', ['id' => $type->getId()]) ?>"> 
                    <div class="type-item" style="background-color: #<?= $type->getColor() ?>;">
                        <p><?= $type->getName() ?></p>
                    </div>
            </a>

        <?php  }  ?>
    </div>

</section>