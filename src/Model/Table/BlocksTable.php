<?php
namespace App\Model\Table;

use App\Model\Entity\Block;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Blocks Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Blocks * @property \Cake\ORM\Association\HasMany $BlockProperties * @property \Cake\ORM\Association\HasMany $Blocks * @property \Cake\ORM\Association\HasMany $Products */
class BlocksTable extends Table
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

        $this->table('blocks');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsTo('Blocks', [
            'foreignKey' => 'block_id'
        ]);
        $this->hasMany('BlockProperties', [
            'foreignKey' => 'block_id'
        ]);
        $this->hasMany('Blocks', [
            'foreignKey' => 'block_id'
        ]);
        $this->hasMany('Products', [
            'foreignKey' => 'block_id'
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
            ->requirePresence('alias', 'create')            ->notEmpty('alias');
        $validator
            ->allowEmpty('description');
        $validator
            ->allowEmpty('sort');
        $validator
            ->allowEmpty('sort_dir');
        $validator
            ->add('sort_ord', 'valid', ['rule' => 'numeric'])            ->requirePresence('sort_ord', 'create')            ->notEmpty('sort_ord');
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
