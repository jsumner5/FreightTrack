<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Companies Model
 *
 * @method \App\Model\Entity\Company get($primaryKey, $options = [])
 * @method \App\Model\Entity\Company newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Company[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Company|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Company[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Company findOrCreate($search, callable $callback = null, $options = [])
 */
class CompaniesTable extends Table
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

        $this->setTable('Companies');
        $this->setDisplayField('Name');
        $this->setPrimaryKey('CompanyID');
        $this->hasMany('Loads',['foreignKey'=> 'LoadID']);

        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'DateCreated' => 'new',
                    'DateModified' => 'always',
                ],
            ]
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
            ->scalar('Name')
            ->maxLength('Name', 64)
            ->requirePresence('Name', 'create')
            ->notEmpty('Name');

        $validator
            ->integer('MCNumber')
            ->allowEmpty('MCNumber');

        $validator
            ->scalar('Factorable')
            ->maxLength('Factorable', 3)
            ->requirePresence('Factorable', 'create')
            ->notEmpty('Factorable');

        $validator
            ->scalar('Notes')
            ->maxLength('Notes', 300)
            ->allowEmpty('Notes');

        $validator
            ->scalar('Address')
            ->maxLength('Address', 68)
            ->allowEmpty('Address');

        $validator
            ->scalar('Phone')
            ->maxLength('Phone', 11)
            ->allowEmpty('Phone');


        return $validator;
    }
}
