<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Content Entity.
 */
class Content extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'category_id' => true,
        'title' => true,
        'text' => true,
        'url' => true,
        'photo' => true,
        'photo_dir' => true,
        'category' => true,
        'photos' => true,
        'tab1' => true,
        'tab2' => true,
        'tab3' => true,
        'title1' => true,
        'title2' => true,
        'title3' => true,
        'map_x' => true,
        'map_y' => true,
    ];
}
