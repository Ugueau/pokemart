<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Card> $card
 */

use Cake\Http\Session;

?>
<div class="container-fluid">
    <div class="d-flex justify-content-center m-3"><h3 class="col-sm-1"><?= $card->name ?></h3></div>
    <div class="row bg_grey_color">
        <div class="col-lg-4 row justify-content-center">
            <div class="text-center">
                <img src="/img/cards/<?= $card->id ?>.jpg"  class="img-fluid detail_card_img">
            </div>
        </div>
        <div class="table-responsive col-lg-8">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Caractéristique</th>
                    <th scope="col">Valeur</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Nom</th>
                    <td><?= $card->name ?></td>
                </tr>

                <tr>
                    <th scope="row">Type</th>
                    <td><?= $card->type ?></td>
                </tr>
                <tr>
                    <th scope="row">Description</th>
                    <td><?= $card->description ?></td>
                </tr>
                <?php
                if ($card->type === 'pokemon') :
                    ?>
                    <tr>
                        <th scope="row">PV</th>
                        <td><?= $card->hp ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Élément</th>
                        <td><?= $card->pokemon_type ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Niveau</th>
                        <td><?= $card->level ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Faiblesse</th>
                        <td><?= $card->weakness ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Résistance</th>
                        <td><?= $card->resistance ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Coût de retraite</th>
                        <td><?= $card->retreat_cost ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Rareté</th>
                        <td><?= $card->rarity_index ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Origine</th>
                        <td><?= $card->origin_country ?></td>
                    </tr>
                    <tr>
                        <th scope="row">En stock</th>
                        <td><?= $card->copies ?></td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="d-flex flex-column align-items-center p-3">
            <span class="col-sm-1 m-4 text-center fs-2 fw-bold"><?= $card->price . " €" ?></span>
            <div class="d-flex flex-row col-sm-4 justify-content-evenly">
            <?= $this->Html->link('Ajouter au panier', ['controller' => 'Cart', 'action' => 'addToCart', $card->id, 1], ["class" => "btn btn-primary"]) ?>
            <?php $session = new Session();
            if ($session->check('Auth')) {
                echo $this->Html->link('Modifier', ['controller' => 'Card', 'action' => 'edit', $card->id], ["class" => "btn btn-primary"]);
            }?>
            </div>
        </div>
    </div>
</div>
