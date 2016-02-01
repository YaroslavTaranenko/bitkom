<?php
namespace App\Model\Table;

use App\Model\Entity\BlockProperty;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BlockProperties Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Blocks */
class BlockPropertiesTable extends Table
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

        $this->table('block_properties');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsTo('Blocks', [
            'foreignKey' => 'block_id',
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
            ->allowEmpty('title');
        $validator
            ->requirePresence('code', 'create')            ->notEmpty('code');
        $validator
            ->allowEmpty('description');
        $validator
            ->add('value_enum', 'valid', ['rule' => 'numeric'])            ->allowEmpty('value_enum');
        $validator
            ->allowEmpty('block_propertiescol');
        $validator
            ->add('searchable', 'valid', ['rule' => 'boolean'])            ->requirePresence('searchable', 'create')            ->notEmpty('searchable');
        $validator
            ->add('is_required', 'valid', ['rule' => 'boolean'])            ->requirePresence('is_required', 'create')            ->notEmpty('is_required');
        $validator
            ->add('filterable', 'valid', ['rule' => 'boolean'])            ->requirePresence('filterable', 'create')            ->notEmpty('filterable');
        $validator
            ->add('sort', 'valid', ['rule' => 'numeric'])            ->requirePresence('sort', 'create')            ->notEmpty('sort');
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
