<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Load Entity
 *
 * @property string $Company_Name
 * @property string $Status
 * @property string $Load_Number
 * @property string $Driver
 * @property string $Rate
 * @property string $Payment_Method
 * @property string $Dispacther
 * @property string $Date_Created
 * @property string|null $Pick_Up_Address
 * @property string|null $Delivery_Address
 * @property string|null $Comments
 * @property string|null $Bill_Of_Lading
 * @property string|null $Company_Address_City
 * @property string|null $Company_Address_StateRegion
 * @property string|null $Company_Address_Street_1
 * @property string $Company_Date_Created
 * @property string|null $Company_MCNumber
 * @property string $Date_Modified
 * @property string|null $Delivery_Address_City
 * @property string $Delivery_Address_Country
 * @property int|null $Delivery_Address_Postal_Code
 * @property string|null $Delivery_Address_StateRegion
 * @property string|null $Delivery_Address_Street_1
 * @property string|null $Delivery_Address_Street_2
 * @property string|null $Destination_City_Name
 * @property string|null $Destination_State
 * @property string $GenerateInvoice
 * @property string $Last_Modified_By
 * @property string|null $Pick_Up_Address_City
 * @property string $Pick_Up_Address_Country
 * @property int|null $Pick_Up_Address_Postal_Code
 * @property string|null $Pick_Up_Address_StateRegion
 * @property string|null $Pick_Up_Address_Street_1
 * @property string|null $Pick_Up_Address_Street_2
 * @property string|null $Pick_Up_City_Name
 * @property string|null $Pick_Up_State
 * @property string|null $Rate_Confirmation
 * @property int $Record_ID
 * @property string $Record_Owner
 * @property int $Related_Company
 */
class Load extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'Company_Name' => true,
        'Status' => true,
        'Load_Number' => true,
        'Driver' => true,
        'Rate' => true,
        'Payment_Method' => true,
        'Dispacther' => true,
        'Date_Created' => true,
        'Pick_Up_Address' => true,
        'Delivery_Address' => true,
        'Comments' => true,
        'Bill_Of_Lading' => true,
        'Company_Address_City' => true,
        'Company_Address_StateRegion' => true,
        'Company_Address_Street_1' => true,
        'Company_Date_Created' => true,
        'Company_MCNumber' => true,
        'Date_Modified' => true,
        'Delivery_Address_City' => true,
        'Delivery_Address_Country' => true,
        'Delivery_Address_Postal_Code' => true,
        'Delivery_Address_StateRegion' => true,
        'Delivery_Address_Street_1' => true,
        'Delivery_Address_Street_2' => true,
        'Destination_City_Name' => true,
        'Destination_State' => true,
        'GenerateInvoice' => true,
        'Last_Modified_By' => true,
        'Pick_Up_Address_City' => true,
        'Pick_Up_Address_Country' => true,
        'Pick_Up_Address_Postal_Code' => true,
        'Pick_Up_Address_StateRegion' => true,
        'Pick_Up_Address_Street_1' => true,
        'Pick_Up_Address_Street_2' => true,
        'Pick_Up_City_Name' => true,
        'Pick_Up_State' => true,
        'Rate_Confirmation' => true,
        'Record_Owner' => true,
        'Related_Company' => true
    ];
}
