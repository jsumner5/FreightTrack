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

        $this->setTable('companies');
        $this->setDisplayField('Name');
        $this->setPrimaryKey('Company_ID');
       // $this->belongsToMany('loads',['foreignKey'=> 'Load_ID']);
        $this->hasMany('loads',['foreignKey'=> 'Load_ID']);
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
            ->integer('_of_Loads')
            ->requirePresence('_of_Loads', 'create')
            ->notEmpty('_of_Loads');

        $validator
            ->scalar('Add_Load')
            ->maxLength('Add_Load', 88)
            ->requirePresence('Add_Load', 'create')
            ->notEmpty('Add_Load');

        $validator
            ->scalar('Notes')
            ->maxLength('Notes', 300)
            ->allowEmpty('Notes');

        $validator
            ->scalar('Address')
            ->maxLength('Address', 68)
            ->allowEmpty('Address');

        $validator
            ->scalar('Address_City')
            ->maxLength('Address_City', 17)
            ->allowEmpty('Address_City');

        $validator
            ->scalar('Address_Country')
            ->maxLength('Address_Country', 13)
            ->requirePresence('Address_Country', 'create')
            ->notEmpty('Address_Country');

        $validator
            ->scalar('Address_Postal_Code')
            ->maxLength('Address_Postal_Code', 10)
            ->allowEmpty('Address_Postal_Code');

        $validator
            ->scalar('Address_StateRegion')
            ->maxLength('Address_StateRegion', 14)
            ->allowEmpty('Address_StateRegion');

        $validator
            ->scalar('Address_Street_1')
            ->maxLength('Address_Street_1', 34)
            ->allowEmpty('Address_Street_1');

        $validator
            ->scalar('Address_Street_2')
            ->maxLength('Address_Street_2', 34)
            ->allowEmpty('Address_Street_2');

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
            ->scalar('Last_Modified_By')
            ->maxLength('Last_Modified_By', 35)
            ->requirePresence('Last_Modified_By', 'create')
            ->notEmpty('Last_Modified_By');

        $validator
            ->integer('Loads')
            ->requirePresence('Loads', 'create')
            ->notEmpty('Loads');

        $validator
            ->scalar('Phone')
            ->maxLength('Phone', 19)
            ->allowEmpty('Phone');

        $validator
            ->integer('Record_ID')
            ->allowEmpty('Record_ID', 'create');

        $validator
            ->scalar('Record_Owner')
            ->maxLength('Record_Owner', 35)
            ->requirePresence('Record_Owner', 'create')
            ->notEmpty('Record_Owner');

        return $validator;
    }
}
