<?php
namespace App\Model\Table;

use App\Model\Entity\BlockPropertyValue;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BlockPropertyValues Model
 *
 * @property \Cake\ORM\Association\BelongsTo $BlockProperties * @property \Cake\ORM\Association\BelongsTo $Products */
class BlockPropertyValuesTable extends Table
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

        $this->table('block_property_values');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('BlockProperties', [
            'foreignKey' => 'block_properties_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'products_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('value');
        $validator
            ->allowEmpty('value_type');
        $validator
            ->add('value_enum', 'valid', ['rule' => 'numeric'])            ->requirePresence('value_enum', 'create')            ->notEmpty('value_enum');
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
        $rules->add($rules->existsIn(['block_properties_id'], 'BlockProperties'));
        $rules->add($rules->existsIn(['products_id'], 'Products'));
        return $rules;
    }
}
