<?php
namespace App\Model\Table;

use App\Model\Entity\Product;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Blocks * @property \Cake\ORM\Association\HasMany $Baskets * @property \Cake\ORM\Association\HasMany $ProductPrices */
class ProductsTable extends Table
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

        $this->table('products');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Blocks', [
            'foreignKey' => 'block_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Baskets', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('ProductPrices', [
            'foreignKey' => 'product_id'
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
            ->allowEmpty('title');
        $validator
            ->allowEmpty('alias');
        $validator
            ->allowEmpty('short');
        $validator
            ->allowEmpty('full');
        $validator
            ->add('sort', 'valid', ['rule' => 'numeric'])            ->requirePresence('sort', 'create')            ->notEmpty('sort');
        $validator
            ->add('created_by', 'valid', ['rule' => 'numeric'])            ->requirePresence('created_by', 'create')            ->notEmpty('created_by');
        $validator
            ->add('modified_by', 'valid', ['rule' => 'numeric'])            ->requirePresence('modified_by', 'create')            ->notEmpty('modified_by');
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
        $rules->add($rules->existsIn(['block_id'], 'Blocks'));
        return $rules;
    }
}
