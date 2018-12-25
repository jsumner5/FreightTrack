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

        $this->setTable('loads');
        $this->setDisplayField('Load_ID');
        $this->setPrimaryKey('Load_ID');
        $this ->belongsTo('companies',['foreignKey'=>'Company_ID']);
        $this-> hasOne('Copanies',['foreignKey' => 'Company_ID']);
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
            ->scalar('Company_Name')
            ->maxLength('Company_Name', 63)
            ->requirePresence('Company_Name', 'create')
            ->notEmpty('Company_Name');

        $validator
            ->scalar('Status')
            ->maxLength('Status', 10)
            ->requirePresence('Status', 'create')
            ->notEmpty('Status');

        $validator
            ->scalar('Load_Number')
            ->maxLength('Load_Number', 13)
            ->requirePresence('Load_Number', 'create')
            ->notEmpty('Load_Number');

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
            ->scalar('Payment_Method')
            ->maxLength('Payment_Method', 9)
            ->requirePresence('Payment_Method', 'create')
            ->notEmpty('Payment_Method');

        $validator
            ->scalar('Dispacther')
            ->maxLength('Dispacther', 13)
            ->requirePresence('Dispacther', 'create')
            ->notEmpty('Dispacther');

        $validator
            ->scalar('Date_Created')
            ->maxLength('Date_Created', 19)
            ->requirePresence('Date_Created', 'create');

        $validator
            ->scalar('Pick_Up_Address')
            ->maxLength('Pick_Up_Address', 62)
            ->allowEmpty('Pick_Up_Address');

        $validator
            ->scalar('Delivery_Address')
            ->maxLength('Delivery_Address', 58)
            ->allowEmpty('Delivery_Address');

        $validator
            ->scalar('Comments')
            ->maxLength('Comments', 500)
            ->allowEmpty('Comments');

        $validator
            ->scalar('Bill_Of_Lading')
            ->maxLength('Bill_Of_Lading', 35)
            ->allowEmpty('Bill_Of_Lading');

        $validator
            ->scalar('Company_Address_City')
            ->maxLength('Company_Address_City', 17)
            ->allowEmpty('Company_Address_City');

        $validator
            ->scalar('Company_Address_StateRegion')
            ->maxLength('Company_Address_StateRegion', 14)
            ->allowEmpty('Company_Address_StateRegion');

        $validator
            ->scalar('Company_Address_Street_1')
            ->maxLength('Company_Address_Street_1', 29)
            ->allowEmpty('Company_Address_Street_1');

        // $validator
        //     ->scalar('Company_Date_Created')
        //     ->maxLength('Company_Date_Created', 19)
        //     ->requirePresence('Company_Date_Created', 'create')
        //     ->notEmpty('Company_Date_Created');

        // $validator
        //     ->scalar('Company_MCNumber')
        //     ->maxLength('Company_MCNumber', 30)
        //     ->allowEmpty('Company_MCNumber');

       //$validator
         //   ->scalar('Date_Modified')
           // ->maxLength('Date_Modified', 19)
           // ->requirePresence('Date_Modified', 'create')
            //->notEmpty('Date_Modified');

        // $validator
        //     ->scalar('Delivery_Address_City')
        //     ->maxLength('Delivery_Address_City', 16)
        //     ->allowEmpty('Delivery_Address_City');

        // $validator
        //     ->scalar('Delivery_Address_Country')
        //     ->maxLength('Delivery_Address_Country', 13)
           // ->requirePresence('Delivery_Address_Country', 'create')
           // ->notEmpty('Delivery_Address_Country');

        // $validator
        //     ->integer('Delivery_Address_Postal_Code')
        //     ->allowEmpty('Delivery_Address_Postal_Code');

        // $validator
        //     ->scalar('Delivery_Address_StateRegion')
        //     ->maxLength('Delivery_Address_StateRegion', 14)
        //     ->allowEmpty('Delivery_Address_StateRegion');

        // $validator
        //     ->scalar('Delivery_Address_Street_1')
        //     ->maxLength('Delivery_Address_Street_1', 27)
        //     ->allowEmpty('Delivery_Address_Street_1');

        // $validator
        //     ->scalar('Delivery_Address_Street_2')
        //     ->maxLength('Delivery_Address_Street_2', 15)
        //     ->allowEmpty('Delivery_Address_Street_2');

        // $validator
        //     ->scalar('Destination_City_Name')
        //     ->maxLength('Destination_City_Name', 14)
        //     ->allowEmpty('Destination_City_Name');

        // $validator
        //     ->scalar('Destination_State')
        //     ->maxLength('Destination_State', 2)
        //     ->allowEmpty('Destination_State');

        // $validator
        //     ->scalar('GenerateInvoice')
        //     ->maxLength('GenerateInvoice', 236)
        //     ->requirePresence('GenerateInvoice', 'create')
        //     ->notEmpty('GenerateInvoice');

        // $validator
        //     ->scalar('Last_Modified_By')
        //     ->maxLength('Last_Modified_By', 35)
        //     ->requirePresence('Last_Modified_By', 'create')
        //     ->notEmpty('Last_Modified_By');

        // $validator
        //     ->scalar('Pick_Up_Address_City')
        //     ->maxLength('Pick_Up_Address_City', 18)
        //     ->allowEmpty('Pick_Up_Address_City');

        // $validator
        //     ->scalar('Pick_Up_Address_Country')
        //     ->maxLength('Pick_Up_Address_Country', 13)
        //   //  ->requirePresence('Pick_Up_Address_Country', 'create')
        // //     ->notEmpty('Pick_Up_Address_Country');

        // $validator
        //     ->integer('Pick_Up_Address_Postal_Code')
        //     ->allowEmpty('Pick_Up_Address_Postal_Code');

        // $validator
        //     ->scalar('Pick_Up_Address_StateRegion')
        //     ->maxLength('Pick_Up_Address_StateRegion', 14)
        //     ->allowEmpty('Pick_Up_Address_StateRegion');

        // $validator
        //     ->scalar('Pick_Up_Address_Street_1')
        //     ->maxLength('Pick_Up_Address_Street_1', 38)
        //     ->allowEmpty('Pick_Up_Address_Street_1');

        // $validator
        //     ->scalar('Pick_Up_Address_Street_2')
        //     ->maxLength('Pick_Up_Address_Street_2', 7)
        //     ->allowEmpty('Pick_Up_Address_Street_2');

        // $validator
        //     ->scalar('Pick_Up_City_Name')
        //     ->maxLength('Pick_Up_City_Name', 13)
        //     ->allowEmpty('Pick_Up_City_Name');

        // $validator
        //     ->scalar('Pick_Up_State')
        //     ->maxLength('Pick_Up_State', 2)
        //     ->allowEmpty('Pick_Up_State');

        // $validator
        //     ->scalar('Rate_Confirmation')
        //     ->maxLength('Rate_Confirmation', 40)
        //     ->allowEmpty('Rate_Confirmation');

        // $validator
        //     ->integer('Record_ID')
        //     ->allowEmpty('Record_ID', 'create');

        // $validator
        //     ->scalar('Record_Owner')
        //     ->maxLength('Record_Owner', 35);
           // ->requirePresence('Record_Owner', 'create')
            //->notEmpty('Record_Owner');

        // $validator
        //     ->integer('Related_Company')
        //     ->requirePresence('Related_Company', 'create')
        //     ->notEmpty('Related_Company');

        return $validator;
    }
}
