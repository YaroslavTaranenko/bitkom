<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity.
 *
 * @property int $id * @property int $block_id * @property \App\Model\Entity\Block $block * @property \Cake\I18n\Time $created * @property \Cake\I18n\Time $modified * @property string $title * @property string $alias * @property string $short * @property string $full * @property int $sort * @property int $created_by * @property int $modified_by * @property \App\Model\Entity\Basket[] $baskets * @property \App\Model\Entity\ProductPrice[] $product_prices */
class Product extends Entity
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
