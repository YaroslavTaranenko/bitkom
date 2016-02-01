<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BlockPropertyValue Entity.
 *
 * @property int $id * @property int $block_properties_id * @property \App\Model\Entity\BlockProperty $block_property * @property int $products_id * @property \App\Model\Entity\Product $product * @property string $value * @property string $value_type * @property int $value_enum */
class BlockPropertyValue extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
