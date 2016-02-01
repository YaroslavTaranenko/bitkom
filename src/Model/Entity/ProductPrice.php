<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductPrice Entity.
 *
 * @property int $id * @property int $product_id * @property \App\Model\Entity\Product $product * @property int $group_id * @property \App\Model\Entity\UserGroup $user_group * @property float $value * @property string $curency * @property \App\Model\Entity\Basket[] $baskets */
class ProductPrice extends Entity
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
