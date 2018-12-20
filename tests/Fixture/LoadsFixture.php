<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LoadsFixture
 *
 */
class LoadsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Company_Name' => ['type' => 'string', 'length' => 63, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Status' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Load_Number' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Driver' => ['type' => 'string', 'length' => 7, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Rate' => ['type' => 'string', 'length' => 9, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Payment_Method' => ['type' => 'string', 'length' => 9, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Dispacther' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Date_Created' => ['type' => 'string', 'length' => 19, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Pick_Up_Address' => ['type' => 'string', 'length' => 62, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Delivery_Address' => ['type' => 'string', 'length' => 58, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Comments' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Bill_Of_Lading' => ['type' => 'string', 'length' => 35, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Company_Address_City' => ['type' => 'string', 'length' => 17, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Company_Address_StateRegion' => ['type' => 'string', 'length' => 14, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Company_Address_Street_1' => ['type' => 'string', 'length' => 29, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Company_Date_Created' => ['type' => 'string', 'length' => 19, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Company_MCNumber' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Date_Modified' => ['type' => 'string', 'length' => 19, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Delivery_Address_City' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Delivery_Address_Country' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Delivery_Address_Postal_Code' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Delivery_Address_StateRegion' => ['type' => 'string', 'length' => 14, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Delivery_Address_Street_1' => ['type' => 'string', 'length' => 27, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Delivery_Address_Street_2' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Destination_City_Name' => ['type' => 'string', 'length' => 14, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Destination_State' => ['type' => 'string', 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'GenerateInvoice' => ['type' => 'string', 'length' => 236, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Last_Modified_By' => ['type' => 'string', 'length' => 35, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Pick_Up_Address_City' => ['type' => 'string', 'length' => 18, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Pick_Up_Address_Country' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Pick_Up_Address_Postal_Code' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Pick_Up_Address_StateRegion' => ['type' => 'string', 'length' => 14, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Pick_Up_Address_Street_1' => ['type' => 'string', 'length' => 38, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Pick_Up_Address_Street_2' => ['type' => 'string', 'length' => 7, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Pick_Up_City_Name' => ['type' => 'string', 'length' => 13, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Pick_Up_State' => ['type' => 'string', 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Rate_Confirmation' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Record_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Record_Owner' => ['type' => 'string', 'length' => 35, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Related_Company' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Record_ID'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'Company_Name' => 'Lorem ipsum dolor sit amet',
                'Status' => 'Lorem ip',
                'Load_Number' => 'Lorem ipsum',
                'Driver' => 'Lorem',
                'Rate' => 'Lorem i',
                'Payment_Method' => 'Lorem i',
                'Dispacther' => 'Lorem ipsum',
                'Date_Created' => 'Lorem ipsum dolor',
                'Pick_Up_Address' => 'Lorem ipsum dolor sit amet',
                'Delivery_Address' => 'Lorem ipsum dolor sit amet',
                'Comments' => 'Lorem ipsum dolor sit amet',
                'Bill_Of_Lading' => 'Lorem ipsum dolor sit amet',
                'Company_Address_City' => 'Lorem ipsum dol',
                'Company_Address_StateRegion' => 'Lorem ipsum ',
                'Company_Address_Street_1' => 'Lorem ipsum dolor sit amet',
                'Company_Date_Created' => 'Lorem ipsum dolor',
                'Company_MCNumber' => 'Lorem ipsum dolor sit amet',
                'Date_Modified' => 'Lorem ipsum dolor',
                'Delivery_Address_City' => 'Lorem ipsum do',
                'Delivery_Address_Country' => 'Lorem ipsum',
                'Delivery_Address_Postal_Code' => 1,
                'Delivery_Address_StateRegion' => 'Lorem ipsum ',
                'Delivery_Address_Street_1' => 'Lorem ipsum dolor sit ame',
                'Delivery_Address_Street_2' => 'Lorem ipsum d',
                'Destination_City_Name' => 'Lorem ipsum ',
                'Destination_State' => 'Lo',
                'GenerateInvoice' => 'Lorem ipsum dolor sit amet',
                'Last_Modified_By' => 'Lorem ipsum dolor sit amet',
                'Pick_Up_Address_City' => 'Lorem ipsum dolo',
                'Pick_Up_Address_Country' => 'Lorem ipsum',
                'Pick_Up_Address_Postal_Code' => 1,
                'Pick_Up_Address_StateRegion' => 'Lorem ipsum ',
                'Pick_Up_Address_Street_1' => 'Lorem ipsum dolor sit amet',
                'Pick_Up_Address_Street_2' => 'Lorem',
                'Pick_Up_City_Name' => 'Lorem ipsum',
                'Pick_Up_State' => 'Lo',
                'Rate_Confirmation' => 'Lorem ipsum dolor sit amet',
                'Record_ID' => 1,
                'Record_Owner' => 'Lorem ipsum dolor sit amet',
                'Related_Company' => 1
            ],
        ];
        parent::init();
    }
}
