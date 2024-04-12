<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Card Entity
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property int|null $hp
 * @property string|null $pokemon_type
 * @property int|null $level
 * @property string|null $description
 * @property string|null $weakness
 * @property string|null $resistance
 * @property int|null $retreat_cost
 * @property int $rarity_index
 * @property string $rarity_symbol
 * @property string $image_url
 * @property string $origin_country
 * @property int $copies
 * @property string $price
 */
class Card extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'type' => true,
        'name' => true,
        'hp' => true,
        'pokemon_type' => true,
        'level' => true,
        'description' => true,
        'weakness' => true,
        'resistance' => true,
        'retreat_cost' => true,
        'rarity_index' => true,
        'rarity_symbol' => true,
        'image_url' => true,
        'origin_country' => true,
        'copies' => true,
        'price' => true,
    ];
}
