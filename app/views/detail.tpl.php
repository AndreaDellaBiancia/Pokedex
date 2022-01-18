<section class="detail">

    <h2 class="detail_title">Détail de <?= $pokemon[0]->getNom() ?></h2>
    <article class="detail_pokemon">
        <div class="detail_left"><img class="detail_pic" src="./img/<?= $pokemon[0]->getNumero() ?>.png"></div>
        <div class="detail_right">
            <h3 class="detail_right-title">#<?= $pokemon[0]->getNumero() ?> <?= $pokemon[0]->getNom() ?></h3>
            <div class="detail_types">
                <a href="<?= $router->generate('type', ['id' => $pokemon[0]->getTypeId()]) ?>">
                    <p class="detail_type" style="background-color: #<?= $pokemon[0]->getColor() ?>;"><?= $pokemon[0]->getTypeName() ?></p>
                </a>

                <?php if (isset($pokemon[1])) : ?>
                    <a href="<?= $router->generate('type', ['id' => $pokemon[1]->getTypeId()]) ?>">
                        <p class="detail_type" style="background-color: #<?= $pokemon[1]->getColor() ?>;"><?= $pokemon[1]->getTypeName() ?></p>
                    </a>
                <?php endif ?>
            </div>
            <h4 class="statistics-title">Statistiques</h4>
            <table class="statistics">
                <tr>
                    <td class=" statistics_item statistics_item--1">PV</td>
                    <td class=" statistics_item statistics_item--2"><?= $pokemon[0]->getPv() ?></td>
                    <td class=" statistics_item3 statistics_level">
                        <div class="statistics_red-level" style=" width: calc((255px * 1.6) - (<?= $pokemon[0]->getPv() ?>px * 1.6 ));">
                    </td>
                </tr>
                <tr>
                    <td class="statistics_item statistics_item--1">Attaque</td>
                    <td class="statistics_item statistics_item--2"><?= $pokemon[0]->getAttaque() ?></td>
                    <td class=" statistics_item3 statistics_level">
                        <div class="statistics_red-level" style=" width: calc((255px * 1.6) - (<?= $pokemon[0]->getAttaque() ?>px * 1.6 ));">
                    </td>
                </tr>
                <tr>
                    <td class="statistics_item statistics_item--1">Défense</td>
                    <td class="statistics_item statistics_item--2"><?= $pokemon[0]->getDefense() ?></td>
                    <td class=" statistics_item3 statistics_level">
                        <div class="statistics_red-level" style=" width: calc((255px * 1.6) - (<?= $pokemon[0]->getDefense() ?>px * 1.6 ));">
                    </td>
                </tr>
                <tr>
                    <td class="statistics_item statistics_item--1">Attaque Spé.</td>
                    <td class="statistics_item statistics_item--2"><?= $pokemon[0]->getAttaqueSpe() ?></td>
                    <td class=" statistics_item3 statistics_level">
                        <div class="statistics_red-level" style=" width: calc((255px * 1.6) - (<?= $pokemon[0]->getAttaqueSpe() ?>px * 1.6 ));">
                    </td>
                </tr>
                <tr>
                    <td class="statistics_item statistics_item--1">Défense Spé.</td>
                    <td class="statistics_item statistics_item--2"><?= $pokemon[0]->getDefenseSpe() ?></td>
                    <td class=" statistics_item3 statistics_level">
                        <div class="statistics_red-level" style=" width: calc((255px * 1.6) - (<?= $pokemon[0]->getDefenseSpe() ?>px * 1.6 ));">
                    </td>
                </tr>
                <tr>
                    <td class="statistics_item statistics_item--1">Vitesse</td>
                    <td class="statistics_item statistics_item--2"><?= $pokemon[0]->getVitesse() ?></td>
                    <td class=" statistics_item3 statistics_level">
                        <div class="statistics_red-level" style=" width: calc((255px * 1.6) - (<?= $pokemon[0]->getVitesse() ?>px * 1.6 ));">
                    </td>
                </tr>
            </table>


    </article>
    <p class="backToList"><a href="<?= $router->generate('home') ?>">Revenir à la liste</a></p>

</section>