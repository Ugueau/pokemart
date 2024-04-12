<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Card $card
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Card'), ['action' => 'edit', $card->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Card'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Card'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Card'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="card view content">
            <h3><?= h($card->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($card->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($card->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pokemon Type') ?></th>
                    <td><?= h($card->pokemon_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weakness') ?></th>
                    <td><?= h($card->weakness) ?></td>
                </tr>
                <tr>
                    <th><?= __('Resistance') ?></th>
                    <td><?= h($card->resistance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rarity Symbol') ?></th>
                    <td><?= h($card->rarity_symbol) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image Url') ?></th>
                    <td><?= h($card->image_url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Origin Country') ?></th>
                    <td><?= h($card->origin_country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($card->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hp') ?></th>
                    <td><?= $card->hp === null ? '' : $this->Number->format($card->hp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Level') ?></th>
                    <td><?= $card->level === null ? '' : $this->Number->format($card->level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Retreat Cost') ?></th>
                    <td><?= $card->retreat_cost === null ? '' : $this->Number->format($card->retreat_cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rarity Index') ?></th>
                    <td><?= $this->Number->format($card->rarity_index) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copies') ?></th>
                    <td><?= $this->Number->format($card->copies) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($card->price) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($card->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
