<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Driver Entity
 *
 * @property string $First_Name
 * @property string $Last_Name
 * @property string|null $Phone_Number
 * @property string|null $Email
 * @property string $Date_Created
 * @property string $Date_Modified
 * @property int $Record_ID
 * @property string $Record_Owner
 * @property string $Last_Modified_By
 */
class Driver extends Entity
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
        'FirstName' => true,
        'LastName' => true,
        'PhoneNumber' => true,
        'Email' => true,
        'DateCreated' => true,
        'DateModified' => true,
    ];
}
