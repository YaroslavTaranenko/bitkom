<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlockPropertyValuesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlockPropertyValuesTable Test Case
 */
class BlockPropertyValuesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.block_property_values',
        'app.block_properties',
        'app.blocks',
        'app.products',
        'app.baskets',
        'app.users',
        'app.user_groups',
        'app.product_prices',
        'app.orders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BlockPropertyValues') ? [] : ['className' => 'App\Model\Table\BlockPropertyValuesTable'];        $this->BlockPropertyValues = TableRegistry::get('BlockPropertyValues', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BlockPropertyValues);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
