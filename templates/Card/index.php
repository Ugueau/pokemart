<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Card> $card
 */

use Cake\Http\Session;

?>
<nav class="navbar navbar bg_secondary_color" data-spy="affix" data-offset-top="197">
    <?php echo $this->Form->create(null, ['type' => 'get', "class"=>"col-sm-12"]); ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-evenly align-items-center">
            <div class="form-group col-sm-1">
                <?php echo $this->Form->label('price', 'Prix',["class" => "txt_white"]); ?>
                <?php echo $this->Form->input('price', ['type' => 'number', 'class' => 'form-control']); ?>
            </div>
            <div class="form-group col-sm-2">
                <?php echo $this->Form->label('type', 'Type',["class" => "txt_white"]); ?>
                <?php echo $this->Form->select('type', ["Trainer", "Pokemon", "Energy"], ['empty' => 'Select a type of card', 'class' => 'form-control',"default"=> ""]); ?>
            </div>
            <div class="form-group col-sm-2">
                <?php echo $this->Form->label('rarity', 'Rareté',["class" => "txt_white"]); ?>
                <?php echo $this->Form->select('rarity', ["Commun", "Peu commun", "Rare", "Brillant", "Très rare", "Légendaire", "Magnifique"], ['empty' => 'Select a rarity level', 'class' => 'form-control']); ?>
            </div>
            <div class="form-group col-sm-2">
                <?php echo $this->Form->label('element', 'Nom',["class" => "txt_white"]); ?>
                <?php echo $this->Form->input('element', ['type' => 'text', 'class' => 'form-control']); ?>
            </div class="col-sm-1 col-xs-1">
            <?php echo $this->Form->button("<span class='glyphicon glyphicon-search'></span> Search", ['type' => 'submit', 'class' => 'btn btn-light ', "escapeTitle" => false]); ?>
        </div>
    </div>
    </div>
    <?php echo $this->Form->end(); ?>
</nav>


<div class="container-fluid">

    <div class ="d-flex justify-content-center align-items-center m-3">
        <h3 class="m-3"><?= __('Catalogue') ?></h3>
        <?php
        $session = new Session();
        if ($session->check('Auth')) echo $this->Html->link(__('Nouvelle Carte'), ['action' => 'add'], ['class' => 'btn btn-warning']);
        ?>
    </div>
    <div class="row justify-content-center ">
        <?php foreach ($card as $card): ?>
            <div class="card col-sm-2 gx-3 gy-3 m-2" style="width: 18rem;">
                <img src="/img/cards/<?= $card->id ?>.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-3"><?= $card->name ?></h5>
                    <p class="card-text fs-4"><?= $card->price . " €" ?></p>
                    <?= $this->Html->link('Ajouter au panier', ['controller' => 'Cart', 'action' => 'addToCart', $card->id, 1], ["class" => "btn btn-primary"]) ?>
                    <?= $this->Html->link('Détails', ['controller' => 'Card', 'action' => 'show_details', $card->id], ["class" => "btn btn-primary-text"]) ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="paginator d-flex flex-column justify-content-center mt-5">
        <ul class="pagination justify-content-center">
                <li class="page-item p-2"><?= $this->Paginator->first('<span class="btn btn-dark"><- ' . __('Première page') . '</span>', ['escape' => false]) ?></li>
                <li class="page-item p-2"><?= $this->Paginator->prev('<span class="btn btn-dark">< ' . __('Page précédente') . '</span>', ['escape' => false]) ?></li>
                <li class="page-item p-2"><?= $this->Paginator->next('<span class="btn btn-dark">' . __('Page suivante') . ' ></span>', ['escape' => false]) ?></li>
                <li class="page-item p-2"><?= $this->Paginator->last('<span class="btn btn-dark">' . __('Dernière page') . ' -></span>', ['escape' => false]) ?></li>
        </ul>
        <p class="text-center fs-4"><?= $this->Paginator->counter(__('Page {{page}} sur {{pages}}'))?></p>
    </div>
</div>
