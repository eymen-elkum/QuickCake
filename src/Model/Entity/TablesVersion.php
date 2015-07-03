<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TablesVersion Entity.
 */
class TablesVersion extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'version' => true,
    ];
}
