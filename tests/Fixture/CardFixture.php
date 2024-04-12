<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CardFixture
 */
class CardFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'card';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'type' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'hp' => 1,
                'pokemon_type' => 'Lorem ipsum dolor sit amet',
                'level' => 1,
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'weakness' => 'Lorem ipsum dolor sit amet',
                'resistance' => 'Lorem ipsum dolor sit amet',
                'retreat_cost' => 1,
                'rarity_index' => 1,
                'rarity_symbol' => 'Lorem ipsum dolor sit amet',
                'image_url' => 'Lorem ipsum dolor sit amet',
                'origin_country' => 'Lorem ipsum dolor sit amet',
                'copies' => 1,
                'price' => 1.5,
            ],
        ];
        parent::init();
    }
}
