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
        $this->belongsTo('Companies',['foreignKey'=>'CompanyID']);
        $this->belongsTo('Drivers',['foreignKey'=> 'DriverID']);


       $this->addBehavior('Timestamp', [
        'events' => [
            'Model.beforeSave' => [
                'DateCreated' => 'new',
                'DateModified' => 'always',
            ],
            ]


            // I would rather find a way to save it to the file system
    //    $this->addBehavior('Josegonzalez/Upload.Upload', [
    //     'rate_attachment' => [
    //         'fields' => [
    //             // if these fields or their defaults exist
    //             // the values will be set.
    //             'dir' => 'rate_dir', // defaults to `dir`
    //             'size' => 'rate_size', // defaults to `size`
    //             'type' => 'rate_type', // defaults to `type`
    //         ],
    //     ],
    //     'bol_attachment' => [
    //         'fields' => [
    //             // if these fields or their defaults exist
    //             // the values will be set.
    //             'dir' => 'bol_dir', // defaults to `dir`
    //             'size' => 'bol_size', // defaults to `size`
    //             'type' => 'bol_type', // defaults to `type`
    //         ],
    //     ],
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
   

 


        return $validator;
    }
}
