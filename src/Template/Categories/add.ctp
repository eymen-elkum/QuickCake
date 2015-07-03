<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
    <ul class="nav nav-sidebar">
        <li><?= $this->Html->link(__('Kategori\'ler Listesi'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Item\'ler Listesi'), ['controller' => 'Contents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Yeni Item'), ['controller' => 'Contents', 'action' => 'add']) ?> </li>
    </ul>
<?php $this->end(); ?>
<?= $this->Form->create($category, ['type' => 'file']); ?>
    <fieldset>
        <legend><?= __('Add {0}', ['Category']) ?></legend>
        <?php
        echo $this->Form->input('title');
        //echo $this->Form->input('photo', ['type' => 'file']);
        echo $this->Form->input('parent_id', ['options' => $parentCategories, 'empty' => __('No Parent')]);
        //$this->append('script',$this->Html->script('Icons.app'));
        echo $this->Form->input('color', ['type' => 'color']);
        echo $this->cell('Icons.IconList');
        ?>
    </fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>