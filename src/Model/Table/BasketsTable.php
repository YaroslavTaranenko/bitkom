<?php
namespace App\Model\Table;

use App\Model\Entity\Basket;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Baskets Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users * @property \Cake\ORM\Association\BelongsTo $Products * @property \Cake\ORM\Association\BelongsTo $ProductPrices * @property \Cake\ORM\Association\BelongsTo $Orders */
class BasketsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('baskets');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ProductPrices', [
            'foreignKey' => 'product_price_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])            ->allowEmpty('id', 'create');
        $validator
            ->add('price', 'valid', ['rule' => 'numeric'])            ->requirePresence('price', 'create')            ->notEmpty('price');
        $validator
            ->requirePresence('curency', 'create')            ->notEmpty('curency');
        $validator
            ->add('date_insert', 'valid', ['rule' => 'datetime'])            ->requirePresence('date_insert', 'create')            ->notEmpty('date_insert');
        $validator
            ->add('date_update', 'valid', ['rule' => 'datetime'])            ->requirePresence('date_update', 'create')            ->notEmpty('date_update');
        $validator
            ->add('quantity', 'valid', ['rule' => 'numeric'])            ->requirePresence('quantity', 'create')            ->notEmpty('quantity');
        $validator
            ->allowEmpty('title');
        $validator
            ->allowEmpty('detail_url');
        $validator
            ->add('discount', 'valid', ['rule' => 'numeric'])            ->allowEmpty('discount');
        $validator
            ->allowEmpty('measure');
        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        $rules->add($rules->existsIn(['product_price_id'], 'ProductPrices'));
        $rules->add($rules->existsIn(['order_id'], 'Orders'));
        return $rules;
    }
}
