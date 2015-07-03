<?php
/**
 * Created by PhpStorm.
 * User: Kobit-Aymn
 * Date: 5/11/2015
 * Time: 4:38 PM
 */

namespace App\Model\Table;


use Cake\Database\Schema\Table as Schema;
use Cake\ORM\Table;

class PhotoTable extends Table
{

    public $thumbs = [
        '60'       => ['w' => 60, 'h' => 60, 'crop' => true],
        '200'      => ['w' => 200, 'h' => 200, 'crop' => true],
        'portrait' => ['w' => 100, 'h' => 300, 'crop' => true],
    ];

    protected function _initializeSchema(Schema $table)
    {
        //return parent::_initializeSchema($table);
        $table->columnType('photo', 'proffer.file');

        return $table;
    }

    public function initialize(array $config)
    {
        // Add the behaviour and configure any options you want
        $this->addBehavior('Proffer.Proffer', [
            'photo' => [
                'root'            => WWW_ROOT . 'files',
                'thumbnailMethod' => 'Imagick',
                'dir'             => 'photo_dir',
                'thumbnailSizes'  => $this->thumbs,
            ]
        ]);
    }
}