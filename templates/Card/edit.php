<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Card $card
 */
?>
<div class="row">
    <aside class="col-md-2">
        <div class="side-nav text-center mt-5">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'delete', $card->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $card->id), 'class' => 'btn btn-danger side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Retour au Catalogue'), ['action' => 'index'], ['class' => 'btn btn-secondary side-nav-item']) ?>
        </div>
    </aside>
    <div class="col-md-8">
        <div class="card form-content">
            <?= $this->Form->create($card, ['class' => 'row g-3 p-3']) ?>
            <fieldset>
                <legend><?= __('Edit Card') ?></legend>
                <?php
                echo $this->Form->select('type', ['pokemon' => 'Pokemon', 'trainer' => 'Trainer', 'energy' => 'Energy'], ['class' => 'form-control mb-3']);
                echo $this->Form->control('name', ['class' => 'form-control mb-3']);
                echo $this->Form->control('hp', ['class' => 'form-control mb-3']);
                ?>
                <label for="pokemon_type">Élément</label>
                <?php
                echo $this->Form->select('pokemon_type',['Feu' => 'Feu', 'Eau' => 'Eau', 'Acier' => 'Acier', 'Combat'=>'Combat','Dragon'=>'Dragon','Electrik'=>'Electrik','Fée'=>'Fée','Glace'=>'Glace',"Insecte"=>"Insecte",'Normal'=>'Normal','Plante'=>'Plante','Poison'=>'Poison','Psy'=>'Psy','Roche'=>'Roche','Sol'=>'Sol','Spectre'=>'Spectre','Ténèbres'=>'Ténèbres','Vol'=>'Vol'], ['class' => 'form-control mb-3', "id"=>"pokemon_type"]);
                echo $this->Form->control('level', ['class' => 'form-control mb-3']);
                echo $this->Form->control('description', ['class' => 'form-control mb-3']);
                echo $this->Form->control('weakness', ['class' => 'form-control mb-3']);
                echo $this->Form->control('resistance', ['class' => 'form-control mb-3']);
                echo $this->Form->control('retreat_cost', ['class' => 'form-control mb-3']);
                echo $this->Form->control('rarity_index', ['class' => 'form-control mb-3']);
                echo $this->Form->control('image_url', ['class' => 'form-control mb-3']);
                echo $this->Form->control('origin_country', ['class' => 'form-control mb-3']);
                echo $this->Form->control('copies', ['class' => 'form-control mb-3']);
                echo $this->Form->control('price', ['class' => 'form-control mb-3']);
                ?>
            </fieldset>
            <div class="col-12">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

