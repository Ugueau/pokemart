<?php
/**
 * @var AppView $this
 * @var Card $card
 */

use App\Model\Entity\Card;
use App\View\AppView;

?>

<div class="row">
    <aside class="col-md-2">
        <div class="side-nav text-center mt-5">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Retour au Catalogue'), ['action' => 'index'], ['class' => 'btn btn-secondary side-nav-item']) ?>
        </div>
    </aside>
    <div class="col-md-8">
        <div class="card form-content">
            <?= $this->Form->create($card, ["type" => 'file', 'class' => 'row g-3 p-3']) ?>
            <fieldset>
                <legend><?= __('Edit Card') ?></legend>
                <?php
                echo $this->Form->select('type', ['Pokemon' => 'Pokemon', 'Trainer' => 'Trainer', 'Energy' => 'Energy'], ['class' => 'form-control mb-3', "id" => "type_add_form", "onchange"=>"changeForm()"]);
                echo $this->Form->control('name', ['class' => 'form-control mb-3']);
                echo $this->Form->control('hp', ['class' => 'form-control mb-3', "id" => "hp_add_form"]);
                ?>
                <label for="pokemon_type_add_form">Élément</label>
                <?php
                echo $this->Form->select('pokemon_type',['Feu' => 'Feu', 'Eau' => 'Eau', 'Acier' => 'Acier', 'Combat'=>'Combat','Dragon'=>'Dragon','Electrik'=>'Electrik','Fée'=>'Fée','Glace'=>'Glace',"Insecte"=>"Insecte",'Normal'=>'Normal','Plante'=>'Plante','Poison'=>'Poison','Psy'=>'Psy','Roche'=>'Roche','Sol'=>'Sol','Spectre'=>'Spectre','Ténèbres'=>'Ténèbres','Vol'=>'Vol'], ['class' => 'form-control mb-3', "id"=>"pokemon_type_add_form"]);
                echo $this->Form->control('level', ['class' => 'form-control mb-3', "id" => "level_add_form"]);
                echo $this->Form->control('description', ['class' => 'form-control mb-3']);
                echo $this->Form->control('weakness', ['class' => 'form-control mb-3']);
                echo $this->Form->control('resistance', ['class' => 'form-control mb-3']);
                echo $this->Form->control('retreat_cost', ['class' => 'form-control mb-3', "id"=>"retreat_cost_add_form"]);
                echo $this->Form->control('rarity_index', ['class' => 'form-control mb-3']);
                //echo $this->Form->control('image_url', ['type' => 'file', 'class' => 'form-control mb-3']);
                echo $this->Form->file('image_url',['class' => 'form-control mb-3']);
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
