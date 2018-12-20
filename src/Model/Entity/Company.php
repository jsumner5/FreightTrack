<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property string $Name
 * @property int|null $MCNumber
 * @property string $Factorable
 * @property int $_of_Loads
 * @property string $Add_Load
 * @property string|null $Notes
 * @property string|null $Address
 * @property string|null $Address_City
 * @property string $Address_Country
 * @property string|null $Address_Postal_Code
 * @property string|null $Address_StateRegion
 * @property string|null $Address_Street_1
 * @property string|null $Address_Street_2
 * @property string $Date_Created
 * @property string $Date_Modified
 * @property string $Last_Modified_By
 * @property int $Loads
 * @property string|null $Phone
 * @property int $Record_ID
 * @property string $Record_Owner
 */
class Company extends Entity
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
        'Name' => true,
        'MCNumber' => true,
        'Factorable' => true,
        '_of_Loads' => true,
        'Add_Load' => true,
        'Notes' => true,
        'Address' => true,
        'Address_City' => true,
        'Address_Country' => true,
        'Address_Postal_Code' => true,
        'Address_StateRegion' => true,
        'Address_Street_1' => true,
        'Address_Street_2' => true,
        'Date_Created' => true,
        'Date_Modified' => true,
        'Last_Modified_By' => true,
        'Loads' => true,
        'Phone' => true,
        'Record_Owner' => true
    ];
}
