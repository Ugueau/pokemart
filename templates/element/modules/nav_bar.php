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
                <?php echo $this->Form->select('type', ["Trainer", "Pokemon", "Energy"], ['empty' => 'Select a type of card', 'class' => 'form-control']); ?>
            </div>
            <div class="form-group col-sm-2">
                <?php echo $this->Form->label('rarity', 'Rareté',["class" => "txt_white"]); ?>
                <?php echo $this->Form->select('rarity', ["Commun", "Peu commun", "Rare", "Brillant", "Très rare", "Légendaire", "Magnifique"], ['empty' => 'Select a rarity level', 'class' => 'form-control']); ?>
            </div>
            <div class="form-group col-sm-2">
                <?php echo $this->Form->label('element', 'Nom',["class" => "txt_white"]); ?>
                <?php echo $this->Form->input('element', ['type' => 'text', 'class' => 'form-control']); ?>
                <?php /*echo $this->Form->select('element', ["Normal",
                    "Feu",
                    "Eau",
                    "Herbe",
                    "Electrique",
                    "Glace",
                    "Combat",
                    "Poison",
                    "Sol",
                    "Vol",
                    "Psy",
                    "Insecte",
                    "Roche",
                    "Fantôme",
                    "Ténèbres",
                    "Dragon",
                    "Acier",
                    "Fée"], ['empty' => 'Select a type', 'class' => 'form-control']); */?>
            </div class="col-sm-1 col-xs-1">
            <?php echo $this->Form->button("<span class='glyphicon glyphicon-search'></span> Search", ['type' => 'submit', 'class' => 'btn btn-light ', "escapeTitle" => false]); ?>
        </div>
    </div>
    </div>
    <?php echo $this->Form->end(); ?>
</nav>
