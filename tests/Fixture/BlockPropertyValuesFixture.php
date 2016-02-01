<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BlockPropertyValuesFixture
 *
 */
class BlockPropertyValuesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'block_properties_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'products_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'value' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'value_type' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'value_enum' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_block_property_values_block_properties1_idx' => ['type' => 'index', 'columns' => ['block_properties_id'], 'length' => []],
            'fk_block_property_values_products1_idx' => ['type' => 'index', 'columns' => ['products_id'], 'length' => []],
            'fk_block_property_values_block_property_enum1_idx' => ['type' => 'index', 'columns' => ['value_enum'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_block_property_values_block_properties1' => ['type' => 'foreign', 'columns' => ['block_properties_id'], 'references' => ['block_properties', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_block_property_values_block_property_enum1' => ['type' => 'foreign', 'columns' => ['value_enum'], 'references' => ['block_property_enum', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_block_property_values_products1' => ['type' => 'foreign', 'columns' => ['products_id'], 'references' => ['products', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'block_properties_id' => 1,
            'products_id' => 1,
            'value' => 'Lorem ipsum dolor sit amet',
            'value_type' => 'Lorem ip',
            'value_enum' => 1
        ],
    ];
}
