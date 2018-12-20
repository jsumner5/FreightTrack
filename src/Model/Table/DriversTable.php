<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Drivers Model
 *
 * @method \App\Model\Entity\Driver get($primaryKey, $options = [])
 * @method \App\Model\Entity\Driver newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Driver[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Driver|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Driver|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Driver patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Driver[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Driver findOrCreate($search, callable $callback = null, $options = [])
 */
class DriversTable extends Table
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

        $this->setTable('drivers');
        $this->setDisplayField('Record_ID');
        $this->setPrimaryKey('Record_ID');
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
            ->scalar('First_Name')
            ->maxLength('First_Name', 7)
            ->requirePresence('First_Name', 'create')
            ->notEmpty('First_Name');

        $validator
            ->scalar('Last_Name')
            ->maxLength('Last_Name', 8)
            ->requirePresence('Last_Name', 'create')
            ->notEmpty('Last_Name');

        $validator
            ->scalar('Phone_Number')
            ->maxLength('Phone_Number', 16)
            ->allowEmpty('Phone_Number');

        $validator
            ->scalar('Email')
            ->maxLength('Email', 28)
            ->allowEmpty('Email');

        $validator
            ->scalar('Date_Created')
            ->maxLength('Date_Created', 19)
            ->requirePresence('Date_Created', 'create')
            ->notEmpty('Date_Created');

        $validator
            ->scalar('Date_Modified')
            ->maxLength('Date_Modified', 19)
            ->requirePresence('Date_Modified', 'create')
            ->notEmpty('Date_Modified');

        $validator
            ->integer('Record_ID')
            ->allowEmpty('Record_ID', 'create');

        $validator
            ->scalar('Record_Owner')
            ->maxLength('Record_Owner', 33)
            ->requirePresence('Record_Owner', 'create')
            ->notEmpty('Record_Owner');

        $validator
            ->scalar('Last_Modified_By')
            ->maxLength('Last_Modified_By', 33)
            ->requirePresence('Last_Modified_By', 'create')
            ->notEmpty('Last_Modified_By');

        return $validator;
    }
}
