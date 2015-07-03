<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Photo Entity.
 */
class Photo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'photo' => true,
        'photo_dir' => true,
        'content_id' => true,
        'content' => true,
    ];
}
