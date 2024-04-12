<div class="container-fluid row">
    <?php

    use Cake\ORM\TableRegistry;

    if ($cart != null) :
        if (count($cart->getItems()) > 0) :
            ?>
            <div class="col-md-9">
                <table class="table">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix unitaire (HT)</th>
                        <th>Prix total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php


                    $cardModel = TableRegistry::getTableLocator()->get('Card');
                    $cartTotal = 0;
                    $productsNumber = 0;
                    $frais_livraison = 2.99;

                    foreach ($cart->getItems() as $cardId => $quantity): ?>
                        <?php $cartCard = $cardModel->get($cardId);
                        $productsNumber++;
                        $cartTotal += $cartCard->price; ?>
                        <tr>
                            <td class="align-middle"><img src="/img/cards/<?= $cartCard->id ?>.jpg"  class="img_in_cart"></td>
                            <td class="align-middle"><?= h($cartCard->name) ?></td>
                            <td class="align-middle"><?= h($quantity) ?></td>
                            <td class="align-middle"><?= h($cartCard->price) ?> €</td>
                            <td class="align-middle"><?= h($cartCard->price * $quantity) ?> €</td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <aside class=" d-flex flex-column col-md-3 justify-content-end">
                <table class="table m-3">
                <tbody>
                <tr>
                    <th scope="row">Panier (<?= $productsNumber ?>)</th>
                    <td><?= $cartTotal ?> €</td>
                </tr>
                <tr>
                    <th scope="row">Frais de livraison</th>
                    <td><?= $frais_livraison ?> €</td>
                </tr>
                <tr>
                    <th scope="row">TVA (20%)</th>
                    <td><?= $cartTotal * 0.20 ?> €</td>
                </tr>
                <tr>
                    <th scope="row">Total TTC</th>
                    <td><?= $cartTotal * 1.20 + $frais_livraison ?> €</td>
                </tr>
                </tbody>
                </table>
                <div class="d-flex flex-row justify-content-center">
                    <?= $this->Html->link('Vider le panier', ['controller' => 'cart', 'action' => 'clear_cart'],["class" => "btn btn-light"]); ?>
                    <?= $this->Html->link('Commander', ['controller' => 'cart', 'action' => 'index'],["class" => "btn btn-warning"]); ?>
                </div>
            </aside>
        <?php else : ?>
            <h1>Votre panier est vide !</h1>
        <?php endif; endif; ?>
</div>
