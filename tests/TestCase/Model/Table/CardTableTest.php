<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CardTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CardTable Test Case
 */
class CardTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CardTable
     */
    protected $Card;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Card',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Card') ? [] : ['className' => CardTable::class];
        $this->Card = $this->getTableLocator()->get('Card', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Card);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CardTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
