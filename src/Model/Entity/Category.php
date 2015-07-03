<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity.
 */
class Category extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'photo' => true,
        'icon' => true,
        'color' => true,
        'photo_dir' => true,
        'parent_id' => true,
        'lft' => true,
        'rght' => true,
        'parent_category' => true,
        'child_categories' => true,
        'contents' => true,
    ];
}
