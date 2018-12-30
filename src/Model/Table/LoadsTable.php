<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Loads Model
 *
 * @method \App\Model\Entity\Load get($primaryKey, $options = [])
 * @method \App\Model\Entity\Load newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Load[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Load|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Load|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Load patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Load[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Load findOrCreate($search, callable $callback = null, $options = [])
 */
class LoadsTable extends Table
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

        $this->setTable('Loads');
        $this->setDisplayField('LoadNumber');
        $this->setPrimaryKey('LoadID');
        $this ->belongsTo('companies',['foreignKey'=>'CompanyID']);
        $this-> hasOne('Copanies',['foreignKey' => 'CompanyID']);
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
            ->scalar('CompanyName')
            ->maxLength('CompanyName', 63)
            ->requirePresence('CompanyName', 'create')
            ->notEmpty('CompanyName');

        $validator
            ->scalar('Status')
            ->maxLength('Status', 10)
            ->requirePresence('Status', 'create')
            ->notEmpty('Status');

        $validator
            ->scalar('LoadNumber')
            ->maxLength('LoadNumber', 13)
            ->requirePresence('LoadNumber', 'create')
            ->notEmpty('LoadNumber');

        $validator
            ->scalar('Driver')
            ->maxLength('Driver', 7)
            ->requirePresence('Driver', 'create')
            ->notEmpty('Driver');

        $validator
            ->scalar('Rate')
            ->maxLength('Rate', 9)
            ->requirePresence('Rate', 'create')
            ->notEmpty('Rate');

        $validator
            ->scalar('PaymentMethod')
            ->maxLength('PaymentMethod', 9)
            ->requirePresence('PaymentMethod', 'create')
            ->notEmpty('PaymentMethod');

        $validator
            ->scalar('Dispacther')
            ->maxLength('Dispacther', 13)
            ->requirePresence('Dispacther', 'create')
            ->notEmpty('Dispacther');


        $validator
            ->scalar('PickUpAddress')
            ->maxLength('PickUpAddress', 62)
            ->allowEmpty('PickUpAddress');

        $validator
            ->scalar('DeliveryAddress')
            ->maxLength('DeliveryAddress', 58)
            ->allowEmpty('DeliveryAddress');

        $validator
            ->scalar('Comments')
            ->maxLength('Comments', 500)
            ->allowEmpty('Comments');

        $validator
            ->integer('CompanyID')
            ->requirePresence('CompanyID', 'create')
            ->notEmpty('CompanyID');

        return $validator;
    }
}
