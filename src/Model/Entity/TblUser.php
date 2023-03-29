<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TblUser Entity
 *
 * @property int $Id_user
 * @property string $Name_user
 * @property string $Email_user
 * @property string $Num_empleado
 * @property int $Edad_user
 * @property string $Num_contacto
 */
class TblUser extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'Name_user' => true,
        'Email_user' => true,
        'Num_empleado' => true,
        'Edad_user' => true,
        'Num_contacto' => true,
    ];
}
