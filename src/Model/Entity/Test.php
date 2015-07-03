<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Test Entity.
 */
class Test extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'photo' => true,
        'photo_dir' => true,
        'parent_id' => true,
        'lft' => true,
        'rght' => true,
        'parent_test' => true,
        'child_tests' => true,
    ];
}
