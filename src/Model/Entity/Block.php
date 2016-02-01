<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Block Entity.
 *
 * @property int $id * @property int $block_id * @property string $title * @property string $alias * @property string $description * @property string $sort * @property string $sort_dir * @property int $sort_ord * @property \App\Model\Entity\Block[] $blocks * @property \App\Model\Entity\BlockProperty[] $block_properties * @property \App\Model\Entity\Product[] $products */
class Block extends Entity
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
