<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'email' => true,
        'email_token' => true,
        'email_verified' => true,
        'email_token_expires' => true,
        'active' => true,
        'password' => true,
        'password_token' => true,
        'password_token_expires' => true,
        'role' => true,
        'last_login' => true,
    ];
}
