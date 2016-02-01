<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Basket Entity.
 *
 * @property int $id * @property int $user_id * @property \App\Model\Entity\User $user * @property int $product_id * @property \App\Model\Entity\Product $product * @property int $product_price_id * @property \App\Model\Entity\ProductPrice $product_price * @property float $price * @property string $curency * @property \Cake\I18n\Time $date_insert * @property \Cake\I18n\Time $date_update * @property float $quantity * @property string $title * @property string $detail_url * @property float $discount * @property string $measure * @property int $order_id * @property \App\Model\Entity\Order $order */
class Basket extends Entity
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
