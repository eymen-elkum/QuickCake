<?php
namespace Icons\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Icon helper
 */
class IconHelper extends Helper
{

    public $helpers = ['Html'];

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function loadAssists()
    {
        echo $this->Html->css(['Icons.ionicons.min', 'Icons.stylesheet']);
        //echo $this->Html->script(['Icons.app']);
    }

    public function show($icon, $color = '#666666')
    {
        echo '<a class="btn btn-default" style="font-size: 40px;width: 70px;"><span class="' . $icon . '" id="icon-value-button" data-pack="default" style="color:' . $color . '"></span></a>';
    }
}
