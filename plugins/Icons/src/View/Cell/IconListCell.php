<?php
namespace Icons\View\Cell;

use Cake\View\Cell;

/**
 * IconList cell
 */
class IconListCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @param string $input_name
     * @param $value
     */
    public function display($input_name = 'icon', $value = null)
    {
        $value = (strlen($value) < 1) ? 'ion-folder' : $value;
        $this->set(compact('input_name', 'value'));
    }
}
